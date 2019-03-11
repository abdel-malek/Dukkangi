<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CartService;
use App\Http\Services\MailService;
use App\Http\Services\CouponService;
use Auth;
use App;
use App\Product;
use App\ProductQty;

use App\Subcategory;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        if (Auth::id() <= 0) {
            return redirect('login');
        }
        $productId = $request->input('productId');
        $qty = $request->qty;
        // dd($qty);
        $userId = Auth::id();
        $cartId = session('cartId');
        $is_pay = $request->is_pay;
//        dd($is_pay);
        return CartService::addToCart($productId, $qty, $cartId, $userId, $is_pay);
    }


    public function getViewMyCartPage() {
        $lang = session('lang');
        App::setLocale($lang);

        $cartId = session('cartId');
        $userId = Auth::id();
        $cart = CartService::loadCart($cartId);

        $orders = $cart['orderItems'];
        $gainPoints = $cart['gainPoints'];
        $amount = $cart['amount'];
        //	$taxes = $cart['taxes'];
        $itemNumber = $cartId . ',' . $userId;
        $productsName = '';
            foreach ($orders as $orderItem) {
                $productsName = $productsName . $orderItem->product->english . "\n";
            }
//        if ($lang == "ar") {
//            foreach ($orders as $orderItem) {
//                $productsName = $productsName . $orderItem->product->arabic . "\n";
//            }
//        }
//        if ($lang == "de") {
//            foreach ($orders as $orderItem) {
//                $productsName = $productsName . $orderItem->product->german . "\n";
//            }
//        }
//        if ($lang == "tr") {
//            foreach ($orders as $orderItem) {
//                $productsName = $productsName . $orderItem->product->turky . "\n";
//            }
//        }
//        if ($lang == "ku") {
//            foreach ($orders as $orderItem) {
//                $productsName = $productsName . $orderItem->product->kurdi . "\n";
//            }
//        }
        return view('client.pages.view_my_cart')->withOrders($orders)->withGainPoints($gainPoints)->withAmount($amount)
                                                ->withItemNumber($itemNumber)->withProductsName($productsName);
    }

    public function getAmount(){
//        $productQty = ProductQty::all();
//        $update_productQty = ProductQty::find($request->product_id);
//        $qty_arr = $request['qty'];
//        for($i = 0;$i < count($qty_arr);$i++ ){
//            foreach($productQty as $get_productQty){
//                if($qty_arr[i].product_id == $get_productQty->product_id){
//                        $update_productQty = ProductQty::find($qty_arr[i]['product_id']);
//                        $update_productQty->qty -= $qty_arr[i]['qty'];
//                        $update_productQty->save();
//                
//                }
//            }
//        }
        
        $cart = CartService::getAmount(session('cartId'));
        $amount = $cart['amount'];
        return $amount;
    }
    
//    public function minQty(Request $request){
//        
//    }

    public function checkout(Request $request)
    {
        if (Auth::id() <= 0) {
            return redirect('login');

        }
        $cartId = session('cartId');
        $products = $request->input('products');
        $userId = Auth::id();
        $status = CartService::checkout($cartId, $products, 1, $userId);

        $data = CartService::loadCart($cartId);
        $TotalPrice = CartService::getTotalPrice($cartId);
        return redirect('home');
    }

    public function getBuyItemPage($id)
    {

        $lang = session('lang');
        App::setLocale($lang);
        if (Auth::id() <= 0) {
            return redirect('login');
        }
        $userId = Auth::id();
        CartService::BuyThisItem($id, 1, $userId);
        $product = Product::find($id);
        $subcategory = Subcategory::find($product->subcategory_id);

        $product->tax = sprintf('%0.2f', $product->price * 0.19);
        $product->gain_points = ceil($product->price / 5);
        $product->abstract_price = $product->price - $product->tax;
        if (isset($product->discount_price)) {
            $product->discount = sprintf('%0.0f', 100 - (($product->discount_price * 100) / $product->price));
            $product->tax = sprintf('%0.2f', $product->discount_price * 0.19);
            $product->gain_points = ceil($product->discount_price / 5);
            $product->abstract_price = $product->discount_price - $product->tax;
        }


        return view('client.pages.buy_item')->withProduct($product)->withSubcategory($subcategory);
    }

    public function checkCoupon(Request $request){
        $code = $request->code;
        return CouponService::checkCoupon($code);
    }

    public function deleteCart(Request $request){
      return CartService::deleteCart();
    }
    public function changeQty(Request $request ){
        // dd("I'm Here");
        $qty = $request->input('qty');
        $productId = $request->input('id');

      return  CartService::changeQty($qty , $productId);
    }

}
