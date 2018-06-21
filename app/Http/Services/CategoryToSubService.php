<?php 

namespace App\Http\Services; 

use App\Category;
use App\Subcategory;
use App\Tags;
use Session;
use Illuminate\Support\Facades\DB;
class CategoryToSubService {

	public static function loadSubsFromCategories($filter,$id)
	{
		$index = $filter ? $filter['pageIndex'] : 0 ; 

		$subcategory = Subcategory::select(['id','arabic','english','german','kurdi','turky','category_id']);
		$subcategory->where('category_id' ,'=',$id);

//		if (!empty($filter['category_id']))
//		{	
//			$subcategory = DB::table('subcategory')->join('category',null,null,null)->where('category.english' ,'like',$filter['category_id'])->select(['subcategory.id','subcategory.arabic','subcategory.english','subcategory.german','subcategory.kurdi','subcategory.turky','category.english']);

			//Need a Change !
//			$subcategory->where('category_id' ,'=',$filter['category_id']);
//		}
		if (!empty($filter['id']))
		{
			$subcategory->where('id' ,'=', $filter['id']);
		}
		if (!empty($filter['arabic']))
		{
			$subcategory->where('arabic' ,'like','%'.$filter['arabic']. '%');
		} 		
		if (!empty($filter['english']))
		{
			$subcategory->where('english','like','%'.$filter['english'].'%');
		} 
		if (!empty($filter['german']))
		{
			$subcategory->where('german' ,'like','%'.$filter[ 'german'].'%');
		} 
		if (!empty($filter['turky']))
		{
			$subcategory->where('turky'  ,'like','%'.$filter[ 'turky' ].'%');
		} 
		if (!empty($filter['kurdi']))
		{
			$subcategory->where('kurdi'  ,'like','%'.$filter[ 'kurdi' ].'%');
		} 

	
		$subcategory->orderBy('id','desc');
		$result['total'] = $subcategory->count();

		$skip = ($index == 1) ? 0 : ($index-1)*10 ;
		$result['data']=$subcategory->take(10)->skip($skip)->get();
		foreach ($result['data'] as $p) {	
			$temp = Category::find($p->category_id);

			if (isset($temp))
				$p->category_id = "<b>".$temp->english."</b>";
			else 
				$p->category_id = $p->category_id . " <i><small>(Deleted)</small></i>";
		}			

		return $result;
	}

	public static function deleteSubcategory($id){
		Tags::where('subcategory_id' , '=', $id)->delete();
		Subcategory::where('id','=',$id)->delete();
	}

	public static function updateSubategory($categoryRequest, $id)
	{
		$subcategory = Subcategory::find($id);

		$subcategory->arabic  = $categoryRequest->arabic;
		$subcategory->english = $categoryRequest->english;
		$subcategory->german  = $categoryRequest->german;
		$subcategory->turky   = $categoryRequest->turky;
		$subcategory->kurdi   = $categoryRequest->kurdi;


        if($categoryRequest->hasFile('image'))
            $subcategory->image_id = ImageService::saveImage($categoryRequest->file('image'));


        if($categoryRequest->hasFile('image_id2'))
            $subcategory->image_id2 = ImageService::saveImage($categoryRequest->file('image_id2'));


		$subcategory->save();
	
		Session::flash('success', 'Updated Successfuly!');

		return redirect(route('categorytosub.index', $subcategory->category_id));	
	}

}


