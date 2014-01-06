<?php

use Illuminate\Database\Migrations\Migration;

class ApplicationRatings extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('application_ratings',function($table)
		{
			$table->increments('id');
			$table->integer('application_id');
			$table->integer('user_id');
			$table->integer('rating');
			$table->text('comment');
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
		Schema::drop('application_ratings');
	}

}