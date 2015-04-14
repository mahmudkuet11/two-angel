<?php 
	/**
	* 
	*/
	class CategoryTableSeeder extends Seeder {
		
		public function run(){

			DB::table('categories')->insert(array(
					'name'				=>	'lux 20g',
					'manufacturer'		=>	'Uniliver Bangladesh',
					'warning_quantity'	=> 20
				));

				DB::table('categories')->insert(array(
					'name'				=>	'lux 50g',
					'manufacturer'		=>	'Uniliver Bangladesh',
					'warning_quantity'	=> 10
				));

				DB::table('categories')->insert(array(
					'name'				=>	'meril 50g',
					'manufacturer'		=>	'Squire group.',
					'warning_quantity'	=> 20
				));

				DB::table('categories')->insert(array(
					'name'				=>	'rupchada 900ml',
					'manufacturer'		=>	'Akij gruop.',
					'warning_quantity'	=> 5
				));
		}
	}

 ?>