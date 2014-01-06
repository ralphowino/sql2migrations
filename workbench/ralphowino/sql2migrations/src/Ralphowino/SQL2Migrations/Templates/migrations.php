<?php

use Illuminate\Database\Migrations\Migration;

class {{classname}} extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		{{upmigrations}}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		{{downmigrations}}
	}

}