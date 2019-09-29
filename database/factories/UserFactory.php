<?php

use Illuminate\Support\Str;
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
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'status' => 'active',
        'picture' => \Faker\Provider\Image::Image(storage_path() . '/app/public/profile', 200, 200, 'people', false),
        'password' => bcrypt('123456'), // 123456
        'role_id' => \App\Role::all()->random()->id,
        'remember_token' => Str::random(10),
    ];
});
