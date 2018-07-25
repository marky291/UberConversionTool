<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGuildTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guild', function(Blueprint $table)
		{
			$table->increments('guild_id');
			$table->string('name', 24)->default('');
			$table->integer('char_id')->unsigned()->default(0)->index('char_id');
			$table->string('master', 24)->default('');
			$table->boolean('guild_lv')->default(0);
			$table->boolean('connect_member')->default(0);
			$table->boolean('max_member')->default(0);
			$table->smallInteger('average_lv')->unsigned()->default(1);
			$table->integer('exp')->unsigned()->default(0);
			$table->integer('next_exp')->unsigned()->default(0);
			$table->boolean('skill_point')->default(0);
			$table->string('mes1', 60)->default('');
			$table->string('mes2', 120)->default('');
			$table->integer('emblem_len')->unsigned()->default(0);
			$table->integer('emblem_id')->unsigned()->default(0);
			$table->binary('emblem_data', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guild');
	}

}
