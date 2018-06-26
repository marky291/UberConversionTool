<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartInventoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('cart_inventory')) {
            Schema::create('cart_inventory', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('char_id')->default(0)->index('char_id');
                $table->integer('nameid')->default(0)->index('nameid');
                $table->integer('amount')->default(0);
                $table->integer('equip')->unsigned()->default(0);
                $table->smallInteger('identify')->default(0);
                $table->boolean('refine')->default(0);
                $table->boolean('attribute')->default(0);
                $table->integer('card0')->default(0)->index('card0');
                $table->integer('card1')->default(0)->index('card1');
                $table->integer('card2')->default(0)->index('card2');
                $table->integer('card3')->default(0)->index('card3');
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
		Schema::drop('cart_inventory');
	}

}
