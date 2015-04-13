<?php

class ProductController extends BaseController{

	public function getAddNewProduct(){
		return View::make('partials.add_new_product');
	}
	public function postAddNewProduct(){
		$barcode = Input::get("barcode");
		$category = Input::get("category");
		$supplier = Input::get("suppllier");
		$purchase_price = Input::get("purchase_price");
		$sell_price = Input::get("sell_price");

		DB::table('products')->insert(
   			 array(
   			 	'barcode'			=> $barcode, 
   			 	'category'			=> $category,
   			 	'suppllier'			=> $supplier,
   			 	'purchase_price'	=> $purchase_price,
   			 	'sell_price' 		=> $sell_price
   			 	)
		);
		return Redirect::route("test");
	}

}