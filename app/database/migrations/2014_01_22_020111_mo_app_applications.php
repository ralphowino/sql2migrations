<?php

use Illuminate\Database\Migrations\Migration;

class MoAppApplications extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('mo_app_applications'))
		{
			Schema::create('mo_app_applications',function($table)
			{
				$table->increments('id');
				$table->date('featured_app_from_date');
				$table->date('featured_app_to_date');
				$table->boolean('published');
				$table->boolean('is_featured');
				$table->integer('featured_order');
				$table->integer('company_id');
				$table->float('rating_cache',2,1);
				$table->integer('rating_count');
				$table->integer('views_cache');
				$table->integer('clicks_cache');
				$table->string('meta_title');
				$table->string('meta_description');
				$table->string('name');
				$table->string('slug');
				$table->string('video');
				$table->text('features');
				$table->text('benefits');
				$table->text('pricing');
				$table->string('short_description');
				$table->text('long_description');
				$table->string('icon');
				$table->string('icon_banner');
				$table->string('url');
				$table->string('url_text',500);
				$table->timestamps();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mo_app_applications');
	}

}