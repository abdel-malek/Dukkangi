<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use Auth;
use App;
use App\Product;
//use Mailgun\Mailgun;
//use vendor\autoload;
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
    //dd($request->qty);

    $mgClient = new Mailgun('key-0666bf6c9c55fe8ec56d33c6ce0c0a25');
    $domain = "sandbox6defec9ccf1347779da51aa449edd49e.mailgun.org";

    # Make the call to the client.
    $result = $mgClient->sendMessage("$domain",
          array('from'    => 'Mailgun Sandbox <postmaster@sandbox6defec9ccf1347779da51aa449edd49e.mailgun.org>',
                'to'      => 'Moustafa Unknown <iteng.moustafa@gmail.com>',
                'subject' => 'Hello Moustafa Unknown',
                'text'    => 'Congratulations Moustafa Unknown, you just sent an email with Mailgun!  You are truly awesome! '));


//    $status = CartService::buyItemCheckout($cartId,$product,1,$userId);
  //    Mail::raw('Sending emails with Mailgun and Laravel is easy!', function($message)
    //  {
      //  $message->subject('Testing ');
        //$message->from('Larvel Testing');
//        $message->to('iteng.moustafa@gmail.com');
  //    });
    if ($status){
      return redirect('home');
    }    
  }




}
