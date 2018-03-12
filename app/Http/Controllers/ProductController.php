<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;
use App\Category;
use App\Subcategory;

use App\Http\Services\ProductService;



class ProductController extends Controller
{

	public function index()
	{
		return view('products.index');
	}
	
	public function productData(Request $request)
	{
		$filter = $request->input('filter');
		return ProductService::loadProduct($filter);		
	}

	public function edit($id)
	{
		$categories = Category::all();
		$subcategories = Subcategory::all();
		$product = Product::find($id);
		return view('products/edit')->withProduct($product)->withCategories($categories)->withSubcategories($subcategories);
	}

	public function update(Request $request){
		$this->validate($request, [
		 	'arabic' =>'max:255|min:2',
		 	'english'=>'max:255|min:2',
		 	'german' =>'max:255|min:2',
		 	'turky'  =>'max:255|min:2',
		 	'kurdi'  =>'max:255|min:2',
		 	'price'  =>'required|between:0,99999.99'
		 ]);
		 return ProductService::updateProduct($request, $request->id);
	}
	public function create(){
		$categories = Category::all();
		$subcategories = Subcategory::all();
		return view('products/create')->withCategories($categories)->withSubcategories($subcategories);
	}
	public function store(Request $request){
		$product = new Product();
 		$this->validate($request, [
		 	'arabic' =>'max:255|min:2',
		 	'english'=>'max:255|min:2',
		 	'german' =>'max:255|min:2',
		 	'turky'  =>'max:255|min:2',
		 	'kurdi'  =>'max:255|min:2',
		 	'price'  =>'required|between:0,99999.99'
		 ]);

		$product->arabic  		 = $request->arabic;
		$product->english 		 = $request->english;
		$product->german  		 = $request->german;
		$product->turky 		 = $request->turky;
		$product->kurdi  		 = $request->kurdi;

		$product->desc_arabic 	 = $request->desc_arabic;
		$product->desc_english 	 = $request->desc_english;
		$product->desc_german 	 = $request->desc_german;
		$product->desc_turky 	 = $request->desc_turky;
		$product->desc_kurdi 	 = $request->desc_kurdi;
		
		$product->qty    		 = $request->qty;
		$product->price 	 	 = $request->price;
		$product->category_id    = $request->category_id;
		$product->subcategory_id = $request->subcategory_id;
		if (isset($request->point)){
			$product->point 	 = $request->point;
		}
		else {
			$product->point = '0';
		}
			//		Unused   "YET" !! 
		$product->option1 = 0;
		$product->option2 = 0;
		$product->option3 = 0;
		$product->option4 = 0;
		$product->image_id= 0;

		$product->save();

		Session::flash('success', 'Added Successfuly!');
		
		return redirect(route('product.index'));
	}
	public  function destroy($id){
		return ProductService::deleteProduct($id);
	}
}