<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'age' => $faker->numberBetween(10,30),
        'gender' => $faker->randomElement([1, 2]),
        'hobby' => $faker->randomElement(['reading', 'sports', 'music', 'traveling'])
    ];
});
