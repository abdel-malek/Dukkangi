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
    //Loads users to make coupons for.
    public function loadCoupons(Request $request)
    {
        $filter = $request->input('filter');
        return CouponService::loadCoupons($filter);
    }



    public function sendCoupon(Request $request){

        // $id = $request->input('user_id');
        $from = $request->input('from');
        $to = $request->input('to');

        $type = $request->input('type');
        $amount = $request->input('amount');
        
        CouponService::sendCoupon($from , $to, $type,$amount);
    	
        Session::flash('success', 'Coupon Created and Sent Successfully!');
     
        return redirect(route('makecoupon.index'));
    }
    public function sendSingleCoupon(Request $request){

        $id = $request->input('user_id');
        $type = $request->input('type');
        $amount = $request->input('fixedamount');
        
        CouponService::sendSingleCoupon($id, $amount, $type);
        
        Session::flash('success', 'Coupon Created and Sent Successfully!');
     
        return redirect(route('makecoupon.index'));
    }

    public function getGroupCouponPage(){
        return view('admin.makecoupons.new_coupon');
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
    public function deleteCoupon($couponId){
        return CouponService::deleteCoupon($couponId);
    }
    public function getCouponUsers($couponId){
        $users = CouponService::getCouponUsers($couponId);
        return ;
    }
    public function getUsersGrid($id){
        return view ('admin.coupons.users');
    }
    public function getUsersData($id){
        return CouponService::getCouponUsers($id);
    }
}