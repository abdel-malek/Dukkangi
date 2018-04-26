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
        return MailService::send('emails.test',[], 'info@dukkangi.com', 'aimankabbani@gmail.com', 'payment successed');
    }
    public function test(){

        Order::where('created_at' , '<', Carbon::now()->subMinutes(30)->toDateTimeString())->where('status_id' , '<' , OrderStatus::INPROGRESS )->update(['status_id' => OrderStatus::DELETED]);
        OrderItem::where('created_at', '<', Carbon::now()->subMinutes(30)->toDateTimeString())->where('status_id' , '<' ,OrderStatus::INPROGRESS)->update(['status_id' => OrderStatus::DELETED]);
    
    }
    
}
