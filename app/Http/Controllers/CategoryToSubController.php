<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Subcategory;
use Session;

use App\Http\Services\CategoryToSubService;



class  CategoryToSubController extends Controller
{
	//protected static $current_id;
	
    public function __construct()
    {
      $this->middleware('auth');
    }
	public function index($id)
	{	
		//self::$current_id= $id;
		return view('admin/categorytosub.index')->withId($id);
	}
	
	public static function subcategoryData(Request $request,$id)
	{
		$filter = $request->input('filter');
		return CategoryToSubService::loadSubsFromCategories($filter,$id);		
	}

	public function edit($id)
	{
		$category = Category::all();
		$subcategory = Subcategory::find($id);
		return view('admin/categorytosub/edit')->withSubcategory($subcategory)->withCategories($category);
	}

	public function update(Request $request){
		 $this->validate($request, [
		 	'arabic' =>'max:255|min:2',
		 	'kurdi'  =>'max:255|min:2',
		 	'turky'  =>'max:255|min:2',
		 	'german' =>'max:255|min:2',
		 	'english'=>'max:255|min:2'
		 ]);
		 return CategoryToSubService::updateSubategory($request, $request->id);
	}
	
	public function create($id){
		return view('admin/categorytosub/create')->withid($id);
	}
	
	public function store(Request $request)
	{
		//echo"alsdklaksjlkasjdklajsdlkasjdklasj";
		$category = new Subcategory();
 		$this->validate($request, [
			'arabic' =>'max:255|min:2',
			'kurdi'  =>'max:255|min:2',
			'turky'  =>'max:255|min:2',
		 	'german' =>'max:255|min:2',
		 	'english'=>'max:255|min:2'
		]);
		$category->arabic	   = $request->arabic;
		$category->kurdi   	   = $request->kurdi;
		$category->turky   	   = $request->turky;
		$category->german 	   = $request->german;
		$category->english	   = $request->english;
		$category->category_id = $request->category_id;

		$category->save();
		
		Session::flash('success', 'Added Successfuly!');

		return redirect(route('categorytosub.index' , $category->category_id));
	}
	
	public  function destroy($id){
		return CategoryToSubService::deleteSubcategory($id);
	}
}