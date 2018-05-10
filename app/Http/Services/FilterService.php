<?php

namespace App\Http\Services;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Product;
use Session;
use App\Tags;
use App;

class FilterService {

    public static function loadProducts(Request $requset , $numOfLoads){
        $skip = $numOfLoads;


        $lang = session('lang');
        App::setLocale($lang);

        $products = Product::select(['id','image_id','english','arabic','german', 'kurdi', 'turky','price' ,'rate'])
        ->where('active','=',true);

        if (isset($request->name) ){
                $products->where(DB::raw("concat_ws('-',english,arabic,turky,kurdi,german)"),'like','%'.$request->name.'%');
        }
        if(isset($requset->categories) ){
        
            $Tags = [];
            $tags = Tags::select('product_id')->whereIn('category_id' , $requset->categories)->get()->toArray();
            foreach ($tags as $tag) {
                array_push($Tags , $tag);
            }

            $products->whereIn('id' ,$Tags);
        }
        if(isset($request->min) && !isset($request->max) ){
            $products->where('price' ,'>=', $request->min);
        }
        else if (isset($request->max) && !isset($request->min))
        {
            $products->where('price' ,'<=', $request->max);
        }
        else if (isset($request->max) && isset($request->min)){
            $products->whereBetween ('price', [$request->min , $request->max]);
        }

        $products =$products->take(12)->skip(($skip-1)*12)->get();


        if ($lang == "ar"){
            foreach ($products as $product){
                $product->english = $product->arabic;
            }
        }
        if ($lang == "de"){
            foreach ($products as $product){
                $product->english = $product->german;
            }
        }
        if ($lang == "tr"){
            foreach ($products as $product){
                $product->english = $product->turky;
            }
        }
        if ($lang == "ku"){
            foreach ($products as $product){
                $product->english = $product->kurdi;
            }
        }
//        return view('client.pages.item_products')->withProducts($products);
        return $products;
    }

}
