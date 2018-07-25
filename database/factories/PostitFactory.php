<?php

use Faker\Generator as Faker;

$factory->define(Model\Postiti::class, function (Faker $faker) {
    return [
      'titulo' => $faker->name,
      'text' => str_random(200),
      'imagem' => "/" + str_random(10), // secret
      'flag' => $faker->boolean,

    ];
});
