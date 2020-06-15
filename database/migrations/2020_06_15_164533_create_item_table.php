<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item', function(Blueprint $table)
		{
			$table->integer('i_id', true);
			$table->string('i_title', 300);
			$table->string('i_description', 2000);
			$table->float('i_price', 10, 0);
			$table->string('i_mainImage', 200)->nullable();
			$table->integer('i_it_id')->index('ItemtoItemType')->comment('the ID type of item, based on  the ItemType table');
			$table->boolean('i_lock')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('item');
	}

}
