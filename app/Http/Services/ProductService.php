<?php

namespace App\Http\Services;

use App\Product;
use App\Category;
use App\Subcategory;
use App\ProductQty;
use App\OrderItem;
use App\Comment;
use App\Rate;
use Illuminate\Support\Facades\DB;
use Session;
use App\Tags;
use App\Brand;

class ProductService
{
    public static function loadProduct($filter)
    {
        $index = $filter ? $filter['pageIndex'] : 0 ;
        $product = Product::select(['id','arabic','english','qty','category_id','subcategory_id','price','point','top']);

        if (!empty($filter['id'])) {
            $product->where('id', '=', $filter['id']);
        }
        if (!empty($filter['arabic'])) {
            $product->where('arabic', 'like', '%'.$filter['arabic']. '%');
        }
        if (!empty($filter['english'])) {
            $product->where('english', 'like', '%'.$filter['english'].'%');
        }
        if (!empty($filter['qty'])) {
            $product->where('qty', '=', $filter['qty']);
        }

        $product->orderBy('id', 'desc');
        $result['total'] = $product->count();

        $skip = ($index == 1) ? 0 : ($index-1)*10 ;
        $result['data']=$product->take(10)->skip($skip)->get();


        foreach ($result['data'] as $p) {
            $categories = Tags::where('product_id' ,'=',$p->id)->get()->toArray();
            // $catarray = [];
            // $subcatarrray = [];
            $p->subcategory_id = '';
            $p->category_id = '';

            foreach ($categories as $category) {
                $category['category_id'] = Category::find($category['category_id'])->english;
                // array_push($catarray, $category['category_id']);
                $p->category_id .=  $category['category_id']. '<br>';
                $category['subcategory_id'] = Subcategory::find($category['subcategory_id'])->english;
                // array_push($subcatarrray, $category['subcategory_id'])
                $p->subcategory_id .= $category['subcategory_id'] .'<br>'; 
            }

            $p->price = $p->price . " €";
        }

        return $result;
    }
    // Load From Category
    public static function productDataByCategory($filter, $id)
    {
        $index = $filter ? $filter['pageIndex'] : 0 ;
        $dd =Tags::select('product_id')->where('category_id', '=' ,$id)->get()->toArray();
        $array=[];

        foreach ($dd as $d) {
             array_push($array, $d['product_id']) ;
        }
        $product = Product::select(['id','arabic','english','qty','category_id','subcategory_id','price','point','top'])
        ->whereIn('id', $array );

        if (!empty($filter['id'])) {
            $product->where('id', '=', $filter['id']);
        }
        if (!empty($filter['arabic'])) {
            $product->where('arabic', 'like', '%'.$filter['arabic']. '%');
        }
        if (!empty($filter['english'])) {
            $product->where('english', 'like', '%'.$filter['english'].'%');
        }
        if (!empty($filter['qty'])) {
            $product->where('qty', '=', $filter['qty']);
        }


        $product->orderBy('id', 'desc');
        $result['total'] = $product->count();

        $skip = ($index == 1) ? 0 : ($index-1)*10 ;
        $result['data']=$product->take(10)->skip($skip)->get();


        foreach ($result['data'] as $p) {
            $categories = Tags::where('product_id' ,'=',$p->id)->get()->toArray();
            // $catarray = [];
            // $subcatarrray = [];
            $p->subcategory_id = '';
            $p->category_id = '';

            foreach ($categories as $category) {
                $category['category_id'] = Category::find($category['category_id'])->english;
                // array_push($catarray, $category['category_id']);
                $p->category_id .=  $category['category_id']. '<br>';
                $category['subcategory_id'] = Subcategory::find($category['subcategory_id'])->english;
                // array_push($subcatarrray, $category['subcategory_id'])
                $p->subcategory_id .= $category['subcategory_id'] .'<br>'; 
            }

            $p->price = $p->price . " €";

        }
        return $result;
    }

