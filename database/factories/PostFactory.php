<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
   $title = $faker->sentence(4);
    return [
      'category_id' 	=> rand(1,5),
      'name' 			=> $title,
      'slug' 			=> str_slug($title),
      'excerpt' 		=> $faker->text(200),
      'body' 			=> $faker->text(500),
      'file' 			=> $faker->imageUrl($width = 1200, $height = 800),
      'status'        => $faker->randomElement(['DRAFT', 'PUBLISHED'])
    ];
});
