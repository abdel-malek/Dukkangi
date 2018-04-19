<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Services\CouponService;
class CouponController extends Controller
{


	public function __construct()
	{
		$this->middleware('isadmin');
	}

    public function index(){
    	return view('admin.coupons.index');
    }

    public function loadCoupons(Request $request)
    {
        $filter = $request->input('filter');
        return CouponService::loadCoupons($filter);
    }



    public function sendCoupon(Request $request){
    	
        $id = $request->input('user_id');
        $type = $request->input('type');
        $amount = $request->input('fixedamount');
        
        CouponService::sendCoupon($id, $type,$amount);
    	

        Session::flash('success', 'Coupon Created and Sent Successfully!');
        return redirect(route('coupon.index'));
    }
}