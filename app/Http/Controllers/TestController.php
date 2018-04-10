<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Http\Services\MailService;
use App\User;
use Auth;

class TestController extends Controller
{
  	public function loadCart($id)
  	{
		return CartService::loadCart($id);
  	}
  	public function mail(){
      return MailService::send('emails.test','info@dukkangi.com','aimankabbani@gmail.com','payment successed');
  }
}
