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


                //Make Coupon
    public function makeCouponIndex(){
    	return view('admin.makecoupons.index');
    }
    //Loads users to make a coupons for.
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
        return redirect(route('makecoupon.index'));
    }

                    //Manage Coupons
    public function manageIndex(){
        return view('admin.coupons.index');
    }
    //Loads all coupons
    public function loadAllCoupons(Request $request)
    {
        $filter = $request->input('filter');
        return CouponService::loadAllCoupons($filter);
    }
    public function deleteCoupon($CouponId){
        return CouponService::deleteCoupon($CouponId);
    }
}