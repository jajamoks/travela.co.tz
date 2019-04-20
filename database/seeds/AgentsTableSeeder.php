<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AgentsTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

       for ($i = 0; $i < 7; $i++) {
           $agent = App\Agent::create([
               'name' => $faker->name,
               'city' => $faker->city,
               'number' => $faker->phoneNumber,
               'email' => $faker->userName .'@bts.me',
           ]);
           $agent->save();
       }
    }
}
