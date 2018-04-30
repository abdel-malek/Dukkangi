<?php

namespace App\Http\Services;

use App\User;
use Session;
use App\Coupon;
use Illuminate\Support\Facades\DB;
use App\Http\Services\MailService;
use App\OrderItem;
use App\OrderStatus;
use App\CouponStatus;
use Carbon\Carbon;
use Auth;
use App\Order;
class CouponService {

	public static function loadCoupons($filter){
		$index = $filter ? $filter['pageIndex'] : 0 ;

		$points = User::select('id','email')
		->with(['orderItem' => function($query){
			$query->addSelect(DB::raw('sum(gain_point) as points'),'user_id')
			->where('status_id','=',OrderStatus::COMPLETED)
			->groupBy('user_id');
		},'coupon' => function($query){
			$query->addSelect('id','code','user_id')->orderBy('created_at')->first();
		}]);

		if (!empty($filter['id']))
		{
			$points->where('id' ,'=' , $filter['id']);
		}
		if (!empty($filter['email']))
		{
			$points->where('email' ,'=' , $filter['email'] );
		}

		$points->OrderBy('id','desc');
		$result['total'] = $points->groupBy('id','email')->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$points->groupBy('id','email')->take(10)->skip($skip)->get();

		return $result;
	}

	private static function couponCodeGenerator($length){
		$key = '';
	    $keys = array_merge(range(0, 9), range('A', 'Z'));

	    for ($i = 0; $i < $length; $i++) {
	        $key .= $keys[array_rand($keys)];
	    }

	    return $key;
	}
	private static function makeCoupon($userId , $type, $amount, $code, $email){
		$coupon = new Coupon();

		$coupon->code = $code;
		$coupon->coupon_type = $type;
		if ($type == 'fixed')
			$coupon->amount= $amount;
		else
			$coupon->amount = $amount /100;
		$coupon->user_id = $userId;
		$coupon->user_email= $email;
		$coupon->start_date = Carbon::now();
		$coupon->end_date =Carbon::now()->addDays(90);
		$coupon->coupon_status = CouponStatus::ACTIVE ;

		$coupon->save();
		DB::table('order_item')->where('user_id' , '=' , $userId)->update(['gain_point' => '0']);
	}

	public static function sendCoupon($userId,$type,$amount){
		//$startDate = Carbon::now();

		// $endDate = Carbon::now();
		$user = User::find($userId);
		$code = self::couponCodeGenerator(12);

		self::makeCoupon($userId,$type,$amount,$code,$user->email);

		// return MailService::send('view.emails.coupon', [$user,$amount,$type,$code,$startDate,$endDate],'coupons@dukkangi.com','' , "Coupon" );

	}

	public static function checkCoupon($code){
		$coupon = Coupon::where('code' , '=', $code )->get()->first();
		if (!isset($coupon)) return 0;
		//dd($coupon);
		$timeflag =0;
		$activefalg = 0;
		$userflag = 0;
		if (isset($coupon->end_date)){
			$time = Carbon::now();
			if ($time->lt($coupon->end_date)){
				$timeflag =1;
			}
		}
		if ($coupon->coupon_status == CouponStatus::ACTIVE){
			$activefalg = 1;
		}
		if ($coupon->user_id != Auth::id())
			return 0;


		if ($timeflag == 1 && $activefalg == 1 ) {
			$array[]= 0;
 			array_push($array , 	 '1');
			array_push($array ,  $coupon->amount);
			array_push($array ,  $coupon->coupon_type);
			
			$cartId = session('cartId');
			$cart = Order::find($cartId);
			$cart->coupon_id = $cartId;
			$cart->update();

			return $array;

		}
		else return 0;
	}

	public static function couponUsed($couponId){
		$coupon = Coupon::find($couponId);
		$coupon_status = CouponStatus::CONSUMED ; 
		$coupon->update();
	}







				//Manage Coupons
	public static function loadAllCoupons($filter){
		$index = $filter ? $filter['pageIndex'] : 0 ;

		$coupon = Coupon::select('id','user_email','coupon_status','coupon_type','amount','code');
		if (!empty($filter['id']))
		{
			$coupon->where('id' ,'=' , $filter['id']);
		}

		if (!empty($filter['user_email']))
		{
			//Need a Change !
			$coupon->where('user_email' ,'=' , $filter['user_email'] );
		}

		if (!empty($filter['coupon_status']))
		{
			$statusFilter= $filter['coupon_status'];
			$statusFilter = strtolower($statusFilter);
			if ($statusFilter == 'active'){
				$coupon->where('coupon_status' ,'=' , 1 );
			}
			else if ($statusFilter == 'expired'){
				$coupon->where('coupon_status' ,'=' , 2 );
			}
			else if ($statusFilter == 'consumed'){
				$coupon->where('coupon_status' ,'=' , 3 );		
			}
			
		}

		if (!empty($filter['coupon_type']))
		{	
			$coupon->where('coupon_type' ,'=' , $filter['coupon_type'] );
		}

		if (!empty($filter['amount']))
		{	
			$coupon->where('amount' ,'=' , $filter['amount'] );
		}
		if (!empty($filter['code']))
		{	
			$coupon->where('code' ,'=' , $filter['code'] );
		}

		$coupon->orderBy('id','desc');
		$result['total'] = $coupon->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$coupon->take(10)->skip($skip)->get();
		foreach ($result['data'] as $row) {
			if  (!isset($row)) continue;
			if ($row->coupon_status == '1')
				$row->coupon_status = "Active";
			
			if ($row->coupon_status == '2'){
				$row->coupon_status = "Expired";
			}
			if ($row->coupon_status == '3'){
				$row->coupon_status = "Consumed";
			}
		}
			return $result;
	}
	public static function deleteCoupon($id){
		    return Coupon::where('id', '=', $id)->delete();
	}
}
