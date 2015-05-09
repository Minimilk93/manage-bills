<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bills', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('house_id')->nullable();
            $table->string('bill_name');
            $table->datetime('bill_date');
            $table->integer('bill_amount');
            $table->text('bill_comments')->nullable();
            $table->integer('bill_divide');
            $table->integer('bill_shared');
			$table->timestamps();

            $table->foreign('house_id')->references('id')->on('houses');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bills');
	}

}
