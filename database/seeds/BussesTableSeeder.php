<?php

use Illuminate\Database\Seeder;

class BussesTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();
        
        for ($i = 0; $i < 1; $i++) {
          $bus = App\Bus::create([
            'route_id'=> '1',
            'seats' => '48',
           'name' => $faker->randomElement(['YOUTONG', 'HIGHER', 'MORCOPOLO']),
           'type' => $faker->randomElement(['Luxury', 'Semi-Luxury', 'Ordinary']),
           'registrationNumber' => 'T ' .$faker->numberBetween($min = 100, $max = 999). ' ' .Str::random(3),
          ]);
          $bus->save();

        }
        
        for ($i = 0; $i < $bus->seats; $i++) {
          $seats = App\Seat::create([
              'bus_id' => '1',
              'status' => $faker->randomElement(['Available', 'Booked', 'Processing']),
          ]);
          $seats->save();
        }

    }
}
