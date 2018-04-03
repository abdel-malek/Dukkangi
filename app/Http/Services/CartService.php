<?php
namespace App\Http\Services;
use App\Order;
use App\OrderItem;
use App\OrderStatus;
use App\Http\Services\PaymentService;

class CartService{

  private static function createCart($id,$userId,$paymentId = null){
    $order = Order::updateOrCreate(['id' => $id],
    ['id' => $id, 'payment_id' => $paymentId,'user_id' => $userId,'status_id' => OrderStatus::CREATED]);
    session(['cartId' => $order->id]);
    return $order->id;
  }

  private static function createOrderItem($product,$qty,$cartId,$userId){
  $cartId =  self::createCart($cartId,$userId,null);
    return OrderItem::updateOrCreate(['order_id' => $cartId,'item_id' => $product->id,'user_id' => $userId],
          ['order_id' => $cartId,'item_id' => $product->id,
          'sub_amount' => $product->price,'qty' => $qty, 'total_amount' => $product->price * $qty,
          'gain_point' => ceil($product->point /5),'user_id' => $userId,'status_id' => OrderStatus::CREATED,
          'currency' => $product->currency]);
  }

  public static function removeOrderItem($id){
    return OrderItem::where('id','=',$id)->delete();
  }

  public static function addToCart($productId,$qty,$cartId,$userId){
    $product = ProductService::loadById($productId);
    return self::createOrderItem($product,$qty,$cartId,$userId);
  }

  public static function updateCartStatus($cartId,$status){
    self::updateOrderItemStatus($cartId,$status);
    return Order::where('id','=',$cartId)->update(['status_id' => $status]);
  }
  private static function updateOrderItemStatus($cartId,$status){
    return OrderItem::where('order_id','=',$cartId)->update(['status_id' => $status]);
  }

  private static function completeCart($cartId,$paymentId){
    //change order item to complete status
    self::updateOrderItemStatus($cartId,OrderStatus::COMPLETED);

    //change order to  complete status and add $paymentId
    Order::where('id','=',$cartId)->update(['status_id' => OrderStatus::COMPLETED,'payment_id' => $paymentId]);

    //remove cart from Session
    session()->forget('cartId');
    return true;
  }

  public static function loadCart($cartId){
    // load  order items with products
    $result = OrderItem::with('product')
    ->where('order_id','=',$cartId)
    ->where('status_id','=',OrderStatus::CREATED);
    $gainPoints = $result->sum('gain_point');

    $orderItems = $result->get();

    //$taxes = $result->sum('total_amount');

    return ['orderItems' => $orderItems,'gainPoints' => $gainPoints];
   }

  public static function checkout($cartId,$products,$paymentMethodId = 1 ,$userId){
    foreach ($products as $product) {
      self::addToCart($product['id'],$product['qty'],$cartId,$userId);
    }

    //Calculate Amount
    $amount = self::getTotalAmount($cartId);
    //make a payment
    // TODO: Pass payment method id
    $payment = PaymentService::createPayment($paymentMethodId,$cartId,$userId,$amount,'EUR');
    return self::completeCart($cartId,$payment->id);
  }

  private static function getTotalAmount($cartId){
    return OrderItem::where('order_id','=',$cartId)->where('status_id','=',OrderStatus::CREATED)
    ->sum('total_amount');
  }



}
 ?>
