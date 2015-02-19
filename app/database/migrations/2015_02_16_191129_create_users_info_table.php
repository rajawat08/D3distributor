<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersInfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_info', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade');
			$table->string('company_name',255)->nullable();
			$table->string('address',255)->nullable();
			$table->string('city',255)->nullable();
			$table->string('country',255)->nullable();
			$table->integer('zipcode')->nullable();
			$table->string('primary_research_area',255)->nullable();
			$table->string('sec_research_area',255)->nullable();
			$table->string('primary_pro_fn_area',255)->nullable();
			$table->string('sec_pro_fn_area',255)->nullable();
			$table->string('no_research_sites',255)->nullable();
			$table->string('noe_current_branch',255)->nullable();
			$table->string('noe_across_globe',255)->nullable();
			$table->boolean('pro_thr_tender_process')->default(false);
			$table->string('annual_turnover',255)->nullable();
			$table->string('source_of_funds',255)->nullable();
			$table->integer('beta_level_development')->nullable();
			$table->text('d3_attr_seeking')->nullable();
			$table->string('firm_type',255)->nullable();
			$table->string('no_distribution_sites',100)->nullable();
			
			
			$table->integer('looking_for_oem',255)->nullable();
			$table->string('distributor_region',255)->nullable();
			$table->text('distributor_strength')->nullable();
			$table->string('market_exp',100)->nullable();
			$table->string('tech_support_exp',100)->nullable();
			$table->string('no_production_sites',255)->nullable();
			$table->string('annual_research_spend',255)->nullable();
			$table->string('no_distributor_outside_india',100)->nullable();
			$table->string('looking_for_d3bs',100)->nullable();
			$table->string('sales_region',255)->nullable();
			$table->string('no_sales_ofc_in_india',100)->nullable();
			$table->string('no_sales_ofc_outside_india',100)->nullable();
			$table->string('instrument_status',100)->nullable();
			
			
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_info');
	}

}
