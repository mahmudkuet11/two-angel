<?php

class BarcodeController extends BaseController{

	public function getBarcode(){
		return View::make('partials.getBarcode');
	}

}