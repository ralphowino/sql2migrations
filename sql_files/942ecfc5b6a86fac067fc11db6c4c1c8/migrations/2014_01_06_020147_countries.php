<?php

use Illuminate\Database\Migrations\Migration;

class Countries extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('countries',function($table)
		{
			$table->increments('id');
			$table->string('name',128);
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
		Schema::drop('countries');
	}

}