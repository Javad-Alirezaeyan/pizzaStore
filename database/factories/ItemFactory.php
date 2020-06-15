<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;
use \Illuminate\Support\Facades\DB;

$factory->define(Item::class, function (Faker $faker) {

    //echo $faker->image(storage_path('app/'.ImagePath)); exit;
    return [
        //
        'i_title' => $faker->firstName,
        'i_description' => $faker->text(100),
        'i_price' =>  $faker->numberBetween(1, 20),
        'i_mainImage' => $faker->image(storage_path('app/'.ImagePath), 200,300, null, false, false, "food"),
        'i_it_id' => function () {
            return \App\ItemType::all()->random()->it_id;
        },
    ];
});
