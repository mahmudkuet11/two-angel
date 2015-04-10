<?php

class UserTableSeeder extends Seeder{
	public function run(){
		DB::table('users')->insert(array(
				'username'	=>	'admin',
				'password'	=>	Hash::make('admin')
			));
	}
}