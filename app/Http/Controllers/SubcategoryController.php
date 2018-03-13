<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use App\Subcategory;
use Session;

use App\Http\Services\CategoryService;
use App\Http\Services\SubcategoryService;


class SubcategoryController extends Controller
{

	public function index()
	{
		return view('admin/subcategories.index');
	}
	public function subcategoryData(Request $request)
	{
		$filter = $request->input('filter');
		return SubcategoryService::loadSubcategories($filter);		
	}


	public function edit($id)
	{
		$subcategory = Subcategory::find($id);
		$categories = Category::all();
		return view('admin/subcategories/edit')->withSubcategory($subcategory)->withCategories($categories);
	}
	public function update(Request $request)
	{
		$this->validate($request, [
		 	'arabic' =>'max:255|min:2',
		 	'kurdi'  =>'max:255|min:2',
		 	'turky'  =>'max:255|min:2',
		 	'german' =>'max:255|min:2',
		 	'english'=>'max:255|min:2'
		]);
		return SubcategoryService::updateSubategory($request, $request->id);
	}
	public function create()
	{
		$categories = Category::all();
		return view('admin/subcategories/create')->withCategories($categories);
	}
	public function store(Request $request)
	{
		$category = new Subcategory();
 		$this->validate($request, [
			'arabic' =>'max:255|min:2',
			'kurdi'  =>'max:255|min:2',
			'turky'  =>'max:255|min:2',
		 	'german' =>'max:255|min:2',
		 	'english'=>'max:255|min:2'
		]);
		
		$category->arabic  = $request->arabic;
		$category->kurdi   = $request->kurdi;
		$category->turky   = $request->turky;
		$category->german  = $request->german;
		$category->english = $request->english;
		$category->category_id= $request->category_id;

		$category->save();
		
		Session::flash('success', 'Added Successfuly!');
		
		return redirect(route('subcategory.index'));
	}
	public  function destroy($id)
	{
		return SubcategoryService::deleteCategory($id);
	}
}
