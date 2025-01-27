<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Subcategory;
use App\Product;
use App\User;
use App\Rate;
use App\OrderItem;
use App\Comment;
use App\UserLike;
use App\Http\Services\FilterService;
use App\Http\Services\CartService;
use App\Http\Services\ImageService;
use App\Http\Services\ProductService;
use App\Http\Services\BrandService;
use App\Http\Services\SubcategoryService;
use App\Http\Services\CategoryService;

use Redirect;
use Session;
use App;
use Auth;
use App\Brand;
use App\Tags;
use App\Order;
use App\Review;

class PageController extends Controller
{
	function __construct() {
		$this->middleware('langMiddleware');
	}

	public function index(){
		$lang = session('lang');
		App::setLocale($lang);
		$categories = Category::all();
		if ($lang == "ar"){
			foreach ($categories as $category) {
				$category->english = $category->arabic;
			}
		}
		if ($lang == "tr"){
			foreach ($categories as $category) {
				$category->english = $category->turky;
			}
		}
		if ($lang == "ku"){
			$i= 0;
			foreach ($categories as $category) {
				$categoriesname[$i] = $category->kurdi;
				$categoriesid[$i] = $category->id;
				$i++;
			}
		}
		if ($lang == "de"){
			foreach ($categories as $category) {
				$category->english = $category->german;
			}
		}
		$topProducts = Product::where('top', '=' , 1)->limit(20)->get();

		$brands = Brand::get();
		if ($lang == "de"){
			foreach ($topProducts as $p) {
				$p->english = $p->german;
			}
			foreach ($brands as $b) {
				$b->english = $b->german;
			}
		}
		if ($lang == "ar"){
			foreach ($topProducts as $p) {
				$p->english = $p->arabic;
			}
			foreach ($brands as $b) {
				$b->english = $b->arabic;
			}
		}
		if ($lang == "tr"){
			foreach ($topProducts as $p) {
				$p->english = $p->turky;
			}
			foreach ($brands as $b) {
				$b->english = $b->turky;
			}
		}
		if ($lang == "ku"){
			foreach ($topProducts as $p) {
				$p->english = $p->kurdi;
			}
			foreach ($brands as $b) {
				$b->english = $b->kurdi;
			}
		}
		return view('client.pages.home')->withCategories($categories)->withTopProducts($topProducts)->withBrands($brands);
	}
	public function getCategoryPage($categoryId){
                $id_category = $categoryId;
		$lang = session('lang');
		App::setLocale($lang);
		$categories = Category::all();
		$subcategories = Subcategory::where('category_id','=',$categoryId)->get();
		$Tags = [];
		$tags = Tags::select('product_id')->where('category_id' , '=' ,$categoryId)->get()->toArray();
		foreach ($tags as $tag) {
			array_push($Tags, $tag['product_id']);
		}

		$products = DB::table('product')
		->whereIn('id' , $Tags)
		->orderBy('category_id', 'asc')->take(15)->get();
		if ($lang == "ar"){
			foreach ($categories as $category) {
				$category->english = $category->arabic;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->arabic;
			}
			foreach ($products as $product) {
				$product->english = $product->arabic;
			}
		}
		if ($lang == "de"){
			foreach ($categories as $category) {
				$category->english = $category->german;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->german;
			}
			foreach ($products as $product) {
				$product->english = $product->german;
			}
		}
		if ($lang == "tr"){
			foreach ($categories as $category) {
				$category->english = $category->turky;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->turky;
			}
			foreach ($products as $product) {
				$product->english = $product->turky;
			}
		}
		if ($lang == "ku"){
			foreach ($categories as $category) {
				$category->english = $category->kurdi;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->kurdi;
			}
			foreach ($products as $product) {
				$product->english = $product->kurdi;
			}
		}
		foreach ($products as $product) {
			if (isset($product->discount_price)) {
				$product->discount =  sprintf('%0.0f',100 - (($product->discount_price * 100) / $product->price));
			}
                      
			$product->order = 0;
			if (session('cartId') != null){
				$temp = OrderItem::where('order_id', '=', session('cartId'))->where('item_id', '=', $product->id)->get()->first();
				if ($temp != null ){
					$product->order = $temp->qty_in_my_card;
				}
			}
		}
//		 dd($products);
		$category = Category::find($categoryId);
		if ($lang == 'ar') $category->english = $category->arabic;
		if ($lang == 'ku') $category->english = $category->kurdi;
		if ($lang == 'de') $category->english = $category->german;
		if ($lang == 'tr') $category->english = $category->turky;
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withCategoryId($categoryId)->withCategory($category)->with('id_category',$id_category);
	}

