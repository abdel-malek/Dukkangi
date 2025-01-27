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

		$subcategory->category_id= $categoryRequest->category_id;
        

        if ($categoryRequest->hasFile('image')) {
            $subcategory->image_id = ImageService::saveImage($categoryRequest->file('image'));
        }


        if($categoryRequest->hasFile('image_id2'))
            $subcategory->image_id2 = ImageService::saveImage($categoryRequest->file('image_id2'));


		$subcategory->save();
	
		Session::flash('success', 'Updated Successfuly!');

		return redirect(route('subcategory.index' ));	
	}

  public static function autoComplete($request){
        $subcategories = Subcategory::select('id','english')->where('english' , 'like' , '%'.$request->text.'%')->limit(6)->get();
            //Arabic
        $comp = Subcategory::select('id','arabic','english')->where('arabic' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->arabic;
            self::addNoRedundancy($subcategories,$c);
        }   
            //German
        $comp = Subcategory::select('id','german','english')->where('german' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->german;
            self::addNoRedundancy($subcategories,$c);
        }       
    
            //Turkish
        $comp = Subcategory::select('id','turky','english')->where('turky' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->turky;
            self::addNoRedundancy($subcategories,$c);
        }
            //Kurdi
        $comp = Subcategory::select('id','kurdi','english')->where('kurdi' , 'like' , '%'.$request->text.'%')->limit(6)->get();
        foreach ($comp as $c) {
            $c->english = $c->kurdi;
            self::addNoRedundancy($subcategories,$c);        
        }
        foreach ($subcategories as $p) {
                $p->type = 'sub';
        }   
        return $subcategories;
    }
    private static function addNoRedundancy($arr , $obj){
        foreach ($arr as $a) {
            if($a->id == $obj->id )
                return ;
        }
        $arr->push($obj);
        return ;
    }
}


