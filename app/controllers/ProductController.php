<?php

class ProductController extends BaseController{

	public function getAddNewProduct(){
		return View::make('partials.add_new_product');
	}
	public function postAddNewProduct(){
		$barcode = Input::get("barcode");
		$quantity = Input::get("quantity");

		$category = Input::get("category");
		$supplier = Input::get("supplier");
		$purchase_price = Input::get("purchase_price");
		$sell_price = Input::get("sell_price");

		for($i=0; $i<$quantity; $i++){

				DB::table('products')->insert(
   			 		array(
			   			 	'barcode'			=> $barcode+$i, 
			   			 	'category'			=> $category,
			   			 	'suppllier'			=> $supplier,
			   			 	'purchase_price'	=> $purchase_price,
			   			 	'sell_price' 		=> $sell_price
   			 			)
				);
		}
		$old =  DB::table('categories')->select('quantity')
		->where('name', '=', $category)->first();

		DB::table('categories')->where('name', $category)
               ->update(array('quantity' => $old->quantity+$quantity));

		return Redirect::route('getAddNewProduct')->with('msg', 'Products have been added successfully');
	}

	public function getSearchProduct(){
		return View::make('partials.search_product');
	}


}