<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Mail;
use App\User;
use Auth; 

class TestController extends Controller
{
  	public function loadCart($id)
  	{
		return CartService::loadCart($id);
  	}
  	public function mail(){

 	 	Mail::send('emails.test',[],function($msg){
  			$msg->from('iteng.moustafa@gmail.com')
  			->to('moustafal2011@hotmail.com')
  			->subject('Subject');
  		});
  //	 	dd(env('MAILGUN_DOMAIN'));
  //		dd(env('MAILGUN_SECRET'));
  //		$user = Auth::user()->toArray();
  // 	 	Mail::send('emails.test', $user, function($message) use ($user) {
  //       	$message->from('noreply@gmail.com');
  //       	$message->to('iteng.moustafa@gmail.com');
  //       	$message->subject('Mailgun Testing');
  //   	});

  // 	 	dd(env('MAIL_ENCRYPTION'));
    	dd('Mail Send Successfully');
  }
}
