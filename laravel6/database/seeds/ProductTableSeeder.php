<?php

use App\Product;
use Illuminate\Database\Seeder;

use App\User;

class ProductTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->artist_name = $faker->artist_name;
            $product->product_name = $faker->product_name;
            $product->desc_product = $faker->desc_product;
            $product->price_product = $faker->price_product;
            $product->img_filename = $faker->img_filename;
            $product->save();
        }
    }
}