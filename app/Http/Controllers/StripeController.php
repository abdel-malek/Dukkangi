<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\StripeService;

class StripeController extends Controller
{
    public function stripePost(Request $request)
    {
      $token = $request->input('token');
      $email = $request->input('email');

      return StripeService::chargeCard('100', 'EUR', '', $email,$token);
    }
}
