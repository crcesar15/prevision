<?php

use Faker\Generator as Faker;

$factory->define(App\Alert::class, function (Faker $faker) {
    return [
        'emotion' => $faker->randomElement(['Happy', 'Scared', 'Sad', 'Tired']),
        'status' => '1',
        'entity_id' => \App\Entity::all()->random()->id,
        'person_id' => \App\Person::all()->random()->id
    ];
});
