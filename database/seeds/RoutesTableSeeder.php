<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

       for ($i = 0; $i < 5; $i++) {
           $route = App\Route::create([
             'bus_id' => $faker->randomElement(['1', '2', '3']),
             'toPlace' => $faker->randomElement(['Ars', 'Mby', 'Dar']),
             'fromPlace' => $faker->randomElement(['Ars', 'Mby', 'Dar']),
             'amount' => $faker->randomElement(['34000', '36000' , '37000']),
             'arrival_time' => $faker->randomElement(['17:00:00', '19:00:00', '21:00:00']),
             'departure_time' => $faker->randomElement(['05:00:00', '07:00:00', '06:00:00']),
           ]);
           $route->save();
       }
    }
}
