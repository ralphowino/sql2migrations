<?php

use Illuminate\Database\Migrations\Migration;

class BlogComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_comments',function($table)
		{
			$table->increments('id');
			$table->integer('blog_id');
			$table->integer('user_id');
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
		Schema::drop('blog_comments');
	}

}