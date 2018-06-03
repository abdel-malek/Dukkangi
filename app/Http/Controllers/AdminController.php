<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        if(Auth::user() == null || Auth::user()->user_category_id != 1){
          return view('admin.login');
        }
        if(Auth::user() != null && Auth::user()->user_category_id == 1){
          return view('admin.master');
        }
    }

    public function adminLogin(Request $request){

      $email = $request->input('email');
      $password = $request->input('password');

      $authDate = ['email' => $email, 'password' => $password];

      if(Auth::attempt($authDate)){
        return redirect('admin');
      }else{
        return back();
      }
    }
}
