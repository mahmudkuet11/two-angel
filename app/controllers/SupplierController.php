<?php

class SupplierController extends BaseController{

	public function getAddNewSupplier(){
		return View::make('partials.add_new_supplier');
	}
}