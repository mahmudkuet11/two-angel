<?php

/*
*----- Unauthinticated Group
*/
Route::group(array('before'	=>	'logout_required'), function(){
	
	/*
	*	----- Account controller routes
	*/
	Route::get('/login', array(
			'as'	=>	'getLogin',
			'uses'	=>	'AccountController@getLogin'
		));
	Route::post('/login', array(
			'as'	=>	'postLogin',
			'uses'	=>	'AccountController@postLogin'
		));
});




/*
*------ Authinticated Group
*/
Route::group(array('before'	=>	'login_required'), function(){

	/*
	*	----- Account controller routes
	*/
	Route::get('/logout', array(
		'as'	=>	'getLogout',
		'uses'	=>	'AccountController@getLogout'
	));
	
	/*
	*	----- Home controller routes
	*/
	Route::get('/', array(
		'as'	=>	'getHome',
		'uses'	=>	'HomeController@getHome'
	));

	/*
	*	----- Product controller routes
	*/
	Route::get('/product/add', array(
		'as'	=>	'getAddNewProduct',
		'uses'	=>	'ProductController@getAddNewProduct'
	));
	Route::post('/product/add', array(
		'as'	=>	'postAddNewProduct',
		'uses'	=>	'ProductController@postAddNewProduct'
	));

	/*
	*	----- Category Controller Routes
	*/
	Route::get('/category/add', array(
			'as'	=>	'getAddNewCategory',
			'uses'	=>	'CategoryController@getAddNewCategory'
		));
	Route::post('/category/add', array(
			'as'	=>	'postAddNewCategory',
			'uses'	=>	'CategoryController@postAddNewCategory'
		));

	/*
	*	----- Supplier Controller Routes
	*/
	Route::get('/supplier/add', array(
			'as'	=>	'getAddNewSupplier',
			'uses'	=>	'SupplierController@getAddNewSupplier'
		));
	Route::post('/supplier/add', array(
			'as'	=>	'postAddNewSupplier',
			'uses'	=>	'SupplierController@postAddNewSupplier'
		));
});
/*
* -------------------Testting Suit----------
*/
Route::get('/test', function(){
		return Redirect::route("/test/product");
});
Route::get('/test/product', array(
		'as'	=>	'/test/product',
		'uses'	=>	'TestController@getAddNewProduct'
	));
Route::post('/test/product', array(
		'as'	=>	'/test/product',
		'uses'	=>	'TestController@postAddNewProduct'
	));
Route::get('/test/voucher', array(
		'as'	=>	'/test/voucher',
		'uses'	=>	'TestController@getAddNewVoucher'
	));
Route::post('/test/voucher', array(
		'as'	=>	'/test/voucher',
		'uses'	=>	'TestController@postAddNewVoucher'
	));
Route::get('/test/expense', array(
		'as'	=>	'/test/expense',
		'uses'	=>	'TestController@getAddNewExpense'
	));
Route::post('/test/expense', array(
		'as'	=>	'/test/expense',
		'uses'	=>	'TestController@postAddNewExpense'
	));
Route::get('/test/order', array(
		'as'	=>	'/test/order',
		'uses'	=>	'TestController@getAddNewOrder'
	));
Route::post('/test/order', array(
		'as'	=>	'/test/order',
		'uses'	=>	'TestController@postAddNewOrder'
	));
Route::get('/test/supplier', array(
		'as'	=>	'/test/supplier',
		'uses'	=>	'TestController@getAddNewSupplier'
	));
Route::post('/test/supplier', array(
		'as'	=>	'/test/supplier',
		'uses'	=>	'TestController@postAddNewSupplier'
	));

Route::get('/test/category', array(
		'as'	=>	'/test/category',
		'uses'	=>	'TestController@getAddNewCategory'
	));
Route::post('/test/category', array(
		'as'	=>	'/test/category',
		'uses'	=>	'TestController@postAddNewCategory'
	));



