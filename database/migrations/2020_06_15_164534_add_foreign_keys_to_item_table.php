<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('item', function(Blueprint $table)
		{
			$table->foreign('i_it_id', 'Item to ItemType')->references('it_id')->on('itemType')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('item', function(Blueprint $table)
		{
			$table->dropForeign('Item to ItemType');
		});
	}

}
