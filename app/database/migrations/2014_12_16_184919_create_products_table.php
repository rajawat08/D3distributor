<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',255);
			$table->text('short_discription')->nullable();
			$table->text('discription')->nullable();			
			$table->integer('status')->default(1);
			$table->integer('quantity')->default(0);
			$table->double('price', 15, 8);
			$table->string('currency',50)->default('USD');			
			$table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users');
			$table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories');
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
		Schema::drop('products');
	}

}
