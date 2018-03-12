<?php 

namespace App\Http\Services; 

use App\Product;
use Session;

class ProductService {
	public function loadHomeProduct($filter){
//			Home Code... 
	}

	public static function loadProduct($filter)
	{
		$index = $filter ? $filter['pageIndex'] : 0 ;
		$product = Product::select(['id','arabic','english','qty','category_id','subcategory_id','price','point']);

		if (!empty($filter['id']))
		{
			$product->where('id' ,'=', $filter['id']);
		} 
		if (!empty($filter['arabic']))
		{
			$product->where('arabic' ,'like','%'.$filter['arabic']. '%');
		} 		
		if (!empty($filter['english']))
		{
			$product->where('english','like','%'.$filter['english'].'%');
		} 
		if (!empty($filter['qty']))
		{
			$product->where('qty' , '=', $filter['qty']);
		} 
		if (!empty($filter['category_id']))
		{
			$product->where('category_id','=',$filter[ 'category_id' ]);
		} 
		if (!empty($filter['subcategory_id']))
		{
			$product->where('subcategory_id','=',$filter['subcategory_id']);
		} 

		$product->orderBy('id','desc');
		$result['total'] = $product->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$product->take(10)->skip($skip)->get();
		return $result;
	}

	public static function deleteProduct($id){
		return Product::where('id','=',$id)->delete();
	}

	public static function updateProduct($request, $id){
		$product = Product::find($id);

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


		Session::flash('success', 'Updated Successfuly!');

		return redirect(route('product.index'));	
	}

}


