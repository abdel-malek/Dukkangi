<?php 

namespace App\Http\Services; 

use App\User;
use Session;
use App\Coupon;
use Illuminate\Support\Facades\DB;

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


}
