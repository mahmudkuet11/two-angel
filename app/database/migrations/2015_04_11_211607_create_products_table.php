<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	/*	Schema::create("products", function($table){
			$table->string("category");

			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));



		});*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/*
		Schema::dropIfExists('products');
		*/

	}

}
