<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'image' => str_random(200),
    ];
});
