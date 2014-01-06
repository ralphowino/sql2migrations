<?php

use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table)
		{
			$table->increments('id');
			$table->integer('company_id');
			$table->integer('user_type',10);
			$table->string('linkedin_uid');
			$table->string('linkedin_token');
			$table->string('first_name',64);
			$table->string('last_name',64);
			$table->string('email',128);
			$table->string('password',128);
			$table->string('city',64);
			$table->integer('state');
			$table->string('zip',16);
			$table->integer('country');
			$table->string('phone',32);
			$table->string('cellphone',32);
			$table->timestamps();
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
		Schema::drop('users');
	}

}