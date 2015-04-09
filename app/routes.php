<?php

/*
*----- Unauthinticated Group
*/
Route::get('/login', array(
		'as'	=>	'getLogin',
		'uses'	=>	'AccountController@getLogin'
	));


/*
*------ Authinticated Group
*/
Route::group(array('before'	=>	'login_required'), function(){

	Route::get('/', array(
		'as'	=>	'getHome',
		'uses'	=>	'HomeController@getHome'
	));

	Route::get('/product/add', array(
		'as'	=>	'getAddNewProduct',
		'uses'	=>	'ProductController@getAddNewProduct'
	));
});


