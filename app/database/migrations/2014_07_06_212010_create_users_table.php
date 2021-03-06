<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table)
        {
           $table->increments('id');
			$table->string('username')->unique();
			$table->string('email', 100)->unique();;
			$table->string('password', 255);
			$table->string('first_name', 50);
			$table->string('last_name', 50);
			$table->string('remember_token', 255);
			$table->string('status')->default('active');
			$table->integer('type');			
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
        Schema::drop('users');
    }

}
