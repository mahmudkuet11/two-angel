<?php

class ProductTableSeeder extends Seeder{
	public function run(){

		DB::table('products')->insert(array(
				'barcode'			=>	'112201',
				'category'			=>	'lux 20g',
				'suppllier'			=> 	'Ahmed transport',
				'purchase_price'	=>	20.56,
				'sell_price'		=>	22.50
			));
		
		DB::table('products')->insert(array(
				'barcode'			=>	'112202',
				'category'			=>	'lux 20g',
				'suppllier'			=> 	'Ahmed transport',
				'purchase_price'	=>	20.56,
				'sell_price'		=>	22
			));

		DB::table('products')->insert(array(
				'barcode'			=>	'112210',
				'category'			=>	'lux 50g',
				'suppllier'			=> 	'Ahmed transport',
				'purchase_price'	=>	30.40,
				'sell_price'		=>	32.00
			));
		DB::table('products')->insert(array(
				'barcode'			=>	'112301',
				'category'			=>	'meril 50g',
				'suppllier'			=> 	'Raju Transport',
				'purchase_price'	=>	29.00,
				'sell_price'		=>	31.00
			));
		DB::table('products')->insert(array(
				'barcode'			=>	'112302',
				'category'			=>	'meril 50g',
				'suppllier'			=> 	'Raju Transport',
				'purchase_price'	=>	29.00,
				'sell_price'		=>	31.00
			));
		DB::table('products')->insert(array(
				'barcode'			=>	'222201',
				'category'			=>	'rupchada 900ml',
				'suppllier'			=> 	'Latif Enterprise',
				'purchase_price'	=>	110.00,
				'sell_price'		=>	120.00
			));
			
	}
	
}