    // Load By Subcategory
    public static function productDataBySubcategory($filter, $id)
    {
        $index = $filter ? $filter['pageIndex'] : 0 ;
        $dd =Tags::select('product_id')->where('subcategory_id', '=' ,$id)->get()->toArray();

        $array=[];
        foreach ($dd as $d) {
             array_push($array, $d['product_id']) ;
        }

        $product = Product::select(['id','arabic','english','qty','category_id','subcategory_id','price','point','top']);
        $product->whereIn('id',$array);

        if (!empty($filter['id'])) {
            $product->where('id', '=', $filter['id']);
        }
        if (!empty($filter['arabic'])) {
            $product->where('arabic', 'like', '%'.$filter['arabic']. '%');
        }
        if (!empty($filter['english'])) {
            $product->where('english', 'like', '%'.$filter['english'].'%');
        }
        if (!empty($filter['qty'])) {
            $product->where('qty', '=', $filter['qty']);
        }

        $product->orderBy('id', 'desc');
        $result['total'] = $product->count();

        $skip = ($index == 1) ? 0 : ($index-1)*10 ;
        $result['data']=$product->take(10)->skip($skip)->get();

        foreach ($result['data'] as $p) {
                  $categories = Tags::where('product_id' ,'=',$p->id)->get()->toArray();
            // $catarray = [];
            // $subcatarrray = [];
            $p->subcategory_id = '';
            $p->category_id = '';

            foreach ($categories as $category) {
                $category['category_id'] = Category::find($category['category_id'])->english;
                // array_push($catarray, $category['category_id']);
                $p->category_id .=  $category['category_id']. '<br>';
                $category['subcategory_id'] = Subcategory::find($category['subcategory_id'])->english;
                // array_push($subcatarrray, $category['subcategory_id'])
                $p->subcategory_id .= $category['subcategory_id'] .'<br>'; 
            }

            $p->price = $p->price . " €";
        }
        return $result;
    }

    public static function deleteProduct($id)
    {
        OrderItem::where('item_id' ,'=', $id)->delete();
        Rate::where('product_id' , '=', $id)->delete();
        Comment::where('product_id', '=', $id)->delete();
        ProductQty::where('product_id', '=', $id)->delete();
        Tags::where('product_id' ,'=', $id)->delete();
        return Product::where('id', '=', $id)->delete();
    }

    public static function updateProduct($request, $id, $redirect)
    {
        $product = Product::find($id);
        $product->arabic         = $request->arabic;
        $product->english         = $request->english;
        $product->german         = $request->german;
        $product->turky         = $request->turky;
        $product->kurdi         = $request->kurdi;

        $product->desc_arabic     = $request->desc_arabic;
        $product->desc_english     = $request->desc_english;
        $product->desc_german     = $request->desc_german;
        $product->desc_turky     = $request->desc_turky;
        $product->desc_kurdi     = $request->desc_kurdi;

        $product->qty             = $request->qty;
        $product->price         = $request->price;
        if (isset($request->discount_price))   
            $product->discount_price = $request->discount_price;
        //$product->category_id    = $request->category_id[0];
        //$product->subcategory_id = $request->subcategory_id[0];
        $product->brand_id = $request->brand_id;
        //
        // $product->option1 	     = isset($request->option1) ?$request->option1 : 0;
        // $product->option2		 = isset($request->option2) ?$request->option2 : 0;
        // $product->option3		 = isset($request->option3) ?$request->option3 : 0;
        // $product->option4		 = isset($request->option4) ?$request->option4 : 0;

        $product->active             = isset($request->active) ?$request->active : 0;

        $product->section1_english = $request->section1_english;
        $product->section1_german  = $request->section1_german;
        $product->section1_arabic  = $request->section1_arabic;
        $product->section1_kurdi   = $request->section1_kurdi;
        $product->section1_turky   = $request->section1_turky;

        // $product->section2_english = $request->section2_english;
        // $product->section2_german  = $request->section2_german;
        // $product->section2_arabic  = $request->section2_arabic;
        // $product->section2_kurdi   = $request->section2_kurdi;
        // $product->section2_turky   = $request->section2_turky;


        // $product->section3_english = $request->section3_english;
        // $product->section3_german  = $request->section3_german;
        // $product->section3_arabic  = $request->section3_arabic;
        // $product->section3_kurdi   = $request->section3_kurdi;

        // $product->section3_turky   = $request->section3_turky;


        $product->barcode   = $request->input('barcode');
        $product->custom_id   = $request->input('custom_id');
        $product->tax_fees   = $request->input('tax_fees');

        if ($request->hasFile('image')) {
            $product->image_id = ImageService::saveImage($request->file('image'));
        }

        if ($request->hasFile('image_path_2')) {
            $product->image_id2 = ImageService::saveImage($request->file('image_path_2'));
        }

        if ($request->hasFile('image_path_3')) {
            $product->image_id3 = ImageService::saveImage($request->file('image_path_3'));
        }

        if ($request->hasFile('image_path_4')) {
            $product->image_id4 = ImageService::saveImage($request->file('image_path_4'));
        }

                //Sub-Categories
          Tags::where('product_id' , '=', $id)->delete();
                
        foreach ($request->subcategory_id as $singleSubcategeory) {
          
          $tag = Tags::where('product_id' , '=' , $id)->where('subcategory_id' , $singleSubcategeory)->get()->first();
          if(!isset($tag)){
            $subcategory = Subcategory::find($singleSubcategeory);
            $tag = new Tags();
            $tag->product_id = $id;
            $tag->subcategory_id = $singleSubcategeory;
            $tag->category_id = $subcategory->category_id;
            $tag->save();
          }
        }
        //Categories
        if(!empty($singleCategeory)){
          foreach ($request->category_id as $singleCategeory) {
            $tag = Tags::where('product_id', '=' , $id)->where('category_id', '=' , $singleCategeory)->get()->first();
            if(!isset($tag)){
              $tag = new Tags();
              $tag->product_id = $id;
              $tag->category_id = $singleCategeory;
              $tag->save();
            }
          }
        }


        if (isset($request->point)) {
            $product->point     = $request->point;
        }
        else {
            $product->point     = '0';
        }
        $product->save();


        Session::flash('success', 'Updated Successfuly!');
        if ($redirect == 1) {
            return redirect(route('product.index'));
        }
        if ($redirect == 2) {
            return redirect(route('productbycategory.index', $product->category_id));
        }
        if ($redirect == 3) {
            return redirect(route('productbysubcategory.index', $product->subcategory_id));
        }
    }

