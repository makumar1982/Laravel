<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('newusers', function(Blueprint $table)
		{
			$table->increments('id');

			$table->tinyInteger('published', 1);
			$table->float('rating_cache', 2,1)->unsigned();
			$table->integer('rating_count', 9)->unsigned();
			$table->string('name', 255);
			$table->float('pricing', 9,2)->unsigned()->default(0.00);
			$table->string('short_description', 255);
			$table->text('long_description');
			$table->string('icon' ,255);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		
			Schema::drop('newusers');
		
	}

}