        public function get_qty(Request $request){
              $qty = ProductService::getProductQty($request->product_id);
              return $qty;
        }
        
          public function get_qty_after_buy(Request $request){
              $qty= [];
              $id_products = [];
            for($i = 0;$i < count($request->qty);$i++){
               $qty[] = ProductService::getProductQty($request->qty[$i]['product_id']);
//               echo $qty[$i];
               if($qty[$i] < $request->qty[$i]['qty']){
                   $id_products []= ['id' =>$request->qty[$i]['product_id'],'qty' => $qty[$i]];
               }
            }
            return $id_products;
//            }else{
//                return -1;
//            }
        }

	public function loadMoreCategoryProduct(Request $request){
		$categoryId = $request->category_id;
		$lang = session('lang');
		App::setLocale($lang);
		

		$Tags = [];
		$tags = Tags::select('product_id')->where('category_id' , '=' ,$categoryId)->get()->toArray();
		// dd($tags);
		foreach ($tags as $tag) {
			array_push($Tags, $tag['product_id']);
		}
		// dd($Tags);
		$products = DB::table('product')
		->whereIn('id' , $Tags)
		->orderBy('category_id', 'asc')->skip($request->skip)->take(10)->get();
		// dd($products);
		if ($lang == "ar"){
			foreach ($products as $product) {
				$product->english = $product->arabic;
			}
		}
		if ($lang == "de"){
			foreach ($products as $product) {
				$product->english = $product->german;
			}
		}
		if ($lang == "tr"){
			foreach ($products as $product) {
				$product->english = $product->turky;
			}
		}
		if ($lang == "ku"){
			foreach ($products as $product) {
				$product->english = $product->kurdi;
			}
		}
		foreach ($products as $product) {
			if (isset($product->discount_price)) {
				$product->discount =  sprintf('%0.0f',100 - (($product->discount_price * 100) / $product->price));
			}
			$product->order = 0;
			if (session('cartId') != null){
				$temp = OrderItem::where('order_id', '=', session('cartId'))->where('item_id', '=', $product->id)->get()->first();
				if ($temp != null ){
					$product->order = $temp->qty_in_my_card;
				}
			}
		}
		return view('client.pages.item_products')->withProducts($products);
	} 
//
//        public function productQty(){
//            
//        }

