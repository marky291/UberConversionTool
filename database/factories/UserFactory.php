<?php

use App\Classes\FakeItems;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'userid' => $faker->userName,
        'user_pass' => md5($faker->password(15)),
        //'lastlogin' => $faker->dateTimeThisDecade,
        'sex' => $faker->randomElement(['F', 'M']),
        'logincount' => $faker->numberBetween(0, 999),
        'email' => $faker->email,
        'level' => $faker->biasedNumberBetween(0,99),
        'last_ip' => $faker->ipv4
    ];
});

$factory->define(App\UberBalance::class, function (Faker $faker) {

    return [
        'account_id' => factory('App\LoginBG')->create(),
        'current' => $faker->numberBetween(0, 3500),
        'points' => $faker->numberBetween(0, 3500),
        'coins' => $faker->numberBetween(0, 3500),
        'pending' => $faker->numberBetween(0, 3500),
        'total' => $faker->numberBetween(0, 3500),
        'updated' => $faker->dateTimeThisDecade(),
    ];
});

$factory->define(App\LoginBG::class, function (Faker $faker) {

    $user = $faker->userName;

    return [
        'userid' => $user,
        'user_pass' => XileroPasswordGenerator($user,'password'),
        'lastlogin' => $faker->dateTimeThisDecade,
        'sex' => $faker->randomElement(['F', 'M']),
        'logincount' => $faker->numberBetween(0, 999),
        'email' => $faker->email,
        'group_id' => $faker->biasedNumberBetween(0,99),
        'last_ip' => $faker->ipv4
    ];
});

