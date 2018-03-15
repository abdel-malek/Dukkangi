<?php 

namespace App\Http\Services; 

use App\Category;
use App\Subcategory;
use Session;

class SubcategoryService {
	public function loadHomeCategory($filter){
//			Home Code... 
	}

	public static function loadSubcategories($filter)
	{
		$index = $filter ? $filter['pageIndex'] : 0 ; 

		$subcategory = Subcategory::select(['id','arabic','english','german','kurdi','turky','category_id']);

		if (!empty($filter['id']))
		{
			$subcategory->where('id' ,'=' , $filter['id']);
		} 
		if (!empty($filter['arabic']))
		{
			$subcategory->where('arabic' ,'like','%'.$filter['arabic'] .'%');
		} 		
		if (!empty($filter['english']))
		{
			$subcategory->where('english','like','%'.$filter['english'].'%');
		} 
		if (!empty($filter['german']))
		{
			$subcategory->where('german' ,'like','%'.$filter['german'] .'%');
		} 
		if (!empty($filter['turky']))
		{
			$subcategory->where( 'turky' ,'like','%'.$filter['turky']  .'%');
		} 
		if (!empty($filter['kurdi']))
		{
			$subcategory->where( 'kurdi' ,'like','%'.$filter['kurdi']  .'%');
		}
		if (!empty($filter['category_id']))
		{
			
			//Need a Change !
			$subcategory->where('category_id' ,'=',$filter['category_id']);
		}
		
		$subcategory->orderBy('id','desc');
		$result['total'] = $subcategory->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$subcategory->take(10)->skip($skip)->get();

		foreach ($result['data'] as $p) {	
			$temp = Category::find($p->category_id);

			if (isset($temp))
				$p->category_id = "<b><u><a href='".route('categorytosub.index',$p->category_id)."'>" .$temp->english."</u></a></b>";
			else 
				$p->category_id = $p->category_id . " <i><small>(Deleted)</small></i>";	
		}


		return $result;
	}

	public static function deleteCategory($id)
	{
		return Subcategory::where('id','=',$id)->delete();
	}

	public static function updateSubategory($categoryRequest, $id)
	{
		$subcategory = Subcategory::find($id);

		$subcategory->arabic  = $categoryRequest->arabic;
		$subcategory->english = $categoryRequest->english;
		$subcategory->german  = $categoryRequest->german;
		$subcategory->turky   = $categoryRequest->turky;
		$subcategory->kurdi   = $categoryRequest->kurdi;

		$subcategory->save();
	
		Session::flash('success', 'Updated Successfuly!');

		return redirect(route('subcategory.index' ));	
	}

}


