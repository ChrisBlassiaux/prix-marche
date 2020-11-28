<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->randomDigit,
        'category_id' => Category::all()->random()->id,
        'image' => "https://res.cloudinary.com/dh2bqrjaj/image/upload/v1606482946/product_img.png",
        'description' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});
