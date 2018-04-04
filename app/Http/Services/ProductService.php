<?php

namespace App\Http\Services;

use App\Product;
use App\Category;
use App\Subcategory;
use Session;

class ProductService {

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
		//if (!empty($filter['category_id']))
		//{
		//	$product->where('category_id','=',$filter[ 'category_id' ]);
		//}
		//if (!empty($filter['subcategory_id']))
		//{
		//	$product->where('subcategory_id','=',$filter['subcategory_id']);
		//}

		$product->orderBy('id','desc');
		$result['total'] = $product->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$product->take(10)->skip($skip)->get();

		foreach ($result['data'] as $p) {
			$temp1 = Category::find($p->category_id);
			$temp2 = Subcategory::find($p->subcategory_id);
			$p->price = $p->price . " €";

			if (isset($temp1))
				$p->category_id = "<b><u><a href='".route('category.index')."'>".$temp1->english."</a></u></b>";
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
		$product->brand_id = $request->brand_id;
		//
		// $product->option1 	     = isset($request->option1) ?$request->option1 : 0;
		// $product->option2		 = isset($request->option2) ?$request->option2 : 0;
		// $product->option3		 = isset($request->option3) ?$request->option3 : 0;
		// $product->option4		 = isset($request->option4) ?$request->option4 : 0;

		$product->active 	     = isset($request->active) ?$request->active : 0;

		$product->section1_english = $request->section1_english;
		$product->section1_german  = $request->section1_german;
		$product->section1_arabic  = $request->section1_arabic;
		$product->section1_kurdi   = $request->section1_kurdi;
		$product->section1_turky   = $request->section1_turky;

		$product->section2_english = $request->section2_english;
		$product->section2_german  = $request->section2_german;
		$product->section2_arabic  = $request->section2_arabic;
		$product->section2_kurdi   = $request->section2_kurdi;
		$product->section2_turky   = $request->section2_turky;


		$product->section3_english = $request->section3_english;
		$product->section3_german  = $request->section3_german;
		$product->section3_arabic  = $request->section3_arabic;
		$product->section3_kurdi   = $request->section3_kurdi;

		$product->section3_turky   = $request->section3_turky;


		$product->barcode   = $request->input('barcode');
		$product->custom_id   = $request->input('custom_id');
		$product->tax_fees   = $request->input('tax_fees');
		
		if($request->hasFile('image'))
				$product->image_id = ImageService::saveImage($request->file('image'));

		if($request->hasFile('image_path_2'))
				$product->image_id = ImageService::saveImage($request->file('image_path_2'));

		if($request->hasFile('image_path_3'))
				$product->image_id = ImageService::saveImage($request->file('image_path_3'));

		if($request->hasFile('image_path_4'))
				$product->image_id = ImageService::saveImage($request->file('image_path_4'));


        if (isset($request->point)) {
            $product->point     = $request->point;
        } else {
            $product->point     = '0';
        }
		$product->save();


		Session::flash('success', 'Updated Successfuly!');
		if ($redirect == 1 )
			return redirect(route('product.index'));
		if ($redirect == 2 )
			return redirect(route('productbycategory.index' , $product->category_id) );
		if ($redirect == 3 )
			return redirect(route('productbysubcategory.index' , $product->subcategory_id));
	}

	public static function loadById($id){
		return Product::where('id','=',$id)->get()->first();
	}





}
