<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
	//CATEGORIES
Route::get('/categories',			 	 ['uses' => 'CategoryController@index'         	 	 ,'as' => 'category.index' 	     ]);
Route::post('/categories',			 	 ['uses' => 'CategoryController@categoryData'  	 	 ,'as' => 'category.data'  	     ]);		
Route::get('/categories/edit/{id}',  	 ['uses' => 'CategoryController@edit' 		 		 ,'as' => 'category.edit'        ]);
Route::put('/categories/{id}',		 	 ['uses' => 'CategoryController@update'			 	 ,'as' => 'category.update'      ]);
Route::post('/categories/delete/{id}',	 ['uses' => 'CategoryController@destroy'			 ,'as' => 'category.delete'      ]);
Route::get('/categories/create',	 	 ['uses' => 'CategoryController@create'			 	 ,'as' => 'category.create'      ]);
Route::post('/categories/store',	  	 ['uses' => 'CategoryController@store'				 ,'as' => 'category.store'       ]);
	//SUBCATEGORIES
Route::get('/subcategories', 			 ['uses' => 'SubcategoryController@index'			 ,'as' => 'subcategory.index'    ]);
Route::post('/subcategories' ,			 ['uses' => 'SubcategoryController@subcategoryData'  ,'as' => 'subcategory.data'     ]);
Route::post('/subcategories/delete/{id}',['uses' => 'SubcategoryController@destroy'		 	 ,'as' => 'subcategory.destroy'  ]);
Route::get('/subcategories/edit/{id}',	 ['uses' => 'SubcategoryController@edit' 			 ,'as' => 'subcategory.edit'     ]);
Route::put('/subcategories/update',		 ['uses' => 'SubcategoryController@update'			 ,'as' => 'subcategory.update'   ]);
Route::get('/subcategories/create', 	 ['uses' => 'SubcategoryController@create' 		 	 ,'as' => 'subcategory.create'   ]);
Route::post('/subcategories/store',		 ['uses' => 'SubcategoryController@store' 			 ,'as' => 'subcategory.store'    ]);
	//SUBCATEGORIES FROM CATEGORIES
Route::get('/categorytosub/{id}',		 ['uses' => 'CategoryToSubController@index'		     ,'as' => 'categorytosub.index'  ]);
Route::post('/categorytosub/{id}',		 ['uses' => 'CategoryToSubController@subcategoryData','as' => 'categorytosub.data'   ]);
Route::get('/categorytosub/edit/{id}',	 ['uses' => 'CategoryToSubController@edit' 			 ,'as' => 'categorytosub.edit'   ]);
Route::put('/categorytosub/update/{id}', ['uses' => 'CategoryToSubController@update'	 	 ,'as' => 'categorytosub.update' ]);
Route::post('/categorytosub/delete/{id}',['uses' => 'CategoryToSubController@destroy'	 	 ,'as' => 'categorytosub.destroy']);
Route::get('/categorytosub/create/{id}', ['uses' => 'CategoryToSubController@create' 		 ,'as' => 'categorytosub.create' ]);
Route::post('/subcategory/store',		 ['uses' => 'CategoryToSubController@store' 		 ,'as' => 'categorytosub.store'  ]);

