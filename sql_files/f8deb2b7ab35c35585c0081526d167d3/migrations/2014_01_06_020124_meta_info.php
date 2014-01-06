<?php

use Illuminate\Database\Migrations\Migration;

class MetaInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('meta_info',function($table)
		{
			$table->increments('id');
			$table->string('key',64);
			$table->text('value');
			$table->softDeletes();
			$table->primary('id');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('meta_info');
	}

}