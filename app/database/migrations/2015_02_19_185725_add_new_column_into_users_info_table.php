<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddNewColumnIntoUsersInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_info', function(Blueprint $table)
		{
			$table->string('no_distributor_in_india',100)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_info', function(Blueprint $table)
		{
			$table->dropColumn('no_distributor_in_india');
		});
	}

}
