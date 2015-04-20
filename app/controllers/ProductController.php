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
	public function getProductByCategory($category){
		$res = DB::table('products')->select(DB::raw('date, category, COUNT(*) AS quantity,
					 suppllier, purchase_price, sell_price'))
			
					->where('category', '=', $category)
                    ->groupBy(DB::raw('CAST(date AS DATE)'))
                    ->get();

        return json_encode($res);

	}
	public function postEditProduct(){
		DB::table('products')
            ->where('category', '=', Input::get('category'))
            ->whereBetween('date', array(Input::get('date'), Input::get('date')." "."23:59:59"))
            ->update(array(
            	'purchase_price'	 => Input::get('purchase_price'),
            	 'sell_price'		 => Input::get('sell_price')
            	 ));
            return "Success";

	}


}