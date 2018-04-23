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
use App\Http\Services\FilterService;
use Redirect;
use Session;
use App;
use Auth;

class PageController extends Controller
{

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
		return view('client.pages.home')->withCategories($categories);
	}
	public function getCategoryPage($categoryId){

		$lang = session('lang');
		App::setLocale($lang);
		$categories = Category::all();
		$subcategories = Subcategory::all()->where('category_id','=',$categoryId);
		// dd($subcategories);
		$products = DB::table('product')->where('category_id','=',$categoryId)->orderBy('category_id', 'asc')->get();
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
		}
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withCategoryId($categoryId);
	}


	public function getCategoryNameFilteredPage(Request $request){
		$lang = session('lang');
		App::setLocale($lang);
//		dd($request->categoryId);
		$products = Product::where('category_id','=',$request->categoryId)
		->where(DB::raw("concat_ws('-',english,arabic,turky,kurdi,german)"),'like','%'.$request->search.'%')
		->where('active','=',true)->get();

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
		}
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withLastSearch($request->search)->withCategoryId($request->categoryId);
	}


		public function getCategoryFilteredPage(Request $request){

		$lang = session('lang');
		App::setLocale($lang);;
		$products =  FilterService::loadProducts($request,0);


		$categories = Category::all();


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
		}
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withLastSearch('Filter')->withCategoryId($categories[0]->id)->withFilter(1);
	}

	public function loadMoreProducts(Request $request){


		$products =  FilterService::loadProducts($request,$request->loads);

		return view('client.pages.item_products')->withProducts($products);

	}
	public function getCategorySubcategoryFilteredPage($subcategory){
		$subcategory = Subcategory::find($subcategory);

		$lang = session('lang');
		App::setLocale($lang);

		$products = Product::where('subcategory_id','=',$subcategory->id)
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
		}
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withLastSearch($subcategory->category_id);
	}


	public function getProductView($id){

		$lang = session('lang');

		App::setLocale((string)$lang);

		$product = Product::find($id);
		$category = Category::find($product->category_id);
		$subcategory = Subcategory::find($product->subcategory_id);
		$skip = Comment::with(['user'])->where('product_id','=',$product->id)->get()->count();
		$comments = Comment::with(['user'])->where('product_id','=',$product->id)->skip($skip-3)->take(3)->get();

		foreach ($comments as $comment) {
			$user =  User::find($comment->user_id);
			if (!isset($user)) 
				$name = "Anonymous";
			else 
				$name = $user->name;
			
			$comment->user_id = $name;
			$comment->rate = round($comment->rate);
		}

		$simiproducts = Product::select('*')->where('subcategory_id','=',$product->subcategory_id)
		->where('active','=',true)->get();

		if ($lang == "ar"){
			$product->english = $product->arabic;
			$product->desc_english = $product->desc_arabic;
			$category->english = $category->arabic;
			$subcategory->english = $subcategory->arabic;
			foreach ($simiproducts as $simi) {
				$simi->english = $simi->arabic;
			}
		}
		if ($lang == "de"){
			$product->english = $product->german;
			$product->desc_english = $product->desc_german;
			$category->english = $category->german;
			$subcategory->english = $subcategory->german;
			foreach ($simiproducts as $simi) {
				$simi->english = $simi->german;
			}
		}
		if ($lang == "ku"){
			$product->english = $product->kurdi;
			$product->desc_english = $product->desc_kurdi;
			$category->english = $category->kurdi;
			$subcategory->english = $subcategory->kurdi;
			foreach ($simiproducts as $simi) {
				$simi->english = $simi->kurdi;
			}
		}

		if ($lang == "tr"){
			$product->english = $product->turky;
			$product->desc_english = $product->desc_turky;
			$category->english = $category->turky;
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

		return view('client.pages.item_view')->withProduct($product)->withCategory($category)->withSubcategory($subcategory)->withSimiProducts($simiproducts)->withComments($comments);

	}


	public function rate(Request $request){
		$userId = Auth::id();

		$type = $request->input('type') == "subategory" ? 2 : 1 ;
		$id   = $request->input('id');
		$userrate = $request->input('rate');

		if ( $type == 1 )
			$rates = Rate::where('product_id' ,'=',$id)->where('type', '=', $type)->get();
		else
			$rates = Rate::where('subcategory_id' ,'=',$id)->where('type', '=', $type)->get();


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

			if ($type == 1){
				$update = Product::find($id);
				$update->rate = round($lastrate);
				$update->save();
			}
			else if ($type == 2){
				$update = Subcategory::find($id);
				$update->rate = round($lastrate);
				$update->save();
			}
		}

			 $update = Rate::updateOrCreate(
				['type' => $type , 'user_id'=>$userId ,$type == 1 ?'product_id' :'subcategory_id'  => $id ],
	   			['rate' => $userrate,'type' => $type , 'user_id'=>$userId ,$type == 1 ?'product_id' :'subcategory_id'  => $id ]
		 	);
	}

	public function comment(Request $request){
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

		return Redirect(route('product' , $productId));
	}
	



	public function setLanguage($lang)
	{
  		session(['lang' => $lang]);
  		return Redirect::back();
	}

}
