<?php

class ProductController extends BaseController{

	public function getAddNewProduct(){
		return View::make('partials.add_new_product');
	}
	public function postAddNewProduct(){
		$barcode = Input::get("barcode");
		$category = Input::get("category");
		$manufacturer = Input::get("manufacturer");
		$supplier = Input::get("suppllier");
		$purchase_price = Input::get("purchase_price");
		$sell_price = Input::get("sell_price");
		$date = Input::get("date");
	}

}