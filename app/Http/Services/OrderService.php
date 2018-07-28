<?php

namespace App\Http\Services;

use App\Order;
use App\User;
use App\Product;
use App\OrderItem;
use Session;
use App\OrderStatus;
use App\DHLStatus;

class OrderService {
	public static function loadOrderData($filter)
	{

		$index = $filter ? $filter['pageIndex'] : 0 ;
		// dd($filter);
		$order = Order::with(['payment' => function($query){
			$query->addSelect('id','sub_amount','amount');
		},'user'=> function($query){
			$query->addSelect('id','email');
		},'orderStatus' => function($query){
			$query->addSelect('id','name');
		}])->select(['id' , 'user_id', 'payment_id','status_id','packed','created_at']);

		if (!empty($filter['id']))
		{
			$order->where('id' ,'=' , $filter['id']);
		}

		if (!empty($filter['user_id']))
		{
			//Need a Change !
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
		if (!empty($filter['order_status']['name'])){
			// dd($filter['order_status.name']);
			if ( strtolower($filter['order_status']['name'])  == 'created'){
				$order->where('status_id' , '=' , OrderStatus::CREATED);
			}

			else if ( strtolower($filter['order_status']['name'])  == 'deleted'){
				$order->where('status_id' , '=' , OrderStatus::DELETED);
			}

			else if ( strtolower($filter['order_status']['name'])  == 'completed'){
				$order->where('status_id' , '=' , OrderStatus::COMPLETED);
			}
		}
		if (!empty($filter['packed'])){
			$order->where('packed', 'like', $filter['packed']);
		}
		$order->orderBy('id','desc');
		$result['total'] = $order->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$order->take(10)->skip($skip)->get();

		foreach ($result['data'] as $value) {
			$email = User::find($value->user_id);
			if (isset($email))
				$value->user_id = $email->email;
			else
				$value->user_id =$value->user_id . "<small><i>(Deleted)</small></i>";
		}
		foreach ($result['data'] as $value) {
				$name = Product::find($value->product_id);
				if (isset($name))
					$value->product_id = $name->english;
				else
					$value->product_id =$value->product_id . "<small><i>(Deleted)</small></i>";
			}

			return $result;
		}

	public static function deleteOrder($id)
	{
		return Order::where('id','=',$id)->delete();
	}

	public static function loadOrderItemData($filter,$id){
		$index = $filter ? $filter['pageIndex'] : 0 ;
		$orderItems = OrderItem::with(['product','orderStatus'])
		->where('order_id','=',$id);

		$result['total'] = $orderItems->count();
		$skip = ($index == 1) ? 0 : ($index-1)*10 ;

		$result['data']=$orderItems->take(10)->skip($skip)->get();
		return $result;
	}

	public static function  checkOrderBarcode($id,$barcode){
		$result =  OrderItem::select('qty','item_id','id')
		->where('order_id','=',$id)
		->with(['product' => function($query){
			$query->addSelect('id','barcode','arabic');
		}])->whereHas('product',function($query) use ($barcode){
			$query->where('barcode','=',$barcode);
		})->get();
		if(!empty($result) && count($result) > 0){
			self::changePacked($result[0]->id);
		}
		return $result;
	}

	private static function changePacked($id){
		$orderItem =  OrderItem::where('id','=',$id)->update(['packed' => true]);
		$order = OrderItem::select('order_id')->where('id','=',$id)->get()->first();
		$orderId = $order->order_id;
		$orderItems = OrderItem::select('id','packed')->where('order_id','=',$orderId)->get();
		$orderStatus =Order::PACKED;
		foreach ($orderItems as $orderItem) {
			if($orderItem->packed == false)
			{
				$orderStatus = Order::PART_PACKED;
				break;
			}
		}
		self::changeOrderPacked($orderId,$orderStatus);
		return $orderItem;
	}

	private static function changeOrderPacked($id,$status){
		return Order::where('id','=',$id)->update(['packed' => $status]);
	}

	public static function loadPackedOrders($filter){
		$index = $filter ? $filter['pageIndex'] : 0 ;

		$orderItems = Order::with(['orderStatus'])
		->where('packed', 'like', 'packed');

		$result['total'] = $orderItems->count();
		$skip = ($index == 1) ? 0 : ($index-1)*10 ;

		$result['data']=$orderItems->take(10)->skip($skip)->get();
		foreach ($result['data'] as $value) {
			$user = User::find($value->user_id);
			if(!isset($user)) continue;
			$value->user_id = $user->email;
			if ($value->dhl_status == 2 ){
				$value->dhl_status = "Not Delivered";
			}
			else {
				$value->dhl_status = "On Delivery";
			}
			$value->packed = 'Packed';
		}
		return $result;
	}
	public static function changeDHLState($orderId , $code){
		$order = Order::find($orderId);

		$order->dhl_status = DHLStatus::ONDELIVERY;
		$order->dhl_code = $code;
		$order->update();

		$user = User::find($order->user_id);
		return MailService::send('emails.dhl' , ['code'=> $code, 'username' => $user->name ] , 'Order@dukkangi.com' , $user->email, 'order complete');
	}

	public static function loadUserOrders($id,$filter){

		$index = $filter ? $filter['pageIndex'] : 0 ;

		$orders  = Order::where('user_id', '=', $id);
		if (!empty($filter['id']))
		{
			$orders->where('id' ,'=' , $filter['id']);
		}
		if (!empty($filter['product_id']))
		{
			$orders->where('product_id' ,'=' , $filter['product_id'] );
		}

		if (!empty($filter['payment_id']))
		{
			$orders->where('payment_id' ,'=' , $filter['payment_id'] );
		}
		$orders->orderBy('id','desc');
		$result['total'] = $orders->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$orders->take(10)->skip($skip)->get();
		foreach ($result['data'] as $value) {
			$email = User::find($value->user_id);
			if (isset($email))
				$value->user_id = $email->email;
			else
				$value->user_id =$value->user_id . "<small><i>(Deleted)</small></i>";

			if ($value->dhl_status == 2){
				$value->dhl_status = "Not Yet";
			}
			else {
				$value->dhl_status = "<i>Delevered or On the way</i>";
			}
		}
		foreach ($result['data'] as $value) {
				$name = Product::find($value->product_id);
				if (isset($name))
					$value->product_id = $name->english;
				else
					$value->product_id =$value->product_id . "<small><i>(Deleted)</small></i>";
			}

		return $result;
			
	}
}
