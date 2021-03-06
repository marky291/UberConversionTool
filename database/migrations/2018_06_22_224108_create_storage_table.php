<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStorageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('storage')) {
            Schema::create('storage', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('account_id')->unsigned()->default(0)->index('account_id');
                $table->integer('nameid')->unsigned()->default(0)->index('nameid');
                $table->smallInteger('amount')->unsigned()->default(0);
                $table->integer('equip')->unsigned()->default(0);
                $table->smallInteger('identify')->unsigned()->default(0);
                $table->boolean('refine')->default(0);
                $table->boolean('attribute')->default(0);
                $table->smallInteger('card0')->default(0)->index('card0');
                $table->smallInteger('card1')->default(0)->index('card1');
                $table->smallInteger('card2')->default(0)->index('card2');
                $table->smallInteger('card3')->default(0)->index('card3');
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
		Schema::drop('storage');
	}

}
