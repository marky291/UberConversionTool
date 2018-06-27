<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Uber
    |--------------------------------------------------------------------------
    |
    | Control the value and worth of the ubers, the decimal system is using a
    | base of the dollar.
    |
    */
    'uber' => [
        'price' => 1, // $1.00
        'value' => 50, // 50 points
    ],

    /*
    |--------------------------------------------------------------------------
    | Refine Percentage Increases.
    |--------------------------------------------------------------------------
    |
    | Control the percentage increase return based on refine rate.
    |
    */
    'refine' => [
        0 => 50,
        1 => 50,
        2 => 50,
        3 => 50,
        4 => 50,
        5 => 50,
        6 => 60,
        7 => 60,
        8 => 70,
        9 => 80,
        10 => 100,
    ],

    /*
    |--------------------------------------------------------------------------
    | Convertable items
    |--------------------------------------------------------------------------
    |
    | The items that we will allow to be convertable, these provide the lookups
    | for the database and also allow us to define the cost and extra attributes
    | per item definition
    |
     */
    'items' => [
        [
            'id' => '3180',
            'name' => 'Godly Staff of Ages',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3199',
            'name' => 'Godly Soul Seeker',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3182',
            'name' => 'Godly Holy Flail',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3183',
            'name' => 'Godly Oblivion Blade',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3184',
            'name' => 'Godly Frenzic',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3185',
            'name' => 'Godly Katar of Chaos',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3186',
            'name' => 'Godly Reaper',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3187',
            'name' => 'Godly Wind Weaver',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3188',
            'name' => 'Godly Dark Defier',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3189',
            'name' => 'Godly Phoenix Wing',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3190',
            'name' => 'Godly Retribution',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3191',
            'name' => 'Godly Raging Mic',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3192',
            'name' => 'Godly Fuuma Shuriken',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3193',
            'name' => 'Godly Garrison',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3194',
            'name' => 'Godly Cyclone',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3195',
            'name' => 'Godly Butcher',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3196',
            'name' => 'Godly Destroyer',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3197',
            'name' => 'Godly Legacy Of Dragon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3198',
            'name' => 'Godly Gate Keeper',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22564',
            'name' => 'Sheriffs Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22565',
            'name' => 'Violet Bunny Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22566',
            'name' => 'Scarlet Bunny Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22567',
            'name' => 'Purple Bunny Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22568',
            'name' => 'Eclipse Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22569',
            'name' => 'Easter Bunny Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22570',
            'name' => 'Black Bunny Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22571',
            'name' => 'Angels Blessing',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22572',
            'name' => 'Angeling Wings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22573',
            'name' => 'Black Cat Ears',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22574',
            'name' => 'Archangeling Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22575',
            'name' => 'Gypsy Bells',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22576',
            'name' => 'Checkerd Cap',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22577',
            'name' => 'Evolved Evil Wings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22578',
            'name' => 'Tuxedo Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22579',
            'name' => 'Red Balls',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22580',
            'name' => 'Angel Set',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22581',
            'name' => 'Ninja Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22582',
            'name' => 'Cross Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22583',
            'name' => 'Marduk Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22584',
            'name' => 'Ninja Band 1',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22585',
            'name' => 'Ninja Band 2',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22586',
            'name' => 'Ninja Band 3',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22587',
            'name' => 'Ninja Band 4',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22588',
            'name' => 'Ninja Band 5',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22589',
            'name' => 'Ninja Band 6',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22590',
            'name' => 'Ninja Band 7',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22591',
            'name' => 'Violet Wizardry Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22592',
            'name' => 'Hat of Respect',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22593',
            'name' => 'Back Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22594',
            'name' => 'Black Balls',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22595',
            'name' => 'Cowboy Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22596',
            'name' => 'Evil Druids Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22597',
            'name' => 'Shinobis Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22598',
            'name' => 'Shinobis Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22599',
            'name' => 'Holy Golden Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22600',
            'name' => 'Sohees Talismans',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22601',
            'name' => 'Emperial Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22602',
            'name' => 'Emperial Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22603',
            'name' => 'Spellcasters Aura',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22604',
            'name' => 'Black Headband',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22605',
            'name' => 'Happy Marry Veil',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22606',
            'name' => 'Neko Neko',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22607',
            'name' => 'Crystal Crown',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22608',
            'name' => 'Angel Wings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22610',
            'name' => 'Cyan Boys Cap',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22611',
            'name' => 'Bear Ears',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22612',
            'name' => 'Chunli Dumplings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22613',
            'name' => 'Real Afro',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22614',
            'name' => 'Carribean Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22615',
            'name' => 'Black Bear Ears',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22616',
            'name' => 'Blue Christmas Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22617',
            'name' => 'Macho Blinker',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22618',
            'name' => 'Blue Circlet',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22619',
            'name' => 'Bomb Headgear',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22620',
            'name' => "Cat O' Ninetails",
            'price' => '20' // $20.00
        ],
        [
            'id' => '22621',
            'name' => 'Chii Ears',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22622',
            'name' => 'Frenzy Condom Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22623',
            'name' => 'Cool Gent',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22624',
            'name' => 'Jakk Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22625',
            'name' => 'Witch Queen Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22626',
            'name' => 'Dark Valkyrie Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22627',
            'name' => 'Buddhist Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22628',
            'name' => 'Long Devil Horns',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22629',
            'name' => 'DJ Max Headset',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22630',
            'name' => 'Dokkaebis Hair',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22631',
            'name' => 'Shaman Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22632',
            'name' => 'Blue Ribbons',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22633',
            'name' => 'Peach Ribbons',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22634',
            'name' => 'Wonder Hairband',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22635',
            'name' => 'Gladiator Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22636',
            'name' => 'Drops Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22637',
            'name' => 'Eagle Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22638',
            'name' => 'Crimson Warrior Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22639',
            'name' => 'Poporing Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22640',
            'name' => 'Kuneho Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22641',
            'name' => 'Fox Ears',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22642',
            'name' => 'Fox Mask',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22643',
            'name' => 'Kiddo Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22644',
            'name' => 'Ghost Doll Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22645',
            'name' => 'Ghostring Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22646',
            'name' => 'Pikaboo Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22647',
            'name' => 'Hokages Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22648',
            'name' => 'Alizels Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22649',
            'name' => 'Crystal Valkyrie Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22650',
            'name' => 'Gypsy Bells',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22651',
            'name' => 'Akechis Mask',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22652',
            'name' => 'Golden Headgear',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22653',
            'name' => 'Temple Poring Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22654',
            'name' => 'Blue Bunny Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22655',
            'name' => 'Chief Indian Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22656',
            'name' => 'Earth Wizardry Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22657',
            'name' => 'Laurel Leaves',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22658',
            'name' => 'Uber Tropical Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22659',
            'name' => 'White Conio Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22660',
            'name' => 'Wanderer Sakkat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22661',
            'name' => 'Boys Cap',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22662',
            'name' => 'Ibuki Mask',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22663',
            'name' => 'Boys Cap',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22664',
            'name' => 'Strings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22665',
            'name' => 'Kimimaro Face',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22666',
            'name' => 'Maya Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22667',
            'name' => 'Simple Tiara',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22668',
            'name' => 'Poring Towel',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22669',
            'name' => 'Viking Helmet',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22670',
            'name' => 'Simple Crown',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22671',
            'name' => 'Sitting Polar Bear',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22672',
            'name' => 'Polar Face',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22673',
            'name' => 'Raydric Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22674',
            'name' => 'Lokis Mask',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22675',
            'name' => 'Yeti Feathers',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22676',
            'name' => 'Poporing Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22677',
            'name' => "Goat O' Antlers",
            'price' => '20' // $20.00
        ],
        [
            'id' => '22678',
            'name' => 'Crimson Cap',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22679',
            'name' => 'Wish Maiden Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22680',
            'name' => 'Black Piece',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22681',
            'name' => 'Raging Angel Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22682',
            'name' => 'Fine Hairband',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22683',
            'name' => 'Samurai Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22684',
            'name' => 'Samurai Master',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22685',
            'name' => 'Wizardry Master',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22686',
            'name' => 'Jakks Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22687',
            'name' => 'Commander Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22688',
            'name' => 'FU Post',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22689',
            'name' => 'Skeleton Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22690',
            'name' => 'Big Golden Bells',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22691',
            'name' => 'Temple Poring Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22692',
            'name' => 'Baseball Frenzy',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22693',
            'name' => 'Khaoss Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22694',
            'name' => 'Twin Bunny Ears',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22695',
            'name' => 'Bugs Bunny Ears',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22696',
            'name' => 'Kabuki Face',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22697',
            'name' => 'Wizard Master',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22698',
            'name' => 'Heart Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22699',
            'name' => 'Bonsai Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22701',
            'name' => 'Sunday Hat 2',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22702',
            'name' => 'Sunday Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22703',
            'name' => 'Nikki Hat <3',
            'price' => '20' // $20.00
        ],
        [
            'id' => '22704',
            'name' => 'Slashs Top Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3400',
            'name' => 'Halloween Hood 2010',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3401',
            'name' => 'Halloween Mask 2010',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3403',
            'name' => 'AFK Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3404',
            'name' => 'Bright Helm',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3405',
            'name' => 'Miranda Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3406',
            'name' => 'Feather Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3407',
            'name' => 'Feather Cap',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3408',
            'name' => 'Flaming Crown',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3409',
            'name' => 'Inca Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3410',
            'name' => 'Magic Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3411',
            'name' => 'Ribbon Wizard Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3412',
            'name' => 'Wedding Veil',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3413',
            'name' => 'Majorette Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3414',
            'name' => 'Neko Kafra Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3415',
            'name' => 'Orchid Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3416',
            'name' => 'Paper Bag Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3417',
            'name' => 'Rose Band',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3418',
            'name' => 'Urahara Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3419',
            'name' => 'Wing Cap',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3420',
            'name' => 'Wolf Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3421',
            'name' => 'Hill Lion Doll',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3422',
            'name' => 'Tie',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3423',
            'name' => 'Balloon Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3424',
            'name' => 'Bonnet Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3425',
            'name' => 'Gold Bonnet Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3426',
            'name' => 'Prototype Glasses',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3427',
            'name' => 'Happy Birthday Kyla <3',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3428',
            'name' => 'Kyla Bunny <3',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3429',
            'name' => 'Handing Dolls Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3430',
            'name' => 'Fruit Fashion Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3431',
            'name' => 'Eclipse Hood',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3432',
            'name' => 'Avalon Wings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3434',
            'name' => 'Butterfly Aura',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3180',
            'name' => 'Chakra Wings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3436',
            'name' => 'Flower Ring',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3437',
            'name' => 'Incubus Doll',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3438',
            'name' => 'Loli Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3439',
            'name' => 'Night Aura',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3445',
            'name' => 'Butterfly Wings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3441',
            'name' => 'Heart Ring',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3442',
            'name' => 'Rain Cloud',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3443',
            'name' => 'Solar Aura',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3444',
            'name' => 'Valentines Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3450',
            'name' => 'Aqua Balloon Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3451',
            'name' => 'Ashura Fairy Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3452',
            'name' => 'Bell Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3453',
            'name' => 'Blue Animted Small Ribbons',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3454',
            'name' => 'Bridal Wreath',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3455',
            'name' => 'Donut',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3456',
            'name' => 'Drooping Chunge',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3457',
            'name' => 'Drooping Lady Solace',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3458',
            'name' => 'Drooping Nymph',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3459',
            'name' => 'Drooping Bascojin',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3460',
            'name' => 'Drooping Kobold Archer',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3461',
            'name' => 'Drooping Leaf Cat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3462',
            'name' => 'Drooping Succubus',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3463',
            'name' => 'Drooping Zerlthsh',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3464',
            'name' => 'Flower Crown',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3465',
            'name' => 'Large Hibiscus',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3466',
            'name' => 'Myst Case Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3467',
            'name' => 'Piamette Hairband',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3468',
            'name' => 'Pink Balloon Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3469',
            'name' => 'Red Balloon Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3470',
            'name' => 'Wild Rose Hat',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3471',
            'name' => 'Atska Ring',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3472',
            'name' => 'Blue Flame',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3473',
            'name' => 'Butterfly Pin',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3474',
            'name' => 'Chinese Knot',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3475',
            'name' => 'Clock Key',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3476',
            'name' => 'Deviruchi Pin',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3477',
            'name' => 'Fallen Blossom Laurel',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3478',
            'name' => 'Black Hip Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3479',
            'name' => 'Blue Hip Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3480',
            'name' => 'Green Hip Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3481',
            'name' => 'Purple Hip Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3482',
            'name' => 'Red Hip Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3483',
            'name' => 'White Hip Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3484',
            'name' => 'Yellow Hip Ribbon',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3485',
            'name' => 'Cirnos Wings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3486',
            'name' => 'Fran Wings',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3321',
            'name' => 'Scarf',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3322',
            'name' => 'Santa Scarf',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3323',
            'name' => 'Red Scarf',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3324',
            'name' => 'Pink Scarf',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3325',
            'name' => 'Green Scarf',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3326',
            'name' => 'Nikki Scarf <3',
            'price' => '20' // $20.00
        ],
        [
            'id' => '3327',
            'name' => 'Blue Scarf',
            'price' => '20' // $20.00
        ],
        [
            'name' => 'Amaterasu Helm',
            'price' => '40',
            'id' => '15010'
        ],
        [
            'name' => 'Amaterasu Wings',
            'price' => '40',
            'id' => '15011'
        ],
        [
            'name' => 'Amaterasu Aura',
            'price' => '40',
            'id' => '15012',
            'refine' => 'false'
        ],
        [
            'name' => 'Amaterasu Robe',
            'price' => '40',
            'id' => '15013'
        ],
        [
            'name' => 'Neptune Helm',
            'price' => '40',
            'id' => '15000'
        ],
        [
            'name' => 'Neptune Wings',
            'price' => '40',
            'id' => '15001'
        ],
        [
            'name' => 'Neptune Aura',
            'price' => '40',
            'id' => '15002',
            'refine' => 'false'
        ],
        [
            'name' => 'Neptune Robe',
            'price' => '40',
            'id' => '15003'
        ],
        [
            'name' => 'Dark Devil Wings',
            'price' => '30',
            'id' => '3280'
        ],
        [
            'name' => 'Dark Devil Helm',
            'price' => '30',
            'id' => '3281'
        ],
        [
            'name' => 'Dark Devil Aura',
            'price' => '30',
            'id' => '3272',
            'refine' => 'false'
        ],
        [
            'name' => 'LDS Wings',
            'price' => '20',
            'id' => '3176'
        ],
        [
            'name' => 'LDS Helm',
            'price' => '20',
            'id' => '3177'
        ],
        [
            'name' => 'LDS Aura',
            'price' => '20',
            'id' => '3178',
            'refine' => 'false'
        ],
        [
            'name' => 'EMP Wings',
            'price' => '20',
            'id' => '3173'
        ],
        [
            'name' => 'EMP Helm',
            'price' => '20',
            'id' => '3174'
        ],
        [
            'name' => 'EMP Aura',
            'price' => '20',
            'id' => '3175',
            'refine' => 'false'
        ],
        [
            'name' => 'SA Wings',
            'price' => '20',
            'id' => '3170'
        ],
        [
            'name' => 'SA Helm',
            'price' => '20',
            'id' => '3172'
        ],
        [
            'name' => 'SA Aura',
            'price' => '20',
            'id' => '3173',
            'refine' => 'false'
        ],
        [
            'name' => 'Deviling Wings',
            'price' => '20',
            'id' => '5089'
        ],
        [
            'name' => 'Boots of Guidance',
            'price' => '20',
            'id' => '3163'
        ],
        [
            'name' => 'Bloody Roar',
            'price' => '20',
            'id' => '1265'
        ],
        [
            'name' => 'Executioner',
            'price' => '40',
            'id' => '1169'
        ],
        [
            'name' => 'Exile Card',
            'price' => '20',
            'id' => '4211',
            'refine' => 'false'
        ],
        [
            'name' => 'Lust Card',
            'price' => '20',
            'id' => '4210',
            'refine' => 'false'
        ],
        [
            'name' => 'Faith Card',
            'price' => '20',
            'id' => '4209',
            'refine' => 'false'
        ],
        [
            'name' => 'Envy Card',
            'price' => '20',
            'id' => '4208',
            'refine' => 'false'
        ],
        [
            'name' => 'Greed Card',
            'price' => '20',
            'id' => '4207',
            'refine' => 'false'
        ],
        [
            'name' => 'Obsessed Greed Card',
            'price' => '30',
            'id' => '4370',
            'refine' => 'false'
        ],
        [
            'name' => 'Master Exile Card',
            'price' => '30',
            'id' => '4374',
            'refine' => 'false'
        ],
        [
            'name' => 'Vengeful Envy Card',
            'price' => '30',
            'id' => '4371',
            'refine' => 'false'
        ],
        [
            'name' => 'Endless Faith Card',
            'price' => '30',
            'id' => '4372',
            'refine' => 'false'
        ],
        [
            'name' => 'Blood Lust Card',
            'price' => '30',
            'id' => '4373',
            'refine' => 'false'
        ],
        [
            'name' => 'Shinobi Sash',
            'price' => '20',
            'id' => '6510',
            'refine' => 'false'
        ],
        [
            'name' => 'Armaia Card',
            'price' => '25',
            'id' => '4347',
            'refine' => 'false'
        ],
        [
            'name' => 'Whikebain Card',
            'price' => '25',
            'id' => '4348',
            'refine' => 'false'
        ],
        [
            'name' => 'Erend Card',
            'price' => '25',
            'id' => '4349',
            'refine' => 'false'
        ],
        [
            'name' => 'Rawrel Card',
            'price' => '25',
            'id' => '4350',
            'refine' => 'false'
        ],
        [
            'name' => 'Kavac Card',
            'price' => '25',
            'id' => '4351',
            'refine' => 'false'
        ],
        [
            'name' => 'True GTB',
            'price' => '20',
            'id' => '31000',
            'refine' => 'false'
        ],
        [
            'name' => 'Omega wings',
            'price' => '20',
            'id' => '2288'
        ],
        [
            'name' => 'Alpha Wings',
            'price' => '20',
            'id' => '5041'
        ],
        [
            'name' => 'ArchAngel Wings',
            'price' => '20',
            'id' => '6012'
        ],
        [
            'name' => 'Shadow Craft Wings',
            'price' => '20',
            'id' => '5100'
        ],
        [
            'name' => 'Black Helm',
            'price' => '10',
            'id' => '5088'
        ],
        [
            'name' => 'Equality Wings',
            'price' => '10',
            'id' => '5037'
        ],
        [
            'name' => 'Lord Kahos Horn',
            'price' => '10',
            'id' => '5013'
        ],
        [
            'name' => 'Muffler',
            'price' => '10',
            'id' => '2504'
        ],
        [
            'name' => 'Manteau',
            'price' => '10',
            'id' => '2506'
        ],
        [
            'name' => 'Guard',
            'price' => '10',
            'id' => '2102'
        ],
        [
            'name' => 'Buckler',
            'price' => '10',
            'id' => '2104'
        ],
        [
            'name' => 'Shield',
            'price' => '10',
            'id' => '2106'
        ],
        [
            'name' => 'Serin Ring',
            'price' => '75',
            'id' => '2643',
            'refine' => 'false'
        ],
        [
            'name' => 'Job Changer',
            'price' => '150',
            'id' => '6506',
            'refine' => 'false'
        ],
        [
            'name' => 'Job Changer',
            'price' => '150',
            'id' => '6530',
            'refine' => 'false'
        ],
        [
            'name' => 'Job Changer',
            'price' => '150',
            'id' => '6531',
            'refine' => 'false'
        ],
        [
            'name' => 'Job Changer',
            'price' => '150',
            'id' => '6532',
            'refine' => 'false'
        ],
        [
            'name' => 'Pauldron',
            'price' => '50',
            'id' => '2514'
        ],
        [
            'name' => 'Zodiac Ring',
            'price' => '50',
            'id' => '3433',
            'refine' => 'false'
        ],
        [
            'name' => 'Mutual Wings',
            'price' => '30',
            'id' => '3169'
        ],
        [
            'name' => 'Token Armor',
            'price' => '20',
            'id' => '3000'
        ],
        [
            'name' => 'Token Armor',
            'price' => '20',
            'id' => '3001'
        ],
        [
            'name' => 'Token Armor',
            'price' => '20',
            'id' => '3002'
        ],
        [
            'name' => 'Token Helm',
            'price' => '20',
            'id' => '5061'
        ],
        [
            'name' => 'Token Helm',
            'price' => '20',
            'id' => '2278'
        ],
        [
            'name' => 'Token Helm',
            'price' => '20',
            'id' => '2265'
        ],
        [
            'name' => 'Fairy Wings',
            'price' => '40',
            'id' => '5086'
        ],
        [
            'name' => 'Angeling Wings',
            'price' => '30',
            'id' => '22572'
        ],
        [
            'name' => 'COB',
            'price' => '20',
            'id' => '3168'
        ],
        [
            'name' => 'Mithril',
            'price' => '20',
            'id' => '3166'
        ],
        [
            'name' => 'HPA',
            'price' => '20',
            'id' => '3164'
        ],
        [
            'name' => 'GG',
            'price' => '20',
            'id' => '3167'
        ],
        [
            'name' => 'RPA',
            'price' => '20',
            'id' => '3165'
        ],
    ]
];
