<?php

class ProductController extends BaseController{

	public function getAddNewProduct(){
		return View::make('partials.add_new_product');
	}
	public function postAddNewProduct(){
		$barcode = Input::get("barcode");
		$quantity = Input::get("quantity");
		$category = Input::get('category');
/*
		DB::table('all_products_purchase')->insert(
			array(
			    	    'category'				=> $category,
			   			'purchase_price'		=> $purchase_price,
			   		 	'sell_price' 			=> $sell_price,
			   		 	'quantity'				=> $quantity,
			   		 	'total_purchase_price'	 => $purchase_price*$quantity
				)
			);*/
		$old =  DB::table('categories')->select('quantity')
		->where('barcode', '=', $barcode)->first();

		DB::table('categories')->where('barcode', $barcode)
               ->update(array('quantity' => $old->quantity+$quantity));

		return Redirect::route('getAddNewProduct')->with('msg', 'Products have been added successfully');
	}

	public function getSearchProduct(){
		return View::make('partials.search_product');
	}

	public function getProductByCategory($category){
		$res = DB::table('categories')->select(DB::raw('barcode, category, unit'))
					->where('category', '=', $category)->get();
        return json_encode($res);

	}
	public function getProductByBarcode($barcode){
		$res = DB::table('categories')->select(DB::raw('barcode, category, unit'))
				->where('barcode', '=', $barcode)->get();
        return json_encode($res);

	}
	/*public function postEditProduct(){
		DB::table('products')
            ->where('category', '=', Input::get('category'))
            ->whereBetween('date', array(Input::get('date'), Input::get('date')." "."23:59:59"))
            ->update(array(
            	'purchase_price'	 => Input::get('purchase_price'),
            	 'sell_price'		 => Input::get('sell_price')
            	 ));
            return "Success";

	}*/


}