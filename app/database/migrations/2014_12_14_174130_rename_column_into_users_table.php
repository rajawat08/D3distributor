<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnIntoUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Update an existing table
 		Schema::table('users', function(Blueprint $table){
				$table->renameColumn('authentication_token', 'remember_token');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Update an existing table
 		Schema::table('users', function(Blueprint $table){
				$table->renameColumn('remember_token','authentication_token');
		});
	}

}
