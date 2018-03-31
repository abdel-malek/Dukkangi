<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Services\CartService;
class CartController extends Controller
{
    public function addToCart(Request $request){
      $productId = $request->input('productId');
      $qty = $request->input('qty');
      $userId = Auth::id();
      $cartId = session('cartId');
      return CartService::addToCart($productId,$qty,$cartId,$userId);
    }


    public function getViewMyCartPage(){
		$cartId = session('cartId');
		
		$cart = CartService::loadCart($cartId);
		
		$orders= $cart['orderItems']; 
		$gainPoints = $cart['gainPoints'];
		$taxes = $cart['taxes'];
		
		return view('client.pages.view_my_cart')->withOrders($orders)->withGainPoints($gainPoints)->withTaxes($taxes);
	}

}
