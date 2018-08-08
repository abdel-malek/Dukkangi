<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Category;
use App\Http\Services\ImageService;
use App\Subcategory;
use App\Brand;
use App\Http\Services\ProductService;
use App\OrderItem;
use App\Tags;
use App\ProductNotificationStatus;
use App\ProductNotification;
use Auth;
use App;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function productData(Request $request)
    {
        $filter = $request->input('filter');
        return ProductService::loadProduct($filter);
    }

    //BY CATEGORY
    public function indexByCategory()
    {
        return view('admin.products.indexbycategory');
    }

    public function productDataByCategory(Request $request, $id)
    {
        $filter = $request->input('filter');
        return ProductService::productDataByCategory($filter, $id);
    }

    //BY SUBCATEGORY
    public function indexBySubcategory()
    {
        return view('admin.products.indexbysubcategory');
    }

    public function productDataBySubcategory(Request $request, $id)
    {
        $filter = $request->input('filter');
        return ProductService::productDataBySubcategory($filter, $id);
    }

    public function single($id)
    {
        $product = Product::find($id);
        $categories = [];
        $subcategories = [];
        $ar = Tags::where('product_id', '=', $id)->get()->toArray();
        foreach ($ar as $a) {
            // dd($a['category_id']);
            $category = Category::find($a['category_id']);
            array_push($categories, $category->english);
            $subcategory = Subcategory::find($a['subcategory_id']);
            array_push($subcategories, $subcategory->english);
        }
        return view('admin.products.single')->withProduct($product)->withCategories($categories)->withSubcategories($subcategories);
    }

    //DEFAULT EDIT
    public function edit($id)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();

        $brands = Brand::all();
        $product = Product::find($id);
        $tags = Tags::where('product_id', '=', $id)->get();
        foreach ($subcategories as $sub) {
            foreach ($tags as $tag) {
                if ($sub->id  == $tag->subcategory_id){
                    $sub->selected = 1 ;
                }
            }
        }
        return view('admin.products.edit')->withProduct($product)->withCategories($categories)->withSubcategories($subcategories)->withBrands($brands);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'arabic' =>'max:255|min:2',
            'english'=>'max:255|min:2',
            'german' =>'max:255|min:2',
            'turky'  =>'max:255|min:2',
            'kurdi'  =>'max:255|min:2',
            'price'  =>'required|between:0,99999.99'
         ]);
        return ProductService::updateProduct($request, $request->id, 1);
    }

    //BY CATEGORY EDIT
    public function editByCategory($id)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $product = Product::find($id);
        $tags = Tags::where('product_id', '=', $id)->get();
        foreach ($subcategories as $sub) {
            foreach ($tags as $tag) {
                if ($sub->id  == $tag->subcategory_id){
                    $sub->selected = 1 ;
                }
            }
        }
        return view('admin.products.editbycategory')->withBrands($brands)->withProduct($product)->withCategories($categories)->withSubcategories($subcategories);
    }

    public function updateByCategory(Request $request)
    {
        $this->validate($request, [
            'arabic' =>'max:255|min:2',
            'english'=>'max:255|min:2',
            'german' =>'max:255|min:2',
            'turky'  =>'max:255|min:2',
            'kurdi'  =>'max:255|min:2',
            'price'  =>'required|between:0,99999.99'
         ]);
        return ProductService::updateProduct($request, $request->id, 2);
    }
    //BY SUBCATEGORY EDIT
    public function editBySubcategory($id)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $product = Product::find($id);
        $tags = Tags::where('product_id', '=', $id)->get();
        foreach ($subcategories as $sub) {
            foreach ($tags as $tag) {
                if ($sub->id  == $tag->subcategory_id){
                    $sub->selected = 1 ;
                }
            }
        }
        return view('admin.products.editbysubcategory')->withBrands($brands)->withProduct($product)->withCategories($categories)->withSubcategories($subcategories);
    }

    public function updateBySubcategory(Request $request)
    {
        $this->validate($request, [
            'arabic' =>'max:255|min:2',
            'english'=>'max:255|min:2',
            'german' =>'max:255|min:2',
            'turky'  =>'max:255|min:2',
            'kurdi'  =>'max:255|min:2',
            'price'  =>'required|between:0,99999.99'
         ]);
        return ProductService::updateProduct($request, $request->id, 3);
    }

    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        return view('admin.products.create')->withBrands($brands)->withCategories($categories)->withSubcategories($subcategories);
    }

    public function store(Request $request)
    {
        $product = new Product();
        $this->validate($request, [
            'arabic' =>'max:255|min:2',
            'english'=>'max:255|min:2',
            'german' =>'max:255|min:2',
            'turky'  =>'max:255|min:2',
            'kurdi'  =>'max:255|min:2',
            'price'  =>'required|between:0,99999.99'
         ]);

        $product->arabic           = $request->arabic;
        $product->english          = $request->english;
        $product->german           = $request->german;
        $product->turky            = $request->turky;
        $product->kurdi            = $request->kurdi;

        $product->desc_arabic      = $request->desc_arabic;
        $product->desc_english     = $request->desc_english;
        $product->desc_german      = $request->desc_german;
        $product->desc_turky       = $request->desc_turky;
        $product->desc_kurdi       = $request->desc_kurdi;

        $product->qty              = $request->qty;
        $product->price            = $request->price;
        $product->discount_price            = $request->discount_price;
        //$product->category_id    = $request->category_id[0];
        $product->subcategory_id   = $request->subcategory_id[0];
        $product->brand_id         = $request->brand_id;
        // $product->option1       = isset($request->option1) ?$request->option1 : 0;
        // $product->option2       = isset($request->option2) ?$request->option2 : 0;
        // $product->option3       = isset($request->option3) ?$request->option3 : 0;
        // $product->option4       = isset($request->option4) ?$request->option4 : 0;

        $product->active           = isset($request->active) ?$request->active : 0;



        $product->section1_english = $request->section1_english;
        $product->section1_german  = $request->section1_german;
        $product->section1_arabic  = $request->section1_arabic;
        $product->section1_kurdi   = $request->section1_kurdi;
        $product->section1_turky   = $request->section1_turky;

        $product->section2_english = $request->section2_english;
        $product->section2_german  = $request->section2_german;
        $product->section2_arabic  = $request->section2_arabic;
        $product->section2_kurdi   = $request->section2_kurdi;
        $product->section2_turky   = $request->input('section2_turky');

        $product->section3_english = $request->section3_english;
        $product->section3_german  = $request->section3_german;
        $product->section3_arabic  = $request->section3_arabic;
        $product->section3_kurdi   = $request->section3_kurdi;
        $product->section3_turky   = $request->input('section3_turky');

        $product->barcode          = $request->input('barcode');
        $product->custom_id        = $request->input('custom_id');
        $product->tax_fees         = $request->input('tax_fees') || 0.19;




        if ($request->hasFile('image')) {
            $product->image_id  = ImageService::saveImage($request->file('image'));
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

        if (isset($request->point)) {
            $product->point     = $request->point;
        }
        else {
            $product->point     = '0';
        }

        $product->save();

        foreach ($request->subcategory_id as $singleSubcategeory) {
            $subcategory = Subcategory::find($singleSubcategeory);
            $tag = new Tags();
            $tag->product_id = $product->id;
            $tag->subcategory_id = $singleSubcategeory;
            $tag->category_id    = $subcategory->category_id;
            $tag->save();
        }


        ProductService::addProductQty($product->id,$product->qty);

        Session::flash('success', 'Added Successfuly!');

        return redirect(route('product.index'));
    }

    public function destroy($id)
    {
        return ProductService::deleteProduct($id);
    }

    public function productQtyIndex()
    {
        return view('admin.products.qtyIndex');
    }

    public function productQtyData(Request $request)
    {
        $filter = $request->input('filter');
        return ProductService::loadProductQty($filter);
    }

    public function productQtyCreate($id)
    {
        return view('admin.products.createQty', compact('id'));
    }

    public function productQtyStore(Request $request, $id)
    {
        $qty = $request->input('qty');
        ProductService::addProductQty($id, $qty);
        return redirect(route('productQty.index'));
    }
    public function filterByBrand($brandId){
        $lang = session('lang');
        App::setLocale($lang);

        $products = Product::where('brand_id' , '=' ,$brandId)->get();
        $brand = Brand::find($brandId);
        $categories = [];
        $subcategories = [];
        foreach ($products as $product) {
            if (isset($product->discount_price)) {
                $product->discount =  sprintf('%0.0f',100 - (($product->discount_price * 100) / $product->price));
            }
            $product->order = 0;
            if (session('cartId') != null){
                $temp = OrderItem::where('order_id', '=', session('cartId'))->where('item_id', '=', $product->id)->get()->first();
                if ($temp != null ){
                    $product->order = $temp->qty;
                }
            }
        }
        return view('client.pages.item')->withProducts($products)->withCategories($categories)->withSubcategories($subcategories)->withBrandfilter("1");
    }
    public function addNotification(  Request $request){
            $notify = new ProductNotification();
            $check = ProductNotification::where('user_id','=',Auth::id())->where('product_id' , '=', $request->id)->where('status_id' , '=',ProductNotificationStatus::CREATED)->get()->first();
            if(isset($check)){
                return 'ok';
            } 
            $notify->user_id = Auth::id();
            $notify->product_id = $request->id;
            $notify->status_id = ProductNotificationStatus::CREATED;
            $notify->save();
            return 'ok';
    }
    public function topProduct($id){
        $product = Product::find($id);
        if($product->top == 1){
            $product->top = 0;
            $product->update();
            return 'removed';
        }
        else {
            $product->top = 1;   
            $product->update();
            return 'ok';
        }
        
    }
}
