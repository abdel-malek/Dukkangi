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

use Illuminate\Console\Scheduling\Schedule;
class SessionService {

	public function clearCartFromSession(){
    	session()->forget('cartId');
	}

}
