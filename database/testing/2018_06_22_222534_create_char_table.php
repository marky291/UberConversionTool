<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCharTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        if (!Schema::hasTable('char')) {
            Schema::create('char', function (Blueprint $table) {
                $table->increments('char_id');
                $table->integer('account_id')->unsigned()->default(0)->index('account_id');
                $table->boolean('char_num')->default(0);
                $table->string('name', 30)->default('');
                $table->smallInteger('class')->unsigned()->default(0);
                $table->smallInteger('base_level')->unsigned()->default(1);
                $table->smallInteger('job_level')->unsigned()->default(1);
                $table->bigInteger('base_exp')->unsigned()->default(0);
                $table->bigInteger('job_exp')->unsigned()->default(0);
                $table->integer('zeny')->unsigned()->default(0);
                $table->smallInteger('str')->unsigned()->default(0);
                $table->smallInteger('agi')->unsigned()->default(0);
                $table->smallInteger('vit')->unsigned()->default(0);
                $table->smallInteger('int')->unsigned()->default(0);
                $table->smallInteger('dex')->unsigned()->default(0);
                $table->smallInteger('luk')->unsigned()->default(0);
                $table->integer('max_hp')->unsigned()->default(0);
                $table->integer('hp')->unsigned()->default(0);
                $table->integer('max_sp')->unsigned()->default(0);
                $table->integer('sp')->unsigned()->default(0);
                $table->smallInteger('status_point')->unsigned()->default(0);
                $table->smallInteger('skill_point')->unsigned()->default(0);
                $table->integer('option')->default(0)->index('option');
                $table->boolean('karma')->default(0);
                $table->boolean('manner')->default(0);
                $table->integer('party_id')->unsigned()->default(0)->index('party_id');
                $table->integer('guild_id')->unsigned()->default(0)->index('guild_id');
                $table->integer('pet_id')->unsigned()->default(0);
                $table->boolean('hair')->default(0);
                $table->smallInteger('hair_color')->unsigned()->default(0);
                $table->smallInteger('clothes_color')->unsigned()->default(0);
                $table->smallInteger('weapon')->unsigned()->default(1);
                $table->smallInteger('shield')->unsigned()->default(0);
                $table->smallInteger('head_top')->unsigned()->default(0);
                $table->smallInteger('head_mid')->unsigned()->default(0);
                $table->smallInteger('head_bottom')->unsigned()->default(0);
                $table->string('last_map', 20)->default('prontera.gat');
                $table->smallInteger('last_x')->unsigned()->default(53);
                $table->smallInteger('last_y')->unsigned()->default(111);
                $table->string('save_map', 20)->default('prontera.gat');
                $table->smallInteger('save_x')->unsigned()->default(53);
                $table->smallInteger('save_y')->unsigned()->default(111);
                $table->integer('partner_id')->unsigned()->default(0)->index('partner_id');
                $table->boolean('online')->default(0)->index('online');
                $table->integer('father')->unsigned()->default(0)->index('father');
                $table->integer('mother')->unsigned()->default(0)->index('mother');
                $table->integer('child')->unsigned()->default(0)->index('child');
                $table->integer('fame')->unsigned()->default(0);
                $table->integer('subclass')->unsigned()->default(0);
                $table->integer('race')->unsigned()->default(0);
                $table->integer('racepoints')->unsigned()->default(0);
                $table->integer('homun_id')->unsigned()->default(0);
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
		Schema::drop('char');
	}

}
