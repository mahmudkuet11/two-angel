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
		Schema::create("products", function($table){
			$table->string("barcode");
			$table->string("category");
			$table->string("suppllier");
			$table->decimal("purchase_price", 6, 2);
			$table->decimal("sell_price", 6, 2);
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->primary('barcode');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::dropIfExists('products');

	}

}