	public function getCategoryNameFilteredPage(Request $request){
            $id_category = '';
		$lang = session('lang');
		App::setLocale($lang);
		// dd($request->categoryId); 
		$products = Product::where(DB::raw("concat_ws('-',english,arabic,turky,kurdi,german)"),'like','%'.$request->search.'%')
		->where('active','=',1)->get();

		$categories = Category::all();
		$subcategories = DB::table('subcategory')->where('category_id','=',$request->categoryId)->orderBy('category_id','asc')->get();
		// dd($products);
		if ($lang == "ar"){

			foreach ($categories as $category) {
				$category->english = $category->arabic;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->arabic;
			}
			foreach ($products as $product) {
				$product->english = $product->arabic;
			}
		}
		if ($lang == "de"){
			foreach ($categories as $category) {
				$category->english = $category->german;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->german;
			}
			foreach ($products as $product) {
				$product->english = $product->german;
			}
		}
		if ($lang == "tr"){
			foreach ($categories as $category) {
				$category->english = $category->turky;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->turky;
			}
			foreach ($products as $product) {
				$product->english = $product->turky;
			}
		}
		if ($lang == "ku"){
			foreach ($categories as $category) {
				$category->english = $category->kurdi;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->kurdi;
			}
			foreach ($products as $product) {
				$product->english = $product->kurdi;
			}
		}
		foreach ($products as $product) {
			if (isset($product->discount_price)) {
				$product->discount =  sprintf('%0.0f',100 - (($product->discount_price * 100) / $product->price));
			}
			$product->order = 0;
                        $products->qty = ProductService::getProductQty($product->id);
			if (session('cartId') != null){
				$temp = OrderItem::where('order_id', '=', session('cartId'))->where('item_id', '=', $product->id)->get()->first();
				if ($temp != null ){
					$product->order = $temp->qty_in_my_card;
				}
			}
		}
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withLastSearch($request->search)->withCategoryId($request->categoryId)->with('id_category',$id_category);
	}

	public function getCategoryFilteredPage(Request $request){

		$lang = session('lang');
		App::setLocale($lang);
		$products =  FilterService::loadAfterProducts($request,0);

		$categories = Category::all();
//                dd($request->max);
		$subcategories = Subcategory::all();

		if ($lang == "ar"){
			foreach ($categories as $category) {
				$category->english = $category->arabic;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->arabic;
			}
		}
		if ($lang == "de"){
			foreach ($categories as $category) {
				$category->english = $category->german;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->german;
			}
		}
		if ($lang == "tr"){
			foreach ($categories as $category) {
				$category->english = $category->turky;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->turky;
			}
		}
		if ($lang == "ku"){
			foreach ($categories as $category) {
				$category->english = $category->kurdi;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->kurdi;
			}
		}
		foreach ($products as $product) {
			if (isset($product->discount_price)) {
				$product->discount =  sprintf('%0.0f',100 - (($product->discount_price * 100) / $product->price));
			}
//                        dd($product);
			$product->order = 0;
			if (session('cartId') != null){
				$temp = OrderItem::where('order_id', '=', session('cartId'))->where('item_id', '=', $product->id)->get()->first();
				if ($temp != null ){
					$product->order = $temp->qty_in_my_card;
				}
			}
		}
//                dd($products);
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withLastSearch('Filter')->withCategoryId($categories[0]->id)->withFilter(1);
	}

	public function loadMoreProducts(Request $request){
		$products =  FilterService::loadProducts($request,$request->loads);
		return view('client.pages.item_products')->withProducts($products);
	}

