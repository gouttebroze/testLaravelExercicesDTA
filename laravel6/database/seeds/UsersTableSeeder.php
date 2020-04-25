<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 10; $i++) {
            $user = new User;
            $user->nom = $faker->Name;
            $user->email = $faker->unique()->email;
            $user->email_verified_at = $faker->nullable()->email_verified_at;
            $user->password = bcrypt('123456');
            //$user->remember_token = $faker->remember_token;
            $user->save();
        }
    }
}