<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\StripeService;
use App\PaymentMethod;
class StripeController extends Controller
{
    public function stripePost(Request $request)
    {
      $token = $request->input('token');
      $email = $request->input('email');
      //PaymentMethod::STRIPE;
      return StripeService::chargeCard('100', 'EUR', '', $email,$token);
    }
}