$factory->define(App\Character::class, function (Faker $faker) {

    return [
        'account_id' => factory('App\User')->create()->account_id,
        'char_num' => $faker->numberBetween(0, 8),
        'base_level' => $faker->numberBetween(1,255),
        'job_level' => $faker->numberBetween(1, 80),
        'base_exp' => $faker->numberBetween(1, 2000000000),
        'job_exp' => $faker->numberBetween(1, 2000000000),
        'zeny' => $faker->numberBetween(1, 99999999),
        'str' => $faker->numberBetween(1, 255),
        'agi' => $faker->numberBetween(1, 255),
        'vit' => $faker->numberBetween(1, 255),
        'int' => $faker->numberBetween(1, 255),
        'dex' => $faker->numberBetween(1, 255),
        'luk' => $faker->numberBetween(1, 255),
        'max_hp' => $faker->numberBetween(1, 15000000),
        'hp' => $faker->numberBetween(1, 15000000),
        'max_sp' => $faker->numberBetween(1, 15000000),
        'sp' => $faker->numberBetween(1, 15000000),
        'status_point' => $faker->numberBetween(1, 10000),
        'skill_point' => $faker->numberBetween(1, 225),
        'option' => 0,
        'karma' => 0,
        'manner' => 0,
        'party_id' => 0,
        'guild_id' => 0,
        'pet_id' => 0,
        'hair' => $faker->numberBetween(1, 99),
        'hair_color' => $faker->numberBetween(1, 258),
        'clothes_color' => $faker->numberBetween(1, 550),
        'weapon' => 0,
        'shield' => 0,
        'head_top' => 0,
        'head_mid' => 0,
        'head_bottom' => 0,
        'name' => $faker->userName,
        'last_map' => $faker->randomElement(["z_agit","yuno_in03","yuno_in02","yuno_in01","yuno_fild08","yuno_fild07","yuno_fild06","yuno_fild05","yuno_fild04","yuno_fild03","yuno_fild02","yuno","xmas_in","xmas_fild01","xmas_dun02","xmas_dun01","xmas","ve_in","ve_fild04","ve_fild03","veins","um_in","um_fild02","um_dun02","um_dun01","umbala","tur_dun04","tur_dun03","tur_dun02","treasure02","treasure01","thor_v01","tha_t08","tha_t01","sec_pri","schg_cas04","ra_temsky","ra_temin","ra_in01","ra_fild06","ra_fild05","ra_fild01","rachel","quiz_01","quiz_00","que_temsky","que_qaru04","que_moon","prt_sewb3","prt_sewb2","prt_sewb1","prt_monk","prt_maze03","prt_maze02","prt_maze01","prt_in","prt_gld","prt_fild11","prt_fild10","prt_fild09","prt_fild08","prt_fild07","prt_fild06","prt_fild05","prt_fild04","prt_fild03","prt_fild02","prt_fild01","prt_fild00","prt_church","prt_castle","prontera","pay_gld","pay_fild11","pay_fild10","pay_fild08","pay_fild07","pay_fild06","pay_fild04","pay_fild03","pay_fild02","pay_fild01","pay_dun04","pay_dun03","pay_dun02","pay_dun01","pay_dun00","pay_arche","payon_in03","payon_in02","payon_in01","payon","orcsdun01","nif_fild02","nif_fild01","niflheim","new_zone02","new_zone01","mosk_dun03","mosk_dun01","moscovia","morocc_in","morocc","moc_ruins","moc_pryd06","moc_pryd04","moc_pryd03","moc_pryd02","moc_pryd01","moc_fild19","moc_fild18","moc_fild17","moc_fild16","moc_fild15","moc_fild13","moc_fild07","moc_fild04","moc_fild03","moc_fild02","moc_fild01","mjo_dun01","mjolnir_12","mjolnir_10","mjolnir_09","mjolnir_06","mjolnir_05","mjolnir_01","mag_dun01","lou_in02","lou_fild01","lou_dun01","louyang","lighthalzen","lhz_in03","lhz_in02","lhz_in01","lhz_dun02","lhz_dun01","kh_dun01","jupe_ele","jupe_cave","juperos_01","jawaii_in","jawaii","iz_dun04","iz_dun03","iz_dun02","iz_dun01","iz_dun00","izlude_in","izlude","izlu2dun","in_sphinx5","in_sphinx4","in_sphinx3","in_sphinx2","in_sphinx1","in_orcs01","in_hunter","ice_dun03","ice_dun02","ice_dun01","hu_in01","hu_fild07","hu_fild06","hugel","gon_fild01","gon_dun03","gon_dun02","gon_dun01","gonryun","gl_step","gl_sew01","gl_prison1","gl_prison","gl_knt02","gl_knt01","gl_chyard","gl_church","gl_cas02","gld_dun04","gld_dun03","gld_dun02","gld_dun01","gef_tower","gef_fild14","gef_fild13","gef_fild11","gef_fild10","gef_fild09","gef_fild07","gef_fild05","gef_fild04","gef_fild03","gef_fild02","gef_fild01","gef_fild00","gef_dun02","gef_dun01","gef_dun00","geffen_in","geffen","gefenia04","gefenia03","gefenia02","ein_in01","ein_fild07","ein_fild06","ein_fild04","ein_fild03","ein_fild02","ein_fild01","ein_dun01","einbroch","einbech","c_tower3","c_tower2","c_tower1","comodo","cmd_fild08","cmd_fild02","cmd_fild01","cave","beach_dun3","beach_dun2","beach_dun","ayo_dun01","ayothaya","aru_gld","arug_cas05","arug_cas04","arena_room","anthell02","anthell01","ama_in02","ama_in01","ama_dun03","ama_dun02","ama_dun01","amatsu","alde_gld","alde_dun04","alde_dun03","aldebaran","alb_ship","alberta_in","alberta","alb2trea","abyss_03","abyss_01","abbey01","6@tower","4@tower"]),
        'last_x' => $faker->numberBetween(1, 500),
        'last_y' => $faker->numberBetween(1, 500),
        'partner_id' => 0,
        'online' => $faker->boolean,
        'father' => 0,
        'mother' => 0,
        'child' => 0,
        'fame' => 0,
        'subclass' => 0,
        'race' => 0,
        'racepoints' => 0,
        'homun_id' => 0,
        'class' => $faker->randomElement(["0","1","2","3","4","5","6","7","8","9","10","11","12","14","15","16","17","18","19","20","23","24","25","4001","4002","4003","4004","4005","4006","4007","4008","4009","4010","4011","4012","4013","4015","4016","4017","4018","4019","4020","4021","4023","4024","4025","4026","4027","4028","4029","4030","4031","4032","4033","4034","4035","4037","4038","4040","4041","4042","4043","4045","4046","4047","4049"]),
    ];
});

