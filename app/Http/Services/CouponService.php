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
use App\CouponUser;
use App\Order;
class CouponService {
					//MAKE COUPONS
	public static function loadCoupons($filter){
		$index = $filter ? $filter['pageIndex'] : 0 ;

		$points = User::select('id','email')
		->with(['orderItem' => function($query){
			$query->addSelect(DB::raw('sum(gain_point) as points'),'user_id')
			->where('status_id','=',OrderStatus::COMPLETED)
			->groupBy('user_id');
		}]);

		if (!empty($filter['id']))
		{
			$points->where('id' ,'=' , $filter['id']);
		}
		if (!empty($filter['email']))
		{
			$points->where('email','like', '%'.$filter['email'].'%');
		}
		$points->OrderBy('id','desc');
		$result['total'] = $points->groupBy('id','email')->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$points->groupBy('id','email')->take(1000)->skip($skip)->get();
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
	private static function makeCoupon($userIds , $type, $amount, $code){
		$coupon = new Coupon();

		$coupon->code = $code;
		$coupon->coupon_type = $type;
		if ($type == 'fixed')
			$coupon->amount= $amount;
		else
			$coupon->amount = $amount /100;
		$coupon->start_date = Carbon::now();
		$coupon->end_date =Carbon::now()->addDays(90);
		
		$coupon->save();

		
		foreach ($userIds as $user) {
			
			$couponUser = new CouponUser();
			$couponUser->user_id = $user;
			$couponUser->coupon_id = $coupon->id;
			$couponUser->coupon_status = CouponStatus::ACTIVE;

			$couponUser->save();
			// Clear gain Points
			$userEmail = User::find($user);
			$user = $userEmail->name;
			$userEmail = $userEmail->email;
			$value = $coupon->amount;
			$endDate = $coupon->end_date;

			MailService::send('emails.coupon', ['user'=> $user, 'value' =>$value,'type'=> $type, 'code' => $code, 'endDate'=>$endDate],'coupons@dukkangi.com',$userEmail , "Coupon" );

			DB::table('order_item')->where('user_id' , '=' , $user)->update(['gain_point' => '0']);
		}
		return ;
	}
	public static function sendSingleCoupon($id, $amount, $type){
		
		$code = self::couponCodeGenerator(12);

		$users = [];
		array_push($users, $id);
		self::makeCoupon($users ,$type, $amount , $code);

	}

	public static function sendCoupon($from,$to,$type,$amount){
		
		$userIds = User::select('id' , 'email')
		->with(['orderItem' => function($query){
			$query->addSelect(DB::raw('sum(gain_point) as points'),'user_id')
			->where('status_id','=',OrderStatus::COMPLETED)
			->groupBy('user_id');
		}])	
		->get();
		$users  = [];
	
		foreach ($userIds as $user) {
			if (isset($user->orderItem[0]))
				if ($user->orderItem[0]->points  >= $from && $user->orderItem[0]->points <= $to)
					array_push($users, $user->id);
		}
		$code = self::couponCodeGenerator(12);

		self::makeCoupon($users,$type,$amount,$code);


	}

	public static function checkCoupon($code){
		$coupon = Coupon::where('code' , '=', $code )->get()->first();
		if (!isset($coupon)) return 0;
		$couponUser = CouponUser::where('coupon_id' , '=' , $coupon->id)->where('coupon_status','=',CouponStatus::ACTIVE)->where('user_id','=',Auth::id())->get()->first();
		if(!isset($couponUser)) return 0;
		

		$timeflag= 0;
		if (isset($coupon->end_date)){
			$time = Carbon::now();
			if ($time->lt($coupon->end_date)){
				$timeflag =1;
			}
		}

		if ($timeflag == 1 ) {
			$array[]= 0;
 			array_push($array , 	 '1');
			array_push($array ,  $coupon->amount);
			array_push($array ,  $coupon->coupon_type);
			
			$cartId = session('cartId');
			$cart = Order::find($cartId);
			$cart->coupon_id = $coupon->id;
			$cart->update();

			return $array;
		}
		else return 0;
	}

	public static function couponUsed($couponId){
		$couponUser = CouponUser::where('coupon_id' , '=', $couponId)->where('user_id' , '=' , Auth::id())->get()->first();
		$couponUser->coupon_status = CouponStatus::CONSUMED ; 
		$coupon->update();
	}
				//Manage Coupons
	public static function loadAllCoupons($filter){
		$index = $filter ? $filter['pageIndex'] : 0 ;

		$coupon = Coupon::select('id','coupon_type','amount','code');
		if (!empty($filter['id']))
		{
			$coupon->where('id' ,'=' , $filter['id']);
		}

		if (!empty($filter['user_email']))
		{
			//Need a Change !
			//$coupon->where('user_email' ,'=' , $filter['user_email'] );
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
			$coupon->where('code' ,'like' , $filter['code'] );
		}

		$coupon->orderBy('id','desc');
		$result['total'] = $coupon->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$coupon->take(10)->skip($skip)->get();

		return $result;
	}

	public static function deleteCoupon($id){
		return Coupon::where('id', '=', $id)->delete();
	}
	public static function getCouponUsers($couponId){
		$users = [];
		$couponUsers = CouponUser::where('coupon_id' , '=' , $couponId)->get();
		foreach ($couponUsers as $user) {
			if($user->coupon_status == 1){$user->user->status  = 'Active';}
			else if ($user->coupon_status == 2) {$user->user->status = 'Expired'; }
			else {
				$user->user->status = 'Consumed';
			}
			array_push($users, $user->user);
		}
		$result['data'] = $users;
		$result['total'] = sizeof($users);
		return $result;
	}
}
