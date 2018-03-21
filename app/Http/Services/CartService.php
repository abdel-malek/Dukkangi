<?php
namespace App\Http\Services;
use App\Order;
use App\Services\PaymentService;

class CartService{

  public static function createNewCart($paymentMethodId,$amount,$currency,$userId,$productId){
    //create New Payment
    $payment = PaymentService::createNewPayment($paymentMethodId,$userId,$amount,$currency);
    //create Cart
    return self::createCart($payment->id,$productId,$userId);
  }

  private static function createCart($paymentId,$productId,$userId){
    return Order::create(['payment_id' => $paymentId,'product_id' =>$productId,'user_id' => $userId]);
  }
}
 ?>
