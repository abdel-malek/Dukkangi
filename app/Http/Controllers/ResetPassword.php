<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class ResetPassword extends Controller
{
  public function makeReset(Request $request)
  {

      $email = $request->input('email');
      $password = $request->input('password');
      $token = $request->input('token');

      $user = User::where('email', $email)->get()->first();

      if ($user->count() > 0 && $token == $user->token) {

          User::where('email', $email)->update(['password' => bcrypt($password)]);

          $authDate = ['email' => $email, 'password' => $password];
          if (Auth::attempt($authDate)) {
              return redirect(route('home'));
          }else{
              //return redirect()->intended(Lang::getLocale() . '/reset');
          }

      } else {
          return redirect(route('login'));
      }

  }
}
