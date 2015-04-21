<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllProductsPurchase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("all_products_purchase", function($table){
			$table->string("category");
			$table->string("suppllier");
			$table->integer("quantity");
			$table->decimal("purchase_price", 6, 2);
			$table->decimal("sell_price", 6, 2);
			$table->decimal("total_purchase_price", 6, 2);
			$table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::dropIfExists('all_products_purchase');

	}

}
