<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Category;
use Session;

use App\Http\Services\CategoryService;



class CategoryController extends Controller
{

	public function index()
	{
		return view('categories.index');
	}
	
	public function categoryData(Request $request)
	{
		$filter = $request->input('filter');
		return CategoryService::loadCategories($filter);		
	}

	public function edit($id)
	{
		$category = Category::find($id);
		return view('categories/edit')->withCategory($category);
	}
	public function update(Request $request){
		 $this->validate($request, [
		 	'arabic' =>'max:255|min:2',
		 	'kurdi'  =>'max:255|min:2',
		 	'turky'  =>'max:255|min:2',
		 	'german' =>'max:255|min:2',
		 	'english'=>'max:255|min:2'
		 ]);
		 return CategoryService::createUpdateCategory($request, $request->id);
	}
	public function create(){
		return view('categories/create');
	}
	public function store(Request $request){
		$category = new Category();
 		$this->validate($request, [
		 	'arabic' =>'max:255|min:2',
		 	'kurdi'  =>'max:255|min:2',
		 	'turky'  =>'max:255|min:2',
		 	'german' =>'max:255|min:2',
		 	'english'=>'max:255|min:2'
		 ]);
		$category->id = $request->id;
		$category->arabic = $request->arabic;
		$category->kurdi = $request->kurdi;
		$category->turky = $request->turky;
		$category->german = $request->german;
		$category->english = $request->english;
		
		$category->save();
		Session::flash('success', 'Added Successfuly!');
		
		return redirect(route('category.index'));
	}
	public  function destroy($id){
		return CategoryService::deleteCategory($id);
	}
}