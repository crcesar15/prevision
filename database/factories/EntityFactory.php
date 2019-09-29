<?php

use Faker\Generator as Faker;

$factory->define(App\Entity::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'location' => $faker->address
    ];
});
