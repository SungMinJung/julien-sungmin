<?php

use Faker\Generator as Faker;

$factory->define(App\Document::class, function (Faker $faker) {

    $user_min = App\User::min('id');
    $user_max = App\User::max('id');

    return [
        'type'  =>  $faker->randomElement(['notice', 'gallery', 'news']),
        'title' =>  $faker->streetName,
        'content'   => $faker->text,
        'main_image' => $faker->imageUrl($width = 640, $height = 480),
        'view_count' => $faker->randomDigitNotNull,
        'user_id' => $faker->numberBetween($user_min, $user_max),
    ];
});
