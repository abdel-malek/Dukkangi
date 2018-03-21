<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Category;
use App\Subcategory;
use App\Product;
use App\User;
use Redirect;
use Session;
use App;

class PageController extends Controller
{

	public function index(){
		$lang = session('lang');
		App::setLocale($lang);
		$allcategories = Category::all();
		$categoriesname = [];
		$categoriesid = [];
		if ($lang == "ar"){
			$i= 0;
			foreach ($allcategories as $category) {
				$categoriesname[$i] = $category->arabic;
				$categoriesid[$i] = $category->id;
				$i++;
			}
		}
		if ($lang == "en"){
			$i= 0;
			foreach ($allcategories as $category) {
				$categoriesname[$i] = $category->english;
				$categoriesid[$i]   = $category->id;
				$i++;
			}
		}
		if ($lang == "tr"){
			$i= 0;
			foreach ($allcategories as $category) {
				$categoriesname[$i] = $category->turky;
				$categoriesid[$i] = $category->id;
				$i++;
			}
		}
		if ($lang == "ku"){
			$i= 0;
			foreach ($allcategories as $category) {
				$categoriesname[$i] = $category->kurdi;
				$categoriesid[$i] = $category->id;
				$i++;
			}
		}
		if ($lang == "de"){
			$i= 0;
			foreach ($allcategories as $category) {
				$categoriesname[$i] = $category->german;
				$categoriesid[$i] = $category->id;
				$i++;
			}
		}
		return view('client.pages.home')->withCategories($categoriesname)->withIds($categoriesid);	
	}
	public function getCategoryPage(){

		$lang = session('lang');
		App::setLocale($lang);
		$categories = Category::all();
		$subcategories = DB::table('subcategory')->orderBy('category_id','asc')->get();
		$products = DB::table('product')->orderBy('category_id', 'asc')->get();
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




	public function setLanguage( $lang)
	{
//		App::setLocale((string)$lang);
  		session(['lang' => $lang]);
  		return Redirect::back();
	} 
}