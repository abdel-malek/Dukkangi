<?php
namespace App\Http\Services;

use App\Order;
use App\OrderItem;
use App\OrderStatus;
use Session;
use App\Product;
use App\Http\Services\PaymentService;
use App\Http\Services\CouponService;
use App\Http\Services\ProductService;
use App\Http\Services\MailService;
use App\User;
use Illuminate\Support\Carbon;
use App\Http\Services\SessionService;
use App\Coupon;

class CartService
{
    private static function createCart($id, $userId, $paymentId = null)
    {
      $orderId = $id;
        if (empty($orderId)) {
            $order = Order::updateOrCreate(['id' => $id],
            ['id' => $id, 'payment_id' => $paymentId, 'user_id' => $userId, 'status_id' => OrderStatus::CREATED]);
            session(['cartId' => $order->id]);
            $orderId =  $order->id;
        }
        return $orderId;
    }


    private static function createOrderItem($product, $qty, $cartId, $userId, $is_pay = 'true')
    {
        $cartId = self::createCart($cartId, $userId, null);
        $price = isset($product->discount_price) ?$product->discount_price :$product->price;
//        dd($is_pay);
        if($is_pay == 'false'){
        $orderItems = OrderItem::updateOrCreate(
            ['order_id' => $cartId, 'item_id' => $product->id, 'user_id' => $userId],
            ['order_id' => $cartId, 'item_id' => $product->id,
                'sub_amount' => $price,
                'qty' => 0,
                'qty_in_my_card' => $qty,
                'total_amount' => $price * $qty,
                'gain_point' => ceil($product->point / 5), 'user_id' => $userId, 'status_id' => OrderStatus::CREATED,
                'currency' => $product->currency]
        );
        }else{
           $orderItems = OrderItem::updateOrCreate(
            ['order_id' => $cartId, 'item_id' => $product->id, 'user_id' => $userId],
            ['order_id' => $cartId, 'item_id' => $product->id,
                'sub_amount' => $price,
                'qty' => $qty,
                'qty_in_my_card' => 0,
                'total_amount' => $price * $qty,
                'gain_point' => ceil($product->point / 5), 'user_id' => $userId, 'status_id' => OrderStatus::CREATED,
                'currency' => $product->currency]
        );   
        }
        return $orderItems;
    }
    private static function getOrderItemCount($cartId){
      $count = OrderItem::where('order_id','=',$cartId)
      ->where('status_id','=',OrderStatus::CREATED)
      ->count();
      if ($count != 0)
          session(['order_item_count' => $count]);
      else 
        session(['order_item_count' => 1]);
    session()->save();
    }

    private static function buyItemCart($userId, $paymentId = null)
    {
        $order = Order::updateOrCreate(
            ['id' => 0],
            ['payment_id' => $paymentId, 'user_id' => $userId, 'status_id' => OrderStatus::CREATED]
        );
        session(['cartIdBuyItem' => $order->id]);
        return $order->id;
    }


    private static function createBuyItem($product, $qty, $userId)
    {
        $cartId = self::buyItemCart($userId, null);
        return OrderItem::updateOrCreate(
            ['order_id' => $cartId, 'item_id' => $product->id, 'user_id' => $userId],
            [   'order_id' => $cartId, 'item_id' => $product->id,
                'sub_amount' => isset($product->discount_price) ?$product->discount_price :$product->price, 'qty' => $qty,
                'total_amount' => (isset($product->discount_price)? $product->discount_price : $product->price) * $qty,
                'gain_point' => ceil($product->point / 5), 'user_id' => $userId, 'status_id' => OrderStatus::CREATED,
                'currency' => $product->currency]
        );
    }

    public static function removeOrderItem($id,$is_click_delete)
    {
//        dd($id);
        if($is_click_delete == true){
        OrderItem::where('id', '=', $id)->delete();
        $count = OrderItem::where('order_id','=',session('cartId'))
            ->where('status_id','=',OrderStatus::CREATED)
            ->count();
        session(['order_item_count' => $count]);
        session()->save();
        }
    }
    
    public static function addToCart($productId, $qty, $cartId, $userId, $is_pay = 'true')
    {
        $product = ProductService::loadById($productId);
        $orderItem = self::createOrderItem($product, $qty, $cartId, $userId, $is_pay);

        self::getOrderItemCount($cartId);
        // session(['order_item_count' => session('order_item_count') + 1]);
        return $orderItem;
    }

