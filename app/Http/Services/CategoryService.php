<?php 

namespace App\Http\Services; 

use App\Category;
use App\Subcategory;
use Session;

class CategoryService {
	public function loadHomeSubcategory($filter){
//			Home Code... 
	}

	public static function loadCategories($filter)
	{
		$index = $filter ? $filter['pageIndex'] : 0 ; 

		$category = Category::select(['id','arabic','english','german','kurdi','turky']);

		if (!empty($filter['id']))
		{
			$category->where('id' ,'=', $filter['id']);
		} 
		if (!empty($filter['arabic']))
		{
			$category->where('arabic' ,'like','%'.$filter['arabic']. '%');
		} 		
		if (!empty($filter['english']))
		{
			$category->where('english','like','%'.$filter['english'].'%');
		} 
		if (!empty($filter['german']))
		{
			$category->where('german' ,'like','%'.$filter[ 'german'].'%');
		} 
		if (!empty($filter['turky']))
		{
			$category->where('turky'  ,'like','%'.$filter[ 'turky' ].'%');
		} 
		if (!empty($filter['kurdi']))
		{
			$category->where('kurdi'  ,'like','%'.$filter[ 'kurdi' ].'%');
		} 

		$category->orderBy('id','desc');
		$result['total'] = $category->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$category->take(10)->skip($skip)->get();
		return $result;
	}

	public function loadName($name){
		return Category::find($name);
	}

	public static function deleteCategory($id){
		return Category::where('id','=',$id)->delete();
	}

	public static function createUpdateCategory($categoryRequest, $id){
		$category = Category::find($id);
		$category->arabic = $categoryRequest->arabic;
		$category->english= $categoryRequest->english;
		$category->german = $categoryRequest->german;
		$category->turky  = $categoryRequest->turky;
		$category->kurdi  = $categoryRequest->kurdi;
		$category->save();
		Session::flash('success', 'Updated Successfuly!');

		return redirect(route('category.index'));	
	}

}


