<?php

class ProductController extends BaseController{

	public function getAddNewProduct(){
		return View::make('partials.add_new_product');
	}
	public function postAddNewProduct(){
		$barcode = Input::get("barcode");
		$quantity = Input::get("quantity");
		$category = Input::get('category');
		/*DB::table('all_products_purchase')->insert(
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
		$res = DB::table('categories')->select(DB::raw('name, quantity,
					  purchase_price, sell_price'))
					->where('name', '=', $category)
                    ->get();
        return json_encode($res);

	}
/*	public function getProductByCategory($category){
		$res = DB::table('categories')->select(DB::raw('barcode, category, unit'))
					->where('category', '=', $category)->get();
        return json_encode($res);

	}*/
	/*public function getProductByBarcode($barcode){
		$res = DB::table('categories')->select(DB::raw('barcode, category, unit'))
				->where('barcode', '=', $barcode)->get();
        return json_encode($res);

	}*/
	public function postEditProduct(){
		$name = Input::get("category");
		$purP = Input::get("purchase_price");
		$sellP = Input::get("sell_price");
		DB::table('categories')
            ->where('name', '=', $name)
            ->update(array(
            	'purchase_price'	 => $purP,
            	 'sell_price'		 => $sellP
            	 ));
            return "Success";
	}


}