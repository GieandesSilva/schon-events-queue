<?php

use App\Product;
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

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'stock' => rand(0, 100),
        'stock_max' => rand(0, 100),
        'price_sale' => rand(1, 100),
        'price_purchase' => rand(1, 100)
    ];
});
