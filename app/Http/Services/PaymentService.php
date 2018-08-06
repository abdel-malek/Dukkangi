<?php

namespace App\Http\Services;

use App\Payment;
use App\PaymentMethod;
use App\User;
use Session;

class PaymentService {
	public static function loadPaymentData($filter)
	{
		$index = $filter ? $filter['pageIndex'] : 0 ;

		$payment = Payment::select(['id' , 'user_id', 'payment_method_id' , 'order_id'])
		->with(['paymentMethod' => function($query){
			$query->addSelect('id','name');
		}]);

		if (!empty($filter['id'])){
			$payment->where('id' ,'=' , $filter['id']);
		}

		if (!empty($filter['payment_method']['name'])){
			$paymentMethod= $filter['payment_method']['name'];
			$payment->whereHas('paymentMethod' ,function($query) use ($paymentMethod){
				$query->where('name','like','%'.$paymentMethod.'%');
			});
		}

		if (!empty($filter['user_id'])){
			$payment->where('user_id' ,'=' , $filter['user_id'] );
		}

		if (!empty($filter['order_id'])){
			$payment->where('order_id' ,'=' , $filter['order_id'] );
		}

		$payment->orderBy('id','desc');
		$result['total'] = $payment->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$payment->take(10)->skip($skip)->get();

		foreach ($result['data'] as $value) {
			$temp = User::find($value->user_id);

			if(isset($temp))
				$value->user_id = $temp->email;
			else
				$value->user_id = $value->user_id . "<small><i>(Deleted)</small></i>";
		}

		return $result;
	}

	public static function deletePayment($id)
	{
		return Payment::where('id','=',$id)->delete();
	}

	public static function createPayment($paymentMethodId,$cartId,$userId,$amount,$currency,$tax){
		$subAmount = $amount;
		$paymentFees = self::calcualtePaymentFees($amount,$paymentMethodId);
		return Payment::create(['payment_method_id'=>$paymentMethodId,'amount' => $amount,'currency' => $currency,
		'user_id' => $userId,'order_id' => $cartId,'request'=>'','response'=>'','coupon'=>'','sub_amount' => $subAmount,
		'payment_fees' => $paymentFees,'tax_fees' => $tax]);

		MailService::send('emails.payment' , ['cost'=>$amount, 'username' => Auth::user()->name ], 'Payment@dukkangi.com' , Auth::user()->email , 'payment successed' );
	}

	private static function calcualtePaymentFees($amount,$paymentMethodId){
		$paymentMethod = PaymentMethod::find($paymentMethodId);
		$result = 0;
		if($paymentMethod->percent_fees > 0){
			$result = $amount * $paymentMethod->percent_fees;
		}
		if($paymentMethod->fixed_fees > 0){
			$result += $paymentMethod->fixed_fees;
		}
		return $result;
	}

}
