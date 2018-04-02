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
Route::get('/admin', function(){return view('admin.master');})->name('admin.home')->middleware('auth');
Route::get('/', function(){return view('client.pages.home');});


//Pages Controller
Route::get('/', 'PageController@index')->name('home');
Route::get('/home', 'PageController@index');
Route::get('/category/{id}', 'PageController@getCategoryPage')->name('category');
Route::get('/categorynamefilter/', 'PageController@getCategoryNameFilteredPage')->name('categoryfilter');
Route::get('/subcategoryfilter/{id}' , 'PageController@getCategorySubcategoryFilteredPage')->name('subcategoryfilter');
Route::get('/productview/{id}' , 'PageController@getProductView')->name('product');
Route::post('/rate' , 'PageController@rate');
Route::post('/comment-save' , 'PageController@comment')->name('comment');
Route::get('/buyitem/{id}' ,  'PageController@getBuyItemPage')->name('buyitem');
Route::get('/mycart/', 'CartController@getViewMyCartPage')->name('mycart');
Route::get('/categoryfilter/' , 'PageController@getCategoryFilteredPage')->name('fullfiltercategory');
Route::post('/categoryfilter/' ,'PageController@loadMoreProducts');


   			 //DASHBOARD
    //CATEGORIES
Route::get('/admin/categories', ['uses' => 'CategoryController@index'                 ,'as' => 'category.index'       ]);
Route::post('/admin/categories', ['uses' => 'CategoryController@categoryData'         ,'as' => 'category.data'        ]);
Route::get('/admin/categories/edit/{id}', ['uses' => 'CategoryController@edit'        ,'as' => 'category.edit'        ]);
Route::put('/admin/categories/{id}', ['uses' => 'CategoryController@update'           ,'as' => 'category.update'      ]);
Route::post('/admin/categories/delete/{id}', ['uses' => 'CategoryController@destroy'  ,'as' => 'category.delete'      ]);
Route::get('/admin/categories/create', ['uses' => 'CategoryController@create'         ,'as' => 'category.create'      ]);
Route::post('/admin/categories/store', ['uses' => 'CategoryController@store'          ,'as' => 'category.store'       ]);


// Brand
Route::get('/admin/brand', ['uses' =>'BrandController@brandPage','as' => 'brand.index']);
Route::post('/admin/brand', 'BrandController@brands');
Route::get('/admin/brand/create', ['as' => 'brand.createPage','uses' => 'BrandController@createBrand']);
Route::post('/admin/brand/create', ['as' => 'brand.create', 'uses' => 'BrandController@createBrandInfo']);
Route::get('/admin/brand/edit/{id}', 'BrandController@editBrand');
Route::post('/admin/brand/delete/{id}', 'BrandController@deleteBrand');

    //SUBCATEGORIES
Route::get('/admin/subcategories', ['uses' => 'SubcategoryController@index'             ,'as' => 'subcategory.index'    ]);
Route::post('/admin/subcategories', ['uses' => 'SubcategoryController@subcategoryData'  ,'as' => 'subcategory.data'     ]);
Route::post('/admin/subcategories/delete/{id}', ['uses' => 'SubcategoryController@destroy'             ,'as' => 'subcategory.destroy'  ]);
Route::get('/admin/subcategories/edit/{id}', ['uses' => 'SubcategoryController@edit'             ,'as' => 'subcategory.edit'     ]);
Route::put('/admin/subcategories/update', ['uses' => 'SubcategoryController@update'             ,'as' => 'subcategory.update'   ]);
Route::get('/admin/subcategories/create', ['uses' => 'SubcategoryController@create'             ,'as' => 'subcategory.create'   ]);
Route::post('/admin/subcategories/store', ['uses' => 'SubcategoryController@store'             ,'as' => 'subcategory.store'    ]);
    //SUBCATEGORIES FROM CATEGORIES
Route::get('/admin/categorytosub/{id}', ['uses' => 'CategoryToSubController@index'             ,'as' => 'categorytosub.index'  ]);
Route::post('/admin/categorytosub/{id}', ['uses' => 'CategoryToSubController@subcategoryData','as' => 'categorytosub.data'   ]);
Route::get('/admin/categorytosub/edit/{id}', ['uses' => 'CategoryToSubController@edit'             ,'as' => 'categorytosub.edit'   ]);
Route::put('/admin/categorytosub/update/{id}', ['uses' => 'CategoryToSubController@update'         ,'as' => 'categorytosub.update' ]);
Route::post('/admin/categorytosub/delete/{id}', ['uses' => 'CategoryToSubController@destroy'         ,'as' => 'categorytosub.destroy']);
Route::get('/admin/categorytosub/create/{id}', ['uses' => 'CategoryToSubController@create'         ,'as' => 'categorytosub.create' ]);
Route::post('/admin/subcategory/store', ['uses' => 'CategoryToSubController@store'         ,'as' => 'categorytosub.store'  ]);


    //PRODUCTS
