<?php

class CategoryController extends BaseController{
	
	public function getAddNewCategory(){
		return View::make('partials.add_new_category');
	}
	public function postAddNewCategory(){
		$barcode = Input::post("name");
		$supplier = Input::post("manufacturer");
		//$category = Input::post("quantity");
		$manufacturer = Input::post("warning_quantity");
	}
}