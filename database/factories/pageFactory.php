<?php
use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {

    return [
            'name' => $faker->company,
            'content' => $faker->text,
            'user_id' => function () {
            return factory(App\User::class)->create()->id;
             },
             'image' => $faker->name.'jpg',
             'post_type'=> 'public'       
    ];
});

