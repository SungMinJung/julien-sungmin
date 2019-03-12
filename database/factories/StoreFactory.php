<?php

use Faker\Generator as Faker;

$factory->define(App\Store::class, function (Faker $faker) {
    return [
        'area'  =>  $faker->randomElement(['서울', '경기', '인천','강원','전남','전북','충북','충남','경북','경남','대구','대전','울산','부산','광주','세종','제주']),
        'title' =>  $faker->streetName,
        'address' => $faker->streetAddress,
    
    ];
});
