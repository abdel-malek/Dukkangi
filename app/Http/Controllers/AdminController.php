<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use App\Payment;
use Carbon\Carbon;

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

    public function getIndex(){
      $arr = [];
      $now = Carbon::now();
      for ($i=0; $i < 12 ; $i ++){   
        $val = Payment::select(DB::raw('SUM(amount) as total'))->whereYear('created_at', $now->year)->whereMonth('created_at',$i)->get();
        if (isset($val[0]->total))
          $arr[$i] = $val[0]->total;
        else 
          $arr[$i] = 0;
      }
      $thisMonth = $arr[$now->month];
      $thisYear = Payment::select(DB::raw('SUM(amount) as total'))->whereYear('created_at', $now->year)->get()[0]->total;
      $overall = Payment::select(DB::raw('SUM(amount) as total'))->get()[0]->total;
      return view('admin.index.index')->withArr($arr)->withThisMonth($thisMonth)->withThisYear($thisYear)->withOverall($overall);
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