$factory->define(App\Inventory::class, function (Faker $faker) {
    return [
        'char_id' => factory('App\Character')->create()->char_id,
        'nameid' => $faker->randomElement(FakeItems::nameid()),
        'amount' => $faker->numberBetween(1, 30000),
        'equip' => $faker->randomElement(FakeItems::equip_position()),
        'identify' => $faker->boolean,
        'refine' => $faker->numberBetween(0, 10),
        'attribute' => 0,
        'card0' => $faker->randomElement(FakeItems::card()),
        'card1' => $faker->randomElement(FakeItems::card()),
        'card2' => $faker->randomElement(FakeItems::card()),
        'card3' => $faker->randomElement(FakeItems::card()),
    ];
});


$factory->define(App\Cart::class, function (Faker $faker) {
    return [
        'char_id' => factory('App\Character')->create()->char_id,
        'nameid' => $faker->randomElement(FakeItems::nameid()),
        'amount' => $faker->numberBetween(1, 30000),
        'equip' => $faker->randomElement(FakeItems::equip_position()),
        'identify' => $faker->boolean,
        'refine' => $faker->numberBetween(0, 10),
        'attribute' => 0,
        'card0' => $faker->randomElement(FakeItems::card()),
        'card1' => $faker->randomElement(FakeItems::card()),
        'card2' => $faker->randomElement(FakeItems::card()),
        'card3' => $faker->randomElement(FakeItems::card()),
    ];
});

$factory->define(App\Storage::class, function (Faker $faker) {
    return [
        'account_id' => factory('App\User')->create()->account_id,
        'nameid' => $faker->randomElement(FakeItems::nameid()),
        'amount' => $faker->numberBetween(1, 30000),
        'equip' => $faker->randomElement(FakeItems::equip_position()),
        'identify' => $faker->boolean,
        'refine' => $faker->numberBetween(0, 10),
        'attribute' => 0,
        'card0' => $faker->randomElement(App\Classes\FakeItems::card()),
        'card1' => $faker->randomElement(App\Classes\FakeItems::card()),
        'card2' => $faker->randomElement(App\Classes\FakeItems::card()),
        'card3' => $faker->randomElement(App\Classes\FakeItems::card()),
    ];
});

$factory->define(App\GuildStorage::class, function (Faker $faker) {
    return [
        'guild_id' => $faker->randomNumber(),
        'nameid' => $faker->randomElement(FakeItems::nameid()),
        'amount' => $faker->numberBetween(1, 30000),
        'equip' => $faker->randomElement(FakeItems::equip_position()),
        'identify' => $faker->boolean,
        'refine' => $faker->numberBetween(0, 10),
        'attribute' => 0,
        'card0' => $faker->randomElement(FakeItems::card()),
        'card1' => $faker->randomElement(FakeItems::card()),
        'card2' => $faker->randomElement(FakeItems::card()),
        'card3' => $faker->randomElement(FakeItems::card()),
    ];
});

$factory->define(App\Guild::class, function (Faker $faker) {

    $guild_leader = factory('App\Character')->create();

    return [
        'name' => $faker->randomElement(["Eternal Family", "Uncle Bob", "XELEROS-BROTHERS", "BounTy HunterS", "Harvest Moon", "Prontera Team"]),
        'char_id' => $guild_leader->char_id,
        'master' => $guild_leader->name,
        'guild_lv' => $faker->numberBetween(0, 50),
        'connect_member' => $faker->boolean,
        'max_member' => $faker->boolean,
        'average_lv' => $faker->numberBetween(1, 255),
        'exp' => $faker->numberBetween(1, 2000000000),
        'next_exp' => $faker->numberBetween(1, 20000000),
        'skill_point' => $faker->numberBetween(0, 50),
        'mes1' => $faker->word,
        'mes2' => $faker->word,
        'emblem_len' => $faker->randomNumber(),
        'emblem_id' => $faker->randomNumber(),
        'emblem_data' => 'blob',
    ];
});