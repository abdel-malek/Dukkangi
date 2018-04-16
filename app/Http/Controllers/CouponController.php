<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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



    public function sendCoupon(Request $requset){

    }
}