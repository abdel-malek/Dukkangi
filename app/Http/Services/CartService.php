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


    private static function createOrderItem($product, $qty, $cartId, $userId)
    {
        $cartId = self::createCart($cartId, $userId, null);
        $orderItems = OrderItem::updateOrCreate(
            ['order_id' => $cartId, 'item_id' => $product->id, 'user_id' => $userId],
            ['order_id' => $cartId, 'item_id' => $product->id,
                'sub_amount' =>isset($product->discount_price) ?$product->discount_price :$product->price, 'qty' => $qty,
                'total_amount' => $product->price * $qty,
                'gain_point' => ceil($product->point / 5), 'user_id' => $userId, 'status_id' => OrderStatus::CREATED,
                'currency' => $product->currency]
        );
        return $orderItems;
    }
    private static function getOrderItemCount($cartId){
      $count = OrderItem::where('order_id','=',$cartId)
      ->where('status_id','=',OrderStatus::CREATED)
      ->count();
      session(['order_item_count' => $count]);
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
            ['order_id' => $cartId, 'item_id' => $product->id,
                'sub_amount' => isset($product->discount_price) ?$product->discount_price :$product->price, 'qty' => $qty,
                'total_amount' => $product->price * $qty,
                'gain_point' => ceil($product->point / 5), 'user_id' => $userId, 'status_id' => OrderStatus::CREATED,
                'currency' => $product->currency]
        );
    }

    public static function removeOrderItem($id)
    {
        return OrderItem::where('id', '=', $id)->delete();
    }

    public static function addToCart($productId, $qty, $cartId, $userId)
    {
        $product = ProductService::loadById($productId);
        $orderItem = self::createOrderItem($product, $qty, $cartId, $userId);
        self::getOrderItemCount($cartId);
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
        $amount =0;
        $orders = OrderItem::where('order_id', '=', $cartId)->get();
        foreach ($orders as $order) {
            $product= Product::find($order->item_id);
            $amount += isset($product->discount_price) ? $product->discount_price : $product->price ;
        }

        return ['amount' => $amount];        
    }

    public static function checkout($cartId, $products, $paymentMethodId = 1, $userId,$amount)
    {
        $tax = 0;
        $taxes = [];
        foreach ($products as $product) {
            $orderItem = self::addToCart($product['id'], $product['qty'], $cartId, $userId);
            $taxFees = ProductService::getProductTax($product['id']);
            $tax += self::calculateTaxAmount($orderItem->total_amount, $taxFees);
            array_push($taxes, $taxFees);
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
            'orderItem' => $products,
            'orderId' => $cartId,
            'taxes' =>$taxes,
            'tax' => $tax ] , 'Order@dukkangi.com' , $user->email, 'order complete');



            //make a payment
            // TODO: Pass payment method id
            $payment = PaymentService::createPayment($paymentMethodId, $cartId, $userId, $amount, 'EUR', $tax);

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


    public static function buyItemCheckout($cartId, $product, $paymentMethodId = 1, $userId)
    {
        $tax = 0;

        $orderItem = self::BuyThisItem($product['id'], $product['qty'], $userId);
        $taxFees = ProductService::getProductTax($product['id']);
        $tax += self::calculateTaxAmount($orderItem->total_amount, $taxFees);

        //Calculate Amount
        $amount = self::getTotalAmount($cartId);
        //make a payment
        // TODO: Pass payment method id
        $payment = PaymentService::createPayment($paymentMethodId, $cartId, $userId, $amount, 'EUR', $tax);
        return $payment->id;
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
            self::addToCart($product['id'], $product['qty'], $cartId, $userId);
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
        return OrderItem::where('order_id', '=', $cartId)
      ->select('*')->get()->toArray();

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
