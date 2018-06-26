<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('inventory')) {
            Schema::create('inventory', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('char_id')->unsigned()->default(0)->index('char_id');
                $table->integer('nameid')->unsigned()->default(0)->index('nameid');
                $table->integer('amount')->unsigned()->default(0);
                $table->integer('equip')->unsigned()->default(0);
                $table->smallInteger('identify')->default(0);
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
		Schema::drop('inventory');
	}

}
