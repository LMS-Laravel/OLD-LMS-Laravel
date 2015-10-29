<?php

use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return  void
	 */
	public function up()
	{
		// Creates the users table
		Schema::create(\Config::get('countries.table_name'), function($table)
		{
			$table->increments('id');
			$table->string('iso2', 2)->default('');
		    	$table->string('short_name', 255)->nullable();
			$table->string('long_name', 255)->nullable();
            		$table->string('iso3', 3)->default('');
            		$table->string('numcode', 3)->default('');
            		$table->string('un_member', 3)->default('');
            		$table->string('calling_code', 3)->nullable();
            		$table->string('cctld', 5)->default('');
		    	$table->string('spanish_name', 255)->default('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return  void
	 */
	public function down()
	{
		Schema::drop(\Config::get('countries.table_name'));
	}

}