    public static function loadById($id)
    {
        return Product::where('id', '=', $id)->get()->first();
    }

    public static function getProductTax($id)
    {
        $product = Product::select('tax_fees')->where('id', '=', $id)->get()->first();
        return $product->tax_fees;
    }

    // Product QTY
    public static function loadProductQty($filter)
    {
        $index = $filter ? $filter['pageIndex'] : 0 ;
        $product = ProductQty::select(['product_id',DB::raw('sum(product_qty.qty) as qty')])
    ->with('product');

        if (!empty($filter['product']['id'])) {
            $product->whereHas('product', function ($query) use ($filter) {
                $query->where('id', '=', $filter['product']['id']);
            });
        }

        if (!empty($filter['product']['arabic'])) {
            $product->whereHas('product', function ($query) use ($filter) {
                $query->where('arabic', 'like', '%'.$filter['product']['arabic'].'%');
            });
        }
//        if (!empty($filter['qty'])) {
//            $product->whereHas('product', function ($query) use ($filter) {
//                $query->where('arabic', 'like', '%'.$filter['product']['arabic'].'%');
//            });
//        }
        $product->groupBy('product_id')->orderBy('product_id', 'ASC');
        $result['total'] = $product->count();

        $skip = ($index == 1) ? 0 : ($index-1)*10 ;
        $result['data']=$product->groupBy('product_id')->take(1000)->skip($skip)->get();

        foreach ($result['data'] as $data) {
            $qty = OrderItem::select()
					        ->where('item_id', '=', $data->product_id)
					        ->groupBy('item_id')
					        ->sum('qty');
            $data->qty = $data->qty -$qty;
        }

        return $result;
    }

    public static function checkProductQty($productId , $qty)
    {
		$productQty = ProductQty::where('product_id','=',$productId)
		->groupBy('product_id')
		->sum('qty');
		$orderQty =  OrderItem::select()
					->where('item_id', '=', $productId)
					->groupBy('item_id')
					->sum('qty');
		return ($productQty - $orderQty) > $qty;
    }
    public static function getProductQty($productId){
        $productQty = ProductQty::where('product_id','=',$productId)
        ->groupBy('product_id')
        ->sum('qty');
        $orderQty =  OrderItem::select()
                    ->where('item_id', '=', $productId)
                    ->groupBy('item_id')
                    ->sum('qty');
        return $productQty - $orderQty;
    }

    public static function addProductQty($productId, $qty)
    {
        $productQty = new ProductQty();
        $productQty->product_id = $productId;
        $productQty->qty = $qty;
        return $productQty->save();
    }
    public static function autoComplete($request){
        $products = Product::select('id','english')->where('english' , 'like' , '%'.$request->text.'%')->limit(6)->get();
            //Arabic
        $comp = Product::select('id','arabic','english')->where('arabic' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->arabic;
            self::addNoRedundancy($products,$c);
        }   
            //German
        $comp = Product::select('id','german','english')->where('german' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->german;
            self::addNoRedundancy($products,$c);
        }       
    
            //Turkish
        $comp = Product::select('id','turky','english')->where('turky' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->turky;
            self::addNoRedundancy($products,$c);
        }
            //Kurdi
        $comp = Product::select('id','kurdi','english')->where('kurdi' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->kurdi;
            self::addNoRedundancy($products,$c);        
        }
        foreach ($products as $p) {
                $p->type = 'pr';
        }   

        return $products;
    }
    private static function addNoRedundancy($arr , $obj){
        foreach ($arr as $a) {
            if($a->id == $obj->id )
                return ;
        }
        $arr->push($obj);
        return ;
    }

}
