<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoginTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('login')) {
            Schema::create('login', function(Blueprint $table)
            {
                $table->increments('account_id');
                $table->string('userid')->default('')->index('name');
                $table->string('user_pass', 32)->default('');
                $table->dateTime('lastlogin')->nullable();
                $table->char('sex', 1)->default('M');
                $table->integer('logincount')->unsigned()->default(0);
                $table->string('email', 60)->default('');
                $table->boolean('level')->default(0);
                $table->smallInteger('error_message')->unsigned()->default(0);
                $table->integer('connect_until')->unsigned()->default(0);
                $table->string('last_ip', 100)->default('');
                $table->smallInteger('memo')->unsigned()->default(0);
                $table->integer('ban_until')->unsigned()->default(0)->index('ban_until');
                $table->integer('state')->unsigned()->default(0)->index('state');
                $table->integer('elite')->unsigned()->default(0);
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
		Schema::drop('login');
	}

}
