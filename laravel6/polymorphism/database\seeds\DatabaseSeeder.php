<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Actor::class, 10)->create();

        $categories = [
            'Comédie',
            'Drame',
            'Action',
            'Fantastique',
            'Horreur',
            'Animation',
            'Espionnage',
            'Guerre',
            'Policier',
            'Pornographique',
        ];

        foreach($categories as $category) {
            Category::create(['name' => $category, 'slug' => Str::slug($category)]);
        }

        $ids = range(1, 10);

        factory(App\Film::class, 40)->create()->each(function ($film) use($ids) {
            shuffle($ids);
            $film->categories()->attach(array_slice($ids, 0, rand(1, 4)));
            shuffle($ids);
            $film->actors()->attach(array_slice($ids, 0, rand(1, 4)));
        });
    }
}
