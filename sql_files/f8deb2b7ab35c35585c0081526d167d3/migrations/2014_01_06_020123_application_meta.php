<?php

use Illuminate\Database\Migrations\Migration;

class ApplicationMeta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('application_meta',function($table)
		{
			$table->increments('id');
			$table->integer('application_id');
			$table->integer('meta_id');
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
		Schema::drop('application_meta');
	}

}