	public function getCategorySubcategoryFilteredPage($subcategory){
                $categoryId = $subcategory;
		$subcategory = Subcategory::find($subcategory);
                
		$lang = session('lang');
		App::setLocale($lang);

		$Tags = [];
		$tags = Tags::select('product_id')->where('subcategory_id' , '=' , $subcategory->id)->get()->toArray();
		foreach ($tags as $tag) {
			array_push($Tags, $tag);
		}
		$products = Product::whereIn('id',$Tags)
		->where('active','=',true)->get();

		$categories = Category::all();

		$subcategories = Subcategory::where('category_id','=',$subcategory->category_id)->get();

		if ($lang == "ar"){
			foreach ($categories as $category) {
				$category->english = $category->arabic;
			}
			foreach ($subcategories as $subcategory1) {
				$subcategory1->english = $subcategory1->arabic;
			}
			foreach ($products as $product) {
				$product->english = $product->arabic;
			}
		}
		if ($lang == "de"){
			foreach ($categories as $category) {
				$category->english = $category->german;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->german;
			}
			foreach ($products as $product) {
				$product->english = $product->german;
			}
		}
		if ($lang == "tr"){
			foreach ($categories as $category) {
				$category->english = $category->turky;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->turky;
			}
			foreach ($products as $product) {
				$product->english = $product->turky;
			}
		}
		if ($lang == "ku"){
			foreach ($categories as $category) {
				$category->english = $category->kurdi;
			}
			foreach ($subcategories as $subcategory) {
				$subcategory->english = $subcategory->kurdi;
			}
			foreach ($products as $product) {
				$product->english = $product->kurdi;
			}
		}
		foreach ($products as $product) {
			if (isset($product->discount_price)) {
				$product->discount =  sprintf('%0.0f',100 - (($product->discount_price * 100) / $product->price));
			}
                        
			$product->order = 0;
			if (session('cartId') != null){
				$temp = OrderItem::where('order_id', '=', session('cartId'))->where('item_id', '=', $product->id)->get()->first();
				if ($temp != null ){
					$product->order = $temp->qty_in_my_card;
				}
			}
		}
		$temp = [];
		$count = 1;
		foreach ($subcategories as $subcatego) {
			if ($subcatego->id == $subcategory->id){
				$temp[0]=  $subcatego;
			}
			else {
				$temp[$count] = $subcatego;
				$count++;
			}
		}
		ksort($temp);
		$subcategories = $temp;
//                $Qty_product = ProductService::getProductQty($product->id);
                
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withLastSearch($subcategory->category_id)->with('categoryId',$categoryId);
	}


        
	public function getProductView($id){

		$lang = session('lang');

		App::setLocale((string)$lang);

		$product = Product::find($id);
		$subcategory = Subcategory::find($product->subcategory_id);
		
		$comments = Comment::with(['user'])->where('product_id','=',$product->id)->orderBy('id', 'desc')
		->skip(0)->take(3)->get();
		
                $all_comments = Comment::with(['user'])->where('product_id','=',$product->id)->orderBy('id', 'desc')->get();
                
		$logo = Brand::select('image_path' , 'id')
		->where('id' , '=', $product->brand_id)
		->get()->first();

		$Tags = [];
		$subcategory_ids = [];
		$subcategories = Tags::select('subcategory_id')->where('product_id' ,'=', $id)->get()->toArray();
		foreach ($subcategories as $sub) {
		  	array_push($subcategory_ids, $sub['subcategory_id']);
		}
		$tags = Tags::select('product_id')->whereIn('subcategory_id' , $subcategory_ids)->get()->toArray();
		foreach ($tags as $tag) {
			array_push($Tags , $tag);
		}
		$simiproducts = Product::select('*')
		->whereIn('id' , $Tags)
		->where('id','!=',$id)
		->where('active','=',true)->take(4)->skip(0)->get();

		if ($lang == "ar"){
			$product->english = $product->arabic;
			$product->desc_english = $product->desc_arabic;
			$subcategory->english = $subcategory->arabic;
			foreach ($simiproducts as $simi) {
				$simi->english = $simi->arabic;
			}
		}
		if ($lang == "de"){
			$product->english = $product->german;
			$product->desc_english = $product->desc_german;
			$subcategory->english = $subcategory->german;
			foreach ($simiproducts as $simi) {
				$simi->english = $simi->german;
			}
		}
		if ($lang == "ku"){
			$product->english = $product->kurdi;
			$product->desc_english = $product->desc_kurdi;
			$subcategory->english = $subcategory->kurdi;
			foreach ($simiproducts as $simi) {
				$simi->english = $simi->kurdi;
			}
		}

		if ($lang == "tr"){
			$product->english = $product->turky;
			$product->desc_english = $product->desc_turky;
			$subcategory->english = $subcategory->turky;
			foreach ($simiproducts as $simi) {
				$simi->english = $simi->turky;
			}
		}
			$product->tax = sprintf('%0.2f',$product->price *0.19);
			$product->gain_points= ceil($product->price / 5);
			$product->abstract_price = $product->price - $product->tax;
		if (isset($product->discount_price)) {
			$product->discount =  sprintf('%0.1f',100 - (($product->discount_price * 100) / $product->price));

			$product->tax = sprintf('%0.2f',$product->discount_price *0.19);
			$product->gain_points= ceil($product->discount_price / 5);
			$product->abstract_price = $product->discount_price - $product->tax;
		}
		foreach ($simiproducts as $simiproduct) {
                    if (isset($simiproduct->discount_price)) {
                        $simiproduct->discount =  sprintf('%0.0f',100 - (($simiproduct->discount_price * 100) / $simiproduct->price));
                    }
		}
		// $product->qty = 0;
		// dd($comments);
		$cartId = session('cartId');
		$orderItems = OrderItem::where('order_id' , '=', $cartId)->get();
		$existedInCart = 0;
		foreach ($orderItems as $item) 
			if ($item->item_id == $id ){
				$existedInCart =1;
				break;
			}
		
		foreach ($simiproducts as $simi) {
			$simi->order = 0 ;
			if (isset($cartId)){
				$cart = OrderItem::where('order_id', '=', session('cartId'))->where('item_id', '=', $simi->id)->get()->first();
				if (isset($cart)){
					$simi->order = $cart->qty_in_my_card;
				}
			}
			
		}

		$ordercount = 0;
		if ((session('order_item_count')) != null && (session('order_item_count')) != 0 ){
			$order = OrderItem::where('order_id' , '=', session('cartId')) ->where('item_id', '=' , $id)->where('user_id', '=', Auth::id() )->get()->first();
			if ($order != null)
				$ordercount = $order->qty_in_my_card; 
		}
		$product->qty = ProductService::getProductQty($product->id);

		return view('client.pages.item_view')->withProduct($product)->withSubcategory($subcategory)->withSimiProducts($simiproducts)->withComments($comments)->withBrand($logo)->withExistedInCart($existedInCart)->withItemQty($ordercount)->with('all_comments',$all_comments);
	}


