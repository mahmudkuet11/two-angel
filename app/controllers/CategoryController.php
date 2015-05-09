<?php

class CategoryController extends BaseController{
	
	public function getAddNewCategory(){
		return View::make('partials.add_new_category');
	}

	public function postAddNewCategory(){
       $barcode = Input::get("barcode");
		$name = Input::get("name");
		$manufacturer = Input::get("manufacturer");
		$warning_quantity = Input::get("warning_quantity");
		$purchase_price = Input::get("purchase_price");
		$sell_price = Input::get("sell_price");
		$unit = Input::get("unit");
		
		DB::table('categories')->insert(
   			 array(
   			 	'name'					=> $name, 
   			 	'manufacturer'			=> $manufacturer,
   			 	'warning_quantity'		=> $warning_quantity,
   			 	'barcode'				=> $barcode,
   			 	'purchase_price'		=> $purchase_price,
   			 	'sell_price'			=> $sell_price,
   			 	'unit'					=>$unit
   			 	)
		);

		return Redirect::route('getAddNewCategory')->with('msg', 'Category has been added successfully');
	}

	public function getLowStockCategory(){
		return View::make('partials.low_stock');
	}

	public function getCategoryFromBarcode(){
		$barcode = Input::get('barcode');

		$res = DB::table('categories')->where('barcode',$barcode)->first();

		return $res->name;
	}
	public function getBarcodeFromCategory(){
		$category = Input::get('category');
		$res = DB::table('categories')->where('name',$category)->first();
		return $res->barcode;
	}
	public function getPrice(){
		if(Input::get('barcode')!=null){
			$res = DB::table('categories')->where('barcode',Input::get('barcode'))->first();
			return $res->sell_price;
		}
		if(Input::get('category')!=null){
			$res = DB::table('categories')->where('name',Input::get('category'))->first();
			return $res->sell_price;
		}
	}
	public function getAllBarcodeAndPrice(){
		$res = DB::table('categories')->select('barcode', 'sell_price')->get();
			return json_encode($res);
		}

}