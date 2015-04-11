<?php

class ProductController extends BaseController{

	public function getAddNewProduct(){
		return View::make('partials.add_new_product');
	}
	public function postAddNewProduct(){
		$barcode = Input::post("barcode");
		$category = Input::post("category");
		$manufacturer = Input::post("manufacturer");
		$supplier = Input::post("suppllier");
		$purchase_price = Input::post("purchase_price");
		$sell_price = Input::post("sell_price");
		$date = Input::post("date");
	}

}