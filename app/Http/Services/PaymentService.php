<?php 

namespace App\Http\Services; 

use App\Payment;
use App\User;
use Session;

class PaymentService {
	public static function loadPaymentData($filter)
	{	
		$index = $filter ? $filter['pageIndex'] : 0 ; 

		$payment = Payment::select(['id' , 'user_id', 'payment_method_id' , 'order_id']);

		if (!empty($filter['id']))
		{
			$payment->where('id' ,'=' , $filter['id']);
		} 
		if (!empty($filter['payment_method_id']))
		{
			$payment->where('payment_method_id' ,'=' , $filter['payment_method_id']);
		} 
		if (!empty($filter['user_id']))
		{
			
			//Need a Change !
			$payment->where('user_id' ,'=' , $filter['user_id'] );
		} 
		
		if (!empty($filter['order_id']))
		{
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
	


}