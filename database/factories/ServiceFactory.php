<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
  $title = $faker->sentence(4);
    return [
      'name' 			=> $title,
      'body' 			=> $faker->text(300),
      'file' 			=> $faker->imageUrl($width = 1200, $height = 800),
    ];
});
