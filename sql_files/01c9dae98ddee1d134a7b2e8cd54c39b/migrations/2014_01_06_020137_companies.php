<?php

use Illuminate\Database\Migrations\Migration;

class Companies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies',function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('summary');
			$table->string('url');
			$table->string('picture_url');
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
		Schema::drop('companies');
	}

}