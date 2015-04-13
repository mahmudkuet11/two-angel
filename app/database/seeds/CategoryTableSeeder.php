<?php 
	/**
	* 
	*/
	class CategorySeeder extends AnotherClass
	{
		
		public function run(){
			DB::table('products')->insert(array(
					'barcode'	=>	'112323',
					'category'	=>	'lux 20g',
					'suppllier'	=> 	'Uniliver Bangladesh.',
					'purchase_price'	=>	20.56,
					'sell_price'	=>	22.50
				));
		}
	}
 ?>