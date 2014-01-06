<?php

use Illuminate\Database\Migrations\Migration;

class Blogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs',function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('title');
			$table->text('body');
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
		Schema::drop('blogs');
	}

}