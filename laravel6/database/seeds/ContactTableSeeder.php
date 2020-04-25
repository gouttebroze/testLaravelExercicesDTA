<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Contact::create(
            [
                'firstname' => 'Dupont',
                'lastname' => 'Henry',
                'mail' => 'hg@.us',
                'phone' => '00000'
            ]
        );
        App\Contact::create(
            [
                'firstname' => 'Joey',
                'lastname' => 'Ramones',
                'mail' => 'ram@.us',
                'phone' => '00111'
            ]
        );
        App\Contact::create(
            [
                'firstname' => 'Dup',
                'lastname' => 'Fragast',
                'mail' => 'gdfe@.us',
                'phone' => '00000'
            ]
        );
    }
}
