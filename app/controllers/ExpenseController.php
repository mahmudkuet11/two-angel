<?php

class ProductController extends BaseController{

	public function getAddNewProduct(){
		return View::make('partials.add_new_product');
	}
	public function postAddNewProduct(){
		$barcode = Input::get("name");
		$category = Input::get("note");
		$manufacturer = Input::get("amount");
	}

}