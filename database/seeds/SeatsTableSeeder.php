<?php

use Illuminate\Database\Seeder;

class SeatsTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();
      
      for ($i = 0; $i < 35; $i++) {
          $seat = App\Seat::create([
            'bus_id' => '1',
            'status' => $faker->randomElement(['Available', 'Booked', 'In Process'])
          ]);
          $seat->save();
      }
    }
}
