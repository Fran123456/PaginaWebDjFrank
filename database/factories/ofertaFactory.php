<?php

use Faker\Generator as Faker;

$factory->define(App\Oferta::class, function (Faker $faker) {
  $title = $faker->sentence(4);
    return [
        //
        'name' 			=> $title,
        'body' 			=> $faker->text(7),
        'precio' 		=> $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100)
    ];
});
