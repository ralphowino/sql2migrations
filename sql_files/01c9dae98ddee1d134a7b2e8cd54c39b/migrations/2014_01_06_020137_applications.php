<?php

use Illuminate\Database\Migrations\Migration;

class Applications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applications',function($table)
		{
			$table->increments('id');
			$table->date('featured_app_from_date');
			$table->date('featured_app_to_date');
			$table->integer('company_id');
			$table->float('rating_cache');
			$table->string('name');
			$table->text('description');
			$table->string('icon');
			$table->string('url');
			$table->string('screenshot');
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
		Schema::drop('applications');
	}

}