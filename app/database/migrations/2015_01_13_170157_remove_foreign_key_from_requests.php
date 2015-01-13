<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class RemoveForeignKeyFromRequests extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('requests', function(Blueprint $table)
		{
			$table->dropForeign('requests_user_id_foreign');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('requests', function(Blueprint $table)
		{
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

}
