<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orderItems', function(Blueprint $table)
		{
			$table->foreign('oi_itemId', 'OrderItems to Items')->references('i_id')->on('item')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('oi_orderId', 'OrderItems to Orders')->references('o_id')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orderItems', function(Blueprint $table)
		{
			$table->dropForeign('OrderItems to Items');
			$table->dropForeign('OrderItems to Orders');
		});
	}

}
