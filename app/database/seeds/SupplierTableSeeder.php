<?php 
	/**
	* 
	*/
	class SupplierTableSeeder extends Seeder {
		
		public function run(){

			DB::table('suppliers')->insert(array(
					'name'				=>	'Ahmed transport',
					'phone'				=>	'000000000000',
					'address'			=> 	'zzzzzzzzzzzzzz'
				));
			DB::table('suppliers')->insert(array(
					'name'				=>	'Raju Transport',
					'phone'				=>	'000000000000',
					'address'			=> 	'zzzzzzzzzzzzzz'
				));
			DB::table('suppliers')->insert(array(
					'name'				=>	'Latif Enterprise',
					'phone'				=>	'000000000000',
					'address'			=> 	'zzzzzzzzzzzzzz'
				));

		}
	}

 ?>