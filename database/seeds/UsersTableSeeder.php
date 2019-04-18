<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

       for ($i = 0; $i < 1; $i++) {
           $user = App\User::create([
               'name' => $faker->name,
               'email' => 'admin@bts.me',
               'password' => bcrypt('qazwsx'),
           ]);
           $user->save();
       }
    }
}
