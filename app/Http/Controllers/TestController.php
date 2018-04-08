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

  	return Mail::send('emails.test',[],function($msg){
  		$msg->from('AimanKabbani@gmail.com')
  		->to('iteng.moustafa@gmail.com')
  		->subject('STH');
  	});
  	dd("Done");

  	// $user = Auth::user()->toArray();
  	// Mail::send('emails.test', $user, function($message) use ($user) {
   //      $message->to("iteng.moustafa@gmail.com");
 		
   //      $message->subject('Mailgun Testing');
   //  	echo "Working";
   //  });
   //  dd('Mail Send Successfully');
  }
}
