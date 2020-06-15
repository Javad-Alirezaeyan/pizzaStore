<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->integer('o_id', true);
			$table->integer('o_state')->default(0);
			$table->string('or_deliverDate', 20)->nullable();
			$table->string('o_comment', 2000)->nullable();
			$table->float('o_totalPrice', 10, 0)->default(0);
			$table->timestamps();
			$table->string('o_customerName', 200)->nullable();
			$table->string('o_customerAddrees', 2000)->nullable();
			$table->string('o_customerPhone', 30)->nullable();
			$table->float('o_deliveryPrice', 10, 0)->nullable()->default(0);
			$table->integer('o_finalPrice')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}
