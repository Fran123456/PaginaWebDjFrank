<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
   $title = $faker->sentence(4);
    return [
        //
        'name' 			=> $title,
        'body' 			=> $faker->text(500),
        'file' 			=> $faker->imageUrl($width = 1200, $height = 800),
        'url' 		=> $faker->text(30)
    ];
});
