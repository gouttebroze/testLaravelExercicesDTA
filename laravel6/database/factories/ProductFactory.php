<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AppProduct;
use Faker\Generator as Faker;


        $factory->define(Product::class, function (Faker $faker) {
            return [
                'title' => $faker->sentence(2, true),
                'year' => $faker->year,
                'description' => $faker->paragraph(),
            ];
        });
    
