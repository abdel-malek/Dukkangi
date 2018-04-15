<?php

namespace App\Http\Controllers;

use App\Http\Services\CartService;
use Illuminate\Http\Request;
use App\Http\Services\StripeService;
use App\PaymentMethod;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller
{
    public function stripePost(Request $request)
    {
        $token = $request->input('token');
        $email = $request->input('email');
        $products = $request->input('products');
        $cartId = session('cartId');
        $userId = Auth::id();

        $result=CartService::prepareCartAndReturnTotalAmount($products, $cartId, $userId);

        $charge= StripeService::chargeCard($result['amount'], 'EUR', $result['description'], $email, $token);
        dd($charge);
        if (!empty($charge))
        {
            CartService::checkout($cartId,$products,PaymentMethod::STRIPE,$userId);
        }
    }
}
