<?php

use Illuminate\Database\Migrations\Migration;

class BlogMeta extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_meta',function($table)
		{
			$table->integer('blog_id');
			$table->integer('meta_id');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('blog_meta');
	}

}