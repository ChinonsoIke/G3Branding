<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph(1),
        'caption' => $faker->word,
        'permalink' => $faker->slug,
        'image' => $faker->randomElement(['p1.jpg', 'p2.jpg', 'p3.jpg']),
        'p_content' => $faker->sentence(200),
        'featured' => true,
        'post_type' => 'post',
        'enabled' => true
    ];
});
