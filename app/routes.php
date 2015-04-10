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


	Route::get('/category/add', array(
			'as'	=>	'getAddNewCategory',
			'uses'	=>	'CategoryController@getAddNewCategory'
		));

	Route::get('/supplier/add', array(
			'as'	=>	'getAddNewSupplier',
			'uses'	=>	'SupplierController@getAddNewSupplier'
		));
});


