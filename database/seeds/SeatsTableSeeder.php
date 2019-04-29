<?php

use Illuminate\Database\Seeder;

class SeatsTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

      $no = App\Bus::all();
      $seat = $no->seats

      // for ($i = 0; $i < 48; $i++) {
      if ($no < $seat) {
          $seat = App\Seat::create([
            'bus_id' => '1',
            'status' => $faker->randomElement(['Available', 'Booked', 'Processing'])
          ]);
          $seat->save();
      }
    }
}
