<?php

use Illuminate\Database\Migrations\Migration;

class States extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('states',function($table)
		{
			$table->increments('id');
			$table->integer('country_id');
			$table->string('name',128);
			$table->primary('id ENGINE=I');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('states');
	}

}