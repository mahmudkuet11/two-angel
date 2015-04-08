<?php

class ProductController extends BaseController{

	public function getAddNewProduct(){
		return View::make('partials.add_new_product');
	}

}