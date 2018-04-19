<?php 

namespace App\Http\Services; 

use App\User;
use Session;
use App\Coupon;
use Illuminate\Support\Facades\DB;
use App\Http\Services\MailService;
use App\OrderItem;
use App\OrderStatus; 
use Carbon\Carbon;

class CouponService {

	public static function loadCoupons($filter){
		$index = $filter ? $filter['pageIndex'] : 0 ;

		//$coupon = User::select( [ 'id','email'  ]);

		$points = OrderItem::select(DB::raw('sum(gain_point) as points'),'user_id')
		->with(['user' => function($query){
			$query->addSelect('id','email');
			$query->with(['coupon'=>function($query){
				$query->addSelect('id','code','user_id')->orderBy('created_at')->first();
			}]); 
		}])
		->where('status_id','=',OrderStatus::COMPLETED)
		->whereIn('user_id' , User::select('id')->get());

		if (!empty($filter['id']))
		{
			$points->where('id' ,'=' , $filter['id']);
		}	
		if (!empty($filter['email']))
		{
			$points->where('email' ,'=' , $filter['email'] );
		}

		$points->OrderBy('id','desc');
		$result['total'] = $points->groupBy('user_id')->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$points->groupBy('user_id')->take(10)->skip($skip)->get();

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
		$coupon->amount= $amount;
		$coupon->user_id = $userId;
		$coupon->user_email= $email;
		$coupon->start_date = Carbon::now();
		$coupon->end_date =Carbon::now()->addDays(90);

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


}
