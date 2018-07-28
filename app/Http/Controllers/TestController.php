<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Http\Services\SessionService;
use App\Http\Services\MailService;
use App\User;
use App\Order;
use App\OrderItem;

use Illuminate\Support\Carbon;
use App\OrderStatus;
use Auth;
use Session;
class TestController extends Controller
{
    public function loadCart($id)
    {
        return CartService::loadCart($id);
    }
    public function mail()
    {
       return MailService::send('emails.complete_order',[], 'info@dukkangi.com', 'bee.order.nova.company@gmail.com', 'order completed');
        return view('emails.signup');
    }
    public function test(){

    return Session::get('order_item_count');
    }


}
