<?php

$factory->define(App\Character::class, function (Faker\Generator $faker) {
    return [
        'account_id' => function () {
             return factory(App\User::class)->create()->account_id;
        },
        'char_num' => $faker->boolean,
        'name' => $faker->name,
        'class' => $faker->randomNumber(),
        'base_level' => $faker->randomNumber(),
        'job_level' => $faker->randomNumber(),
        'base_exp' => $faker->randomNumber(),
        'job_exp' => $faker->randomNumber(),
        'zeny' => $faker->randomNumber(),
        'str' => $faker->randomNumber(),
        'agi' => $faker->randomNumber(),
        'vit' => $faker->randomNumber(),
        'int' => $faker->randomNumber(),
        'dex' => $faker->randomNumber(),
        'luk' => $faker->randomNumber(),
        'max_hp' => $faker->randomNumber(),
        'hp' => $faker->randomNumber(),
        'max_sp' => $faker->randomNumber(),
        'sp' => $faker->randomNumber(),
        'status_point' => $faker->randomNumber(),
        'skill_point' => $faker->randomNumber(),
        'option' => $faker->randomNumber(),
        'karma' => $faker->boolean,
        'manner' => $faker->boolean,
        'party_id' => $faker->randomNumber(),
        'guild_id' => $faker->randomNumber(),
        'pet_id' => $faker->randomNumber(),
        'hair' => $faker->boolean,
        'hair_color' => $faker->randomNumber(),
        'clothes_color' => $faker->randomNumber(),
        'weapon' => $faker->randomNumber(),
        'shield' => $faker->randomNumber(),
        'head_top' => $faker->randomNumber(),
        'head_mid' => $faker->randomNumber(),
        'head_bottom' => $faker->randomNumber(),
        'last_map' => $faker->word,
        'last_x' => $faker->randomNumber(),
        'last_y' => $faker->randomNumber(),
        'save_map' => $faker->word,
        'save_x' => $faker->randomNumber(),
        'save_y' => $faker->randomNumber(),
        'partner_id' => $faker->randomNumber(),
        'online' => $faker->boolean,
        'father' => $faker->randomNumber(),
        'mother' => $faker->randomNumber(),
        'child' => $faker->randomNumber(),
        'fame' => $faker->randomNumber(),
        'subclass' => $faker->randomNumber(),
        'race' => $faker->randomNumber(),
        'racepoints' => $faker->randomNumber(),
        'homun_id' => $faker->randomNumber(),
    ];
});

$factory->define(App\Inventory::class, function (Faker\Generator $faker) {
    return [
        'char_id' => $faker->randomNumber(),
        'nameid' => $faker->randomNumber(),
        'amount' => $faker->randomNumber(),
        'equip' => $faker->randomNumber(),
        'identify' => $faker->randomNumber(),
        'refine' => $faker->boolean,
        'attribute' => $faker->boolean,
        'card0' => $faker->randomNumber(),
        'card1' => $faker->randomNumber(),
        'card2' => $faker->randomNumber(),
        'card3' => $faker->randomNumber(),
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'userid' => $faker->word,
        'user_pass' => $faker->word,
        'lastlogin' => $faker->dateTimeBetween(),
        'sex' => $faker->word,
        'logincount' => $faker->randomNumber(),
        'email' => $faker->safeEmail,
        'level' => $faker->boolean,
        'error_message' => $faker->randomNumber(),
        'connect_until' => $faker->randomNumber(),
        'last_ip' => $faker->word,
        'memo' => $faker->randomNumber(),
        'ban_until' => $faker->randomNumber(),
        'state' => $faker->randomNumber(),
        'elite' => $faker->randomNumber(),
    ];
});

$factory->define(App\Cart::class, function (Faker\Generator $faker) {
    return [
        'char_id' => $faker->randomNumber(),
        'nameid' => $faker->randomNumber(),
        'amount' => $faker->randomNumber(),
        'equip' => $faker->randomNumber(),
        'identify' => $faker->randomNumber(),
        'refine' => $faker->boolean,
        'attribute' => $faker->boolean,
        'card0' => $faker->randomNumber(),
        'card1' => $faker->randomNumber(),
        'card2' => $faker->randomNumber(),
        'card3' => $faker->randomNumber(),
    ];
});

$factory->define(App\GuildStorage::class, function (Faker\Generator $faker) {
    return [
        'guild_id' => $faker->randomNumber(),
        'nameid' => $faker->randomNumber(),
        'amount' => $faker->randomNumber(),
        'equip' => $faker->randomNumber(),
        'identify' => $faker->randomNumber(),
        'refine' => $faker->boolean,
        'attribute' => $faker->boolean,
        'card0' => $faker->randomNumber(),
        'card1' => $faker->randomNumber(),
        'card2' => $faker->randomNumber(),
        'card3' => $faker->randomNumber(),
    ];
});

$factory->define(App\Storage::class, function (Faker\Generator $faker) {
    return [
        'account_id' => $faker->randomNumber(),
        'nameid' => $faker->randomNumber(),
        'amount' => $faker->randomNumber(),
        'equip' => $faker->randomNumber(),
        'identify' => $faker->randomNumber(),
        'refine' => $faker->boolean,
        'attribute' => $faker->boolean,
        'card0' => $faker->randomNumber(),
        'card1' => $faker->randomNumber(),
        'card2' => $faker->randomNumber(),
        'card3' => $faker->randomNumber(),
    ];
});

$factory->define(App\LoginBG::class, function (Faker\Generator $faker) {
    return [
        'userid' => $faker->word,
        'user_pass' => $faker->word,
        'sex' => $faker->word,
        'email' => $faker->safeEmail,
        'group_id' => $faker->boolean,
        'state' => $faker->randomNumber(),
        'unban_time' => $faker->randomNumber(),
        'expiration_time' => $faker->randomNumber(),
        'logincount' => $faker->randomNumber(),
        'lastlogin' => $faker->dateTimeBetween(),
        'last_ip' => $faker->word,
        'birthdate' => $faker->date(),
        'character_slots' => $faker->boolean,
        'pincode' => $faker->word,
        'pincode_change' => $faker->randomNumber(),
        'remember_token' => str_random(10),
        'last_unique_id' => $faker->randomNumber(),
        'blocked_unique_id' => $faker->randomNumber(),
        'modified_date' => $faker->dateTimeBetween(),
        'creation_date' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\UberBalance::class, function (Faker\Generator $faker) {
    return [
        'current' => $faker->randomNumber(),
        'points' => $faker->randomNumber(),
        'coins' => $faker->randomNumber(),
        'pending' => $faker->randomNumber(),
        'total' => $faker->randomNumber(),
        'updated' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\UberTransactions::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->randomNumber(),
        'ip_address' => $faker->word,
        'outcome' => $faker->randomNumber(),
        'income' => $faker->randomNumber(),
        'balance' => $faker->randomNumber(),
        'type' => $faker->randomNumber(),
        'timestamp' => $faker->dateTimeBetween(),
    ];
});

$factory->define(App\Guild::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'char_id' => $faker->randomNumber(),
        'master' => $faker->word,
        'guild_lv' => $faker->boolean,
        'connect_member' => $faker->boolean,
        'max_member' => $faker->boolean,
        'average_lv' => $faker->randomNumber(),
        'exp' => $faker->randomNumber(),
        'next_exp' => $faker->randomNumber(),
        'skill_point' => $faker->boolean,
        'mes1' => $faker->word,
        'mes2' => $faker->word,
        'emblem_len' => $faker->randomNumber(),
        'emblem_id' => $faker->randomNumber(),
        'emblem_data' => 'blob',
    ];
});

