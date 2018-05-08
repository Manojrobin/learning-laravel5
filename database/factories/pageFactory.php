<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
            'postname' => $faker->company,
            'postcontent' => $faker->text,
            'postauthor' =>   $faker->name,
            'authoremail'  => $faker->unique()->safeEmail
    ];
});

