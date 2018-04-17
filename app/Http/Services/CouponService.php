<?php 

namespace App\Http\Services; 

use App\User;
use Session;
use App\Coupon;
use Illuminate\Support\Facades\DB;
use App\Http\Services\MailService; 
class CouponService {

	public static function loadCoupons($filter){
		$index = $filter ? $filter['pageIndex'] : 0 ;

		$coupon = User::select( [ 'id','email' , 'points']);

		if (!empty($filter['id']))
		{
			$coupon->where('id' ,'=' , $filter['id']);
		}


		if (!empty($filter['points']))
		{
			$coupon->where('points' ,'=' , $filter['points'] );
		}

		if (!empty($filter['email']))
		{
			$coupon->where('email' ,'=' , $filter['email'] );
		}

		$coupon->OrderBy('id','desc');
		$result['total'] = $coupon->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$coupon->take(10)->skip($skip)->get();
	
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

	public static function sendCoupon($userId){
		$user = User::find($userId);
		// /dd($user->points);
		$amount = $user->points;
		$user->points = 0;
		$startDate = 0 ;
		$endDate = 0;
		$code = self::couponCodeGenerator(12);
		
		dd($code);
		MailService::send('view.emails.coupon', [$user,$amount,$code,$startDate,$endDate],'coupons@dukkangi.com',$user->email , "Coupon" );

	}


}