    public static function BuyThisItem($productId, $qty, $userId)
    {
        $product = ProductService::loadById($productId);
        return self::createBuyItem($product, $qty, $userId);
    }


    public static function updateCartStatus($cartId, $status)
    {
        self::updateOrderItemStatus($cartId, $status);
        return Order::where('id', '=', $cartId)->update(['status_id' => $status]);
    }

    private static function updateOrderItemStatus($cartId, $status)
    {
        return OrderItem::where('order_id', '=', $cartId)->update(['status_id' => $status]);
    }

    private static function completeCart($cartId, $paymentId)
    {
        //change order item to complete status
        self::updateOrderItemStatus($cartId, OrderStatus::COMPLETED);

        //change order to  complete status and add $paymentId
        Order::where('id', '=', $cartId)->update(['status_id' => OrderStatus::COMPLETED, 'payment_id' => $paymentId]);

        //Coupon
        $order = Order::find($cartId);
        if (isset($order->coupon_id)){
            CouponService::couponUsed($order->coupon_id);
        }
        //remove cart from Session
        SessionService::clearCartFromSession();

        return 'true';
    }

    public static function loadCart($cartId)
    {
        // load  order items with products
        $result = OrderItem::with('product')
            ->where('order_id', '=', $cartId)
            ->where('status_id', '=', OrderStatus::CREATED);
        $gainPoints = $result->sum('gain_point');

        $orderItems = $result->get();

        $amount = self::getAmount($cartId);

        // $coupon = Order::find(session('cartId'))->coupon_id;
        // if(isset($coupon)){
        //     $coupon = Coupon::find($coupon);
        //     if ($coupon->coupon_type == 'fixed'){
        //         $amount -= $coupon->amount;
        //         if ($amount < 0 ) $amount =0;
        //     }
        //     else if ($coupon->coupon_type = 'percentage'){
        //         $amount -= $amount * $coupon->amount;
        //     }
        // }

        $tax = 0;
        foreach ($orderItems as $orderItem) {
            $taxFees = $orderItem->product->tax_fees;
            $orderItemAmount = $orderItem->total_amount;
            $tax += self::calculateTaxAmount($orderItemAmount, $taxFees);
        }

        return ['orderItems' => $orderItems, 'gainPoints' => $gainPoints, 'taxes' => $tax, 'amount' => $amount];
    }

    public static  function getAmount($cartId){
     /*   $result = OrderItem::with('product')
            ->where('order_id', '=', $cartId)
            ->where('status_id', '=', OrderStatus::CREATED);
        $amount = $result->sum('total_amount');

        $coupon = Order::find(session('cartId'));
        if(isset($coupon)){
            $coupon = $coupon->coupon_id;
            $coupon = Coupon::find($coupon);
            if (isset($coupon)){
                if ($coupon->coupon_type == 'fixed'){
                    $amount -= $coupon->amount;
                    if ($amount < 0 ) $amount =0;
                }
                else if ($coupon->coupon_type = 'percentage'){
                    $amount -= $amount * $coupon->amount;
                }
            }
        }
    */
        // $amount =0;
        // $orders = OrderItem::where('order_id', '=', $cartId)->get();
        // foreach ($orders as $order) {
        //     $product= Product::find($order->item_id);
        //     $amount += (isset($product->discount_price) ? $product->discount_price : $product->price    )* $order->qty;
        // }
        $amount = OrderItem::where('order_id','=',$cartId)->sum('total_amount');
        $cart= Order::find($cartId);
        if(isset($cart->coupon_id)){
            $coupon = Coupon::find($cart->coupon_id);
            if ($coupon->coupon_type == 'percentage'){
                $amount -= $amount * $coupon->amount ;
            }
            else{
                $amount -= $coupon->amount;
            }
        }

        return ['amount' => $amount];
    }

