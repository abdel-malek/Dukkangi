<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Category;
use App\Subcategory;
use App\Product;
use App\User;
use App\Rate;
use App\Comment;

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
		$subcategories = DB::table('subcategory')->where('category_id','=',$categoryId)->orderBy('category_id','asc')->get();
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
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products);
	}


	public function getCategoryNameFilteredPage(Request $request){
		$lang = session('lang');
		App::setLocale($lang);

		$products = Product::where('category_id','=',$request->categoryId)
		->where(DB::raw("concat_ws('-',english,arabic,turky,kurdi,german)"),'like','%'.$request->search.'%')->get();
		
		$categories = Category::all();
		$subcategories = DB::table('subcategory')->where('category_id','=',$request->categoryId)->orderBy('category_id','asc')->get();
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
		return view('client.pages.item')->withCategories($categories)->withSubcategories($subcategories)->withProducts($products)->withLastSearch($request->search);
	}
	public function getProductView($id){
		$lang = session('lang');

		App::setLocale((string)$lang);
		
		$product = Product::find($id);
		$category = Category::find($product->category_id);
		$subcategory = Subcategory::find($product->subcategory_id);
		$comments = Comment::with(['user'])->where('product_id','=',$product->id)->get()->take(3);

		foreach ($comments as $comment) {
			$comment->user_id = User::find($comment->user_id)->name;
			$comment->rate = round($comment->rate);
		}
		
		$simiproducts = Product::select('*')->where('subcategory_id','=',$product->subcategory_id)->get();
		
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

		//Calculate Average Rate For Subcategory
		

		$subcategoryRate = Rate::select('rate')->where('subcategory_id' , '=',$subcategory->id)->get();
		if($subcategoryRate->count() != 0){
			$precalculation = 0;
			foreach ($subcategoryRate as $temp) {
					$precalculation = $precalculation + $temp->rate;
			}
			$subcategory->rate = round( $precalculation / $subcategoryRate->count() );
		}
		//Calculate Average Rate For Product
		

		$productRate = Rate::select('rate')->where('product_id' , '=',$product->id)->get();
		if($productRate->count() != 0){
			$precalculation =0 ;
			foreach ($productRate as $temp) {
					$precalculation = $precalculation + $temp->rate;
			}
			$product->rate = round( $precalculation / $productRate->count() );
		}
		// Calculate Average Rate For Simiproducts
	//	$simiproducts = array_diff($simiproducts, [$product]);
		foreach ($simiproducts as $simi) {

			$simiRate = Rate::select('rate')->where('product_id' , '=', $simi->id)->get();
			if($simiRate->count() != 0 ){
				$precalculation = 0;
				foreach($simiRate as $temp){
					$precalculation = $precalculation + $temp->rate;
				}
				$simi->rate = round( $precalculation / $simiRate->count());
			//	echo $simi->id."   ";
			}
		}
		//die();
		return view('client.pages.item_view')->withProduct($product)->withCategory($category)->withSubcategory($subcategory)->withSimiProducts($simiproducts)->withComments($comments);	

	}


	public function rate(Request $request){
		$userId = Auth::id();

		$type = $request->input('type') == "subategory" ? 2 : 1 ;
		$id   = $request->input('id');
		$rate = $request->input('rate');
		//dd($type);
		$update = Rate::updateOrCreate(
			['type' => $type , 'user_id'=>$userId ,$type == 1 ?'product_id' :'subcategory_id'  => $id ],  
	  		['rate' => $rate,'type' => $type , 'user_id'=>$userId ,$type == 1 ?'product_id' :'subcategory_id'  => $id ]
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