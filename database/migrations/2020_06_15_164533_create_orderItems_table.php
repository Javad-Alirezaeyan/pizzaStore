<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orderItems', function(Blueprint $table)
		{
			$table->integer('oi_id', true);
			$table->integer('oi_itemId')->index('OrderItemstoItems');
			$table->float('oi_unitPrice', 10, 0)->nullable();
			$table->float('oi_totalPrice', 10, 0)->nullable();
			$table->integer('oi_orderId')->index('OrderItemstoOrders');
			$table->timestamps();
			$table->integer('oi_quantity')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orderItems');
	}

}