	public function rate(Request $request){
		$userId = Auth::id();
		// dd($request->request);
		$id   = $request->input('id');
		$userrate = $request->input('rate');

		$rates = Rate::where('product_id' ,'=',$id)->where('type', '=', 1)->get();


		$flag = 0;
		$precalculation = $userrate;
		foreach ($rates as $rate) {
			if ($rate->user_id == $userId){
				$flag =1;
				continue;
			}
			$precalculation += $rate->rate;
		}

		if (count($rates) != 0 ){
			$lastrate = $precalculation / (count($rates) + ($flag ? 0 : 1) );
				$update = Product::find($id);
				$update->rate = round($lastrate);
				$update->update();
		}
		else {
			$update = Rate::updateOrCreate(
				['type' => 1 , 'user_id'=>$userId ,'product_id' => $id ],
   				['rate' => $userrate,'type' => 1 , 'user_id'=>$userId ,'product_id'  => $id ]
	 		);
	 		$product = Product::find($id);
	 		$product->rate = $userrate;
	 		$product->update();
		}
	}

	public function comment(Request $request){
		if (!Auth::check())
			return route('login');
		$rate =$request->input('rate') ;
		$description =$request->input('comment');
		$user_id = Auth::id();
		$productId = $request->input('id');


		$comment = new Comment;
		$comment->rate= $rate;
		$comment->description = $description;
		$comment->user_id = $user_id;
		$comment->product_id = $productId;
		
		$comment->save();

		return 1;
	}
        
        public function like(Request $request){
            $val_like = true;
            $get_like = UserLike::where('user_id',$request->user_id)->get();
            foreach($get_like as $validation_like){
                if($validation_like->comment_id == $request->comment_id){
                    $val_like = false;
                }
            }
            if($val_like == true){
                $like = new UserLike;
                $like->user_id = $request->user_id;
                $like->comment_id = $request->comment_id;
                $like->save();
                return response(['status' => 'true', 'data' => 'true', 'message' => '']);
            }else{
                return response(['status' => 'false', 'data' => 'true', 'message' => '']);
            }
        }
        public function load_like(Request $request){
            $comments_id = [];
            $get_like = UserLike::where('user_id',$request->user_id)->get();
            foreach($get_like as $validation_like){
                    $comments_id [] = $validation_like->comment_id;
            }
                return response(['status' => 'false', 'data' => $comments_id, 'message' => '']);
        }


