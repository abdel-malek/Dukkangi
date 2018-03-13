<?php 

namespace App\Http\Services; 

use App\Order;
use Session;

class OrderService {
	public static function loadOrderData($filter)
	{	
		$index = $filter ? $filter['pageIndex'] : 0 ; 

		$order = Order::select(['id' , 'user_id', 'product_id', 'payment_id']);

		if (!empty($filter['id']))
		{
			$order->where('id' ,'=' , $filter['id']);
		} 

		if (!empty($filter['user_id']))
		{
			$order->where('user_id' ,'=' , $filter['user_id'] );
		} 
		
		if (!empty($filter['product_id']))
		{
			$order->where('product_id' ,'=' , $filter['product_id'] );
		} 

		if (!empty($filter['payment_id']))
		{
			$order->where('payment_id' ,'=' , $filter['payment_id'] );
		} 

		$order->orderBy('id','desc');
		$result['total'] = $order->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$order->take(10)->skip($skip)->get();

		return $result;
	}

	public static function deleteOrder($id)
	{
		return Order::where('id','=',$id)->delete();
	}
	


}