Route::get('/admin/products', ['uses' => 'ProductController@index'                 ,'as' => 'product.index'         ]);
Route::post('/admin/products', ['uses' => 'ProductController@productData'             ,'as' => 'product.data'         ]);
Route::get('/admin/products/create', ['uses' => 'ProductController@create'                 ,'as' => 'product.create'     ]);
Route::post('/admin/products/store', ['uses' => 'ProductController@store'                 ,'as' => 'product.store'         ]);
Route::post('/admin/products/delete/{id}', ['uses' => 'ProductController@destroy'         ,'as' => 'product.delete'         ]);
Route::get('/admin/products/edit/{id}', ['uses' => 'ProductController@edit'                 ,'as' => 'product.edit'         ]);
Route::put('/admin/products/update', ['uses' => 'ProductController@update'                 ,'as' => 'product.update'         ]);
    //PRODUCTS FROM CATEGORIES
Route::get('/admin/categoryproducts/{id}', ['uses' => 'ProductController@indexByCategory'     ,'as' => 'productbycategory.index' ]);
Route::post('/admin/categoryproducts/{id}', ['uses' => 'ProductController@productDataByCategory','as' => 'productbycategory.data'  ]);
Route::get('/admin/categoryproducts/edit/{id}', ['uses' => 'ProductController@editByCategory'         ,'as' => 'productbycategory.edit'  ]);
Route::put('/admin/categoryproducts/update', ['uses' => 'ProductController@updateByCategory'     ,'as' => 'productbycategory.update']);
    //PRODUCTS FROM SUBCATEGORIES
Route::get('/admin/subcategoryproducts/{id}', ['uses'=> 'ProductController@indexBySubcategory'       ,'as' => 'productbysubcategory.index' ]);
Route::post('/admin/subcategoryproducts/{id}', ['uses'=> 'ProductController@productDataBySubcategory','as' => 'productbysubcategory.data'  ]);
Route::get('/admin/subcategoryproducts/edit/{id}', ['uses' =>'ProductController@editBySubcategory'      ,'as' => 'productbysubcategory.edit'  ]);
Route::put('/admin/subcategoryproducts/update', ['uses' => 'ProductController@updateBySubcategory'    ,'as' => 'productbysubcategory.update']);

    //PRODUCT SINGLE VIEW
Route::get('/admin/products/single/{id}', ['uses' => 'ProductController@single'               ,'as' => 'productbysubcategory.single']);

    // USERS
Route::get('/admin/users', ['uses' => 'UserController@index'           , 'as' => 'user.index' ]);
Route::post('/admin/users', ['uses' => 'UserController@loadUsers'     , 'as' => 'user.data'  ]);
Route::post('/admin/users/delete/{id}', ['uses' => 'UserController@destroy'         , 'as' => 'user.delete']);

    //ORDERS
Route::get('/admin/orders', ['uses' => 'OrderController@index'         , 'as' => 'order.index' ]);
Route::post('/admin/orders', ['uses' => 'OrderController@loadOrder'     , 'as' => 'order.data'  ]);

Route::get('/admin/orders/{id}/order-items', ['uses' => 'OrderController@orderItemPage'         , 'as' => 'orderItems.index' ]);
Route::post('/admin/orders/{id}/order-items', ['uses' => 'OrderController@loadOrderItems'     , 'as' => 'orderItems.data'  ]);

    //PAYMENT
Route::get('/admin/payment', ['uses' => 'PaymentController@index'         , 'as' => 'payment.index'  ]);
Route::post('/admin/payment', ['uses' => 'PaymentController@loadPayments' , 'as' => 'payment.data'   ]);
Route::post('/admin/payment/delete/{id}', ['uses' => 'PaymentController@destroy'     , 'as' => 'payment.delete' ]);

    //DASHBOARD END


    //Admin AUTHENTICATION
Route::get('login', ['as' => 'login',  'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => '',  'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::post('password/email', ['as' => 'password.email',  'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset', ['as' => 'password.request',  'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/reset', ['as' => '',  'uses' => 'Auth\ResetPasswordController@reset']);
Route::get('password/reset/{token}', ['as' => 'password.reset',  'uses' => 'Auth\ResetPasswordController@showResetForm']);
Route::get('register', ['as' => 'register' , 'uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('register', ['as' => '','uses' => 'Auth\RegisterController@register']);


	//Language Change
Route::get('/lang/{lang}' , 'PageController@setLanguage');


	//cart
Route::post('/cart/add','CartController@addToCart');
Route::post('/cart/checkout','CartController@checkout');