        public function setLanguage($lang)
	{
  		session(['lang' => $lang]);
  		return Redirect::back();
	}

	public function getAboutUs(){
		$lang = session('lang');
		App::setLocale($lang);

		$review =Review::get()->first();
		return view('client.pages.about_us')->withReview($review);
	}
	public function getReview(Request $request)
	{
		$index = $request->index;
		return Review::take(1)->skip($index-1)->get();
	}
	public function setReview(Request $request)
	{
		$review = new Review();

		if($request->input('rate') != 0){
			$review->desc = $request->input('desc');
			$review->rate = $request->input('rate');
			if ($review->desc == null && $review->rate == 0  ) return back();
			if ($review->desc == null )
				$review->desc = " ";
			$review->user_id = Auth::id();

			$review->save();
		}
		return back();
	}

	public function getProfile(){
		$lang = session('lang');
		App::setLocale($lang);

		$user = Auth::user();
		$orders = Order::where('user_id' , '=' , $user->id)->where('status_id', '>',2)->get();
		foreach ($orders as $order) {
			$order->orderItems = OrderItem::where('order_id', '=', $order->id)->get();
			foreach ($order->orderItems as $orderitem)
			{
				$orderitem->item_id = Product::find($orderitem->item_id);
			}
		}

		return view('client.pages.profile')->withOrders($orders);
	}
	public function changeUsername(Request $request){
        $username = $request->username;
        return UserService::changeUsername($username);
    }
    public function loadOrder($id){
        return CartService::loadCart($id);
    }
    public function changeDetails(Request $request){
    	$address = $request->input('address');

    	$birthdate = $request->birthdate;
    	$user = User::find(Auth::id()); // to change from the database not from session "Auth::user()"
    	if(isset($address))
    		$user->address= $address;
    	if(isset($birthdate))
    		$user->birthdate = $birthdate ;

    	$user->update();
    	return 1;
    }


    public function uploadPictue(Request $request){
    	$user = User::find(Auth::id());
    	if ($request->hasFile('image')){
			$user->image_id = ImageService::saveImage($request->file('image'));
    	}
    	$user->save();
    	return back();
    }


    public function autoComplete(Request $request){
    	$products = ProductService::autoComplete($request);

    	$categories = CategoryService::autoComplete($request);

    	$subcategories = SubcategoryService::autoComplete($request);

    	$brands = BrandService::autoComplete($request);
    	
    	$result = Product::where('id', '=', 0)->get();
    	if(isset($products))
    		$result = $products;

		foreach ($categories as $c) {
			$result->push($c);
		}
		foreach ($subcategories as $sub) {
			$result->push($sub);
		}
		foreach ($brands as $br) {
			$result->push($br);
		}

    	return $result;
    }

    private function addNoRedundancy($arr , $obj){
    	foreach ($arr as $a) {
    		if($a->id == $obj->id )
    			return ;
    	}
    	$arr->push($obj);
    	return ;
    }
    public function deleteFromCart(Request $request){
    	$id =$request->id; 
    	$order = OrderItem::where('order_id', '=', session('cartId'))->where('item_id' , '=', $id)->get()->first();
    	// dd($order);
     	return CartService::removeOrderItem($order->id,$request->is_click_delete);
    }
    public function  getOrder(Request $request){
    	$items =OrderItem::select('item_id' , 'qty', 'sub_amount','total_amount','packed')->where('order_id', '=' , $request->id)->get();

    	foreach ($items as $item) {
    		if ($item->packed == 0)
    			return 'Not all items packed';
    		$item->item_name_ar = Product::find($item->item_id)->arabic;
    		$item->item_name_en = Product::find($item->item_id)->english;
    	}
    	return $items;
    } 

}