    public static function checkout($cartId, $products, $paymentMethodId = 1, $userId,$amount)
    {
        $tax = 0;
        $taxes = [];
        $items = [];
        foreach ($products as $product) {
            $orderItem = self::addToCart($product['id'], $product['qty_in_my_card'], $cartId, $userId, 'true');
            $taxFees = ProductService::getProductTax($product['id']);
            $tax += self::calculateTaxAmount($orderItem->total_amount, $taxFees);
            array_push($taxes, $taxFees);
            $pr = Product::find($product['id']);
            $product['price']  = (isset($pr->discount_price) ?$pr->discount_price : $pr->price );
            $product['name'] = $pr->english;
            array_push($items, $product);
        }

        //Calculate Amount
        $calcAmount = self::getTotalAmount($cartId);
        $order = Order::find(session('cartId'));
        if (isset($order->coupon_id) ){
            $coupon = Coupon::find($order->coupon_id);
            if ($coupon->coupon_type == 'fixed'){
                $calcAmount -= $coupon->amount;
            }
            else {
                $calcAmount = $calcAmount - ($calcAmount * $coupon->amount);
            }
        }
        $fake = 0;
        if(abs(sprintf('%0.2f', $calcAmount ) - sprintf('%0.2f', $amount))  > 0.01 ){
            $fake =1;

        }

        if (!$fake){
            $user = User::find($userId);
            MailService::send('emails.complete_order' , ['total'=>$amount,
            'subtotal' => $amount - ($amount * 0.19),
            'username' => $user->name,
            'orderItems' => $items,
            'orderId' => $cartId,
            'taxes' =>$taxes,
            'tax' => $tax ] , 'Order@dukkangi.com' , $user->email, 'order complete');



            //make a payment
            // TODO: Pass payment method id
            $payment = PaymentService::createPayment($paymentMethodId, $cartId, $userId, $amount, 'EUR', $tax);
            session(['order_item_count' => 0]);
            return self::completeCart($cartId, $payment->id);
        }
        else {
            return self::deleteCart();
        }
    }

    private static function getTotalAmount($cartId)
    {
        return OrderItem::where('order_id', '=', $cartId)->where('status_id', '=', OrderStatus::CREATED)
            ->sum('total_amount');
    }

    private static function calculateTaxAmount($amount, $productTax)
    {
        return ($amount * $productTax);
    }

    public static function getTotalPrice($cartId)
    {
        return OrderItem::where('order_id', '=', $cartId)->where('status_id', '=', OrderStatus::CREATED)
            ->sum('total_amount');
    }

    public static function closeCart($cartId, $payment)
    {
        return self::completeCart($cartId, $payment);
    }

    public static function prepareCartAndReturnTotalAmount($products, $cartId, $userId)
    {
        $description = '';
        foreach ($products as $product) {
            $mProduct = ProductService::loadById($product['id']);
            self::addToCart($product['id'], $product['qty'], $cartId, $userId, 'true');
            $description = $description . $mProduct->english . '-' . $product['qty'] . "\n";
        }
        return ['amount' => self::getTotalAmount($cartId), 'description' => $description];
    }

    public static function loadProductCart($cartId)
    {
        return OrderItem::where('order_id', '=', $cartId)
      ->select('item_id as id', 'qty')->get()->toArray();
    }
    public static function loadProductCartAllData($cartId){

        return OrderItem::select('item_id as id','qty','qty_in_my_card')->where('order_id', '=', $cartId)->get()->toArray();
    }
    public static function clearCart(){
        // $session =Session::all();

        Order::where('created_at' , '<', Carbon::now()->subMinutes(30)->toDateTimeString())->where('status_id' , '=' , OrderStatus::INPROGRESS )->update('status_id' , OrderStatus::DELETED);
        OrderItem::where('created_at', '<', Carbon::now()->subMinutes(30)->toDateTimeString())->where('status_id' , '=' ,OrderStatus::INPROGRESS)->update('status_id' , OrderStatus::DELETED);
        session(['order_item_count' => 0]);
        session(['cartId' => 0]);
    }

    public static function deleteCart(){
        $cartId = session('cartId');
        Order::where('id','=',$cartId)->update(['status_id'=>OrderStatus::DELETED]);
        OrderItem::where('order_id','=',$cartId)->update(['status_id' => OrderStatus::DELETED]);
        session(['order_item_count' => 0]);
        session(['cartId' => 0]);
        return 'true';
    }
    public static function changeQty($qty , $ProductId){
        $cartId = session('cartId');
        $orderItem = OrderItem::where('item_id' , '=', $ProductId)->where('order_id' , '=' , $cartId)->get()->first();
        $orderItem->qty = $qty;
        $orderItem->total_amount = $orderItem->sub_amount * $qty;
        $orderItem->update();
    }
}
