<?php

use Illuminate\Database\Migrations\Migration;

class Logs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logs',function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('application_id');
			$table->string('action',64);
			$table->string('ip_address',15);
			$table->text('value_from');
			$table->text('value_to');
			$table->timestamps();
			$table->primary('id ENGINE=M');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logs');
	}

}