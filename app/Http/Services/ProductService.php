<?php 

namespace App\Http\Services; 

use App\Product;
use App\Category;
use App\Subcategory;
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

		foreach ($result['data'] as $p) {	
			$temp1 = Category::find($p->category_id);
			$temp2 = Subcategory::find($p->subcategory_id);
			$p->price = $p->price . " €";

			if (isset($temp1))
				$p->category_id = "<b>".$temp1->english."</b>";
			else 
				$p->category_id = $p->category_id . " <i><small>(Deleted)</small></i>";
			

			if (isset($temp2))
				$p->subcategory_id = "<b>".$temp2->english."</b>";
			else 
				$p->subcategory_id = $p->subcategory_id . " <i><small>(Deleted)</small></i>";

		}
		
		return $result;
	}
   		// Load From Category 
	public static function productDataByCategory($filter,$id)
	{
		$index = $filter ? $filter['pageIndex'] : 0 ;
		$product = Product::select(['id','arabic','english','qty','category_id','subcategory_id','price','point']);
		$product->where('category_id' , '=', $id);
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

		foreach ($result['data'] as $p) {	
			$temp1 = Category::find($p->category_id);
			$temp2 = Subcategory::find($p->subcategory_id);
			$p->price = $p->price . " €";

			if (isset($temp1))
				$p->category_id = "<b>".$temp1->english."</b>";
			else 
				$p->category_id = $p->category_id . " <i><small>(Deleted)</small></i>";
			

			if (isset($temp2))
				$p->subcategory_id = "<b>".$temp2->english."</b>";
			else 
				$p->subcategory_id = $p->subcategory_id . " <i><small>(Deleted)</small></i>";

		}
		
		return $result;
	}

		// Load By Subcategory
	public static function productDataBySubcategory($filter,$id)
	{
		$index = $filter ? $filter['pageIndex'] : 0 ;
		$product = Product::select(['id','arabic','english','qty','category_id','subcategory_id','price','point']);
		$product->where('subcategory_id' , '=', $id);
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
			//Need a Change !
			$product->where('category_id','=',$filter[ 'category_id' ]);
		} 
		if (!empty($filter['subcategory_id']))
		{
			
			//Need a Change !
			$product->where('subcategory_id','=',$filter['subcategory_id']);
		}
		
		$product->orderBy('id','desc');
		$result['total'] = $product->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$product->take(10)->skip($skip)->get();

		foreach ($result['data'] as $p) {	
			$temp1 = Category::find($p->category_id);
			$temp2 = Subcategory::find($p->subcategory_id);
			$p->price = $p->price . " €";

			if (isset($temp1))
				$p->category_id = "<b>".$temp1->english."</b>";
			else 
				$p->category_id = $p->category_id . " <i><small>(Deleted)</small></i>";
			

			if (isset($temp2))
				$p->subcategory_id = "<b>".$temp2->english."</b>";
			else 
				$p->subcategory_id = $p->subcategory_id . " <i><small>(Deleted)</small></i>";

		}
		
		return $result;
	}



	public static function deleteProduct($id){
		return Product::where('id','=',$id)->delete();
	}

	public static function updateProduct($request, $id,$redirect){
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
		if ($redirect == 1 )
			return redirect(route('product.index'));	
		if ($redirect == 2 )
			return redirect(route('productbycategory.index' , $product->category_id) );
		if ($redirect == 3 )
			return redirect(route('productbysubcategory.index' , $product->subcategory_id));
	}





}


