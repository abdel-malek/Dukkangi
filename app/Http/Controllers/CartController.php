<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Http\Services\MailService;
use Auth;
use App;
use App\Product;
use Mail;
use App\Subcategory;
class CartController extends Controller
{
    public function addToCart(Request $request){
     if(Auth::id()<= 0){
      return redirect('login');
    }
      $productId = $request->input('productId');
      $qty = $request->input('qty');
      $userId = Auth::id();
      $cartId = session('cartId');
      return CartService::addToCart($productId,$qty,$cartId,$userId);
    }


    public function getViewMyCartPage(){

    $lang = session('lang');
    App::setLocale($lang);

		$cartId = session('cartId');

		$cart = CartService::loadCart($cartId);

		$orders= $cart['orderItems'];
		$gainPoints = $cart['gainPoints'];
	//	$taxes = $cart['taxes'];

		return view('client.pages.view_my_cart')->withOrders($orders)->withGainPoints($gainPoints);
	}

  public function checkout(Request $request){
    if(Auth::id()<= 0){
      return redirect('login');
    }
    $cartId = session('cartId');
    $products = $request->input('products');
    $userId = Auth::id();
    $status = CartService::checkout($cartId,$products,1,$userId);
    //dd("hey");
    if($status){
        MailService::send('emails.payment',[] , 'payment@dukkangi.com',Auth::user()->email , 'payment successed');
        MailService::send('emails.complete_order',[], 'info@dukkangi.com', Auth::user()->email, 'order successed');
      return redirect('home');
    }
  }

  public function getBuyItemPage($id){
    
    $lang = session('lang');
    App::setLocale($lang);
    if(Auth::id() <= 0){
      return redirect('login');
    }
    $userId = Auth::id() ;
    CartService::BuyThisItem($id,1, $userId);
    $product = Product::find($id);
    $subcategory = Subcategory::find($product->subcategory_id);

    $product->tax = sprintf('%0.2f',$product->price *0.19);
    $product->gain_points= ceil($product->price / 5);
    $product->abstract_price = $product->price - $product->tax;
    if (isset($product->discount_price)){
      $product->discount =  sprintf('%0.0f',100 - (($product->discount_price * 100) / $product->price));
      $product->tax = sprintf('%0.2f',$product->discount_price *0.19);
      $product->gain_points= ceil($product->discount_price / 5);
      $product->abstract_price = $product->discount_price - $product->tax;
    }


    return view('client.pages.buy_item')->withProduct($product)->withSubcategory($subcategory);
  }

  public function buyItemComplete(Request $request){
    if(Auth::id()<= 0){
      return redirect('login');
    }
    $product = Product::find($request->id);
    $userId = Auth::id();
    $cartId = session('cartIdBuyItem');

    MailService::send('emails.payment',[] , 'payment@dukkangi.com', Auth::user()->email , 'payment successed');
    MailService::send('emails.complete_order',[], 'info@dukkangi.com', Auth::user()->email , 'order successed');
    
    return redirect('home');
        
  }




}
