<?php

use Illuminate\Database\Seeder;

class BussesTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

       for ($i = 0; $i < 5; $i++) {
           $bus = App\Bus::create([
             'seats' => $faker->randomElement(['61', '60', '62']),
             'name' => $faker->randomElement(['YOUTONG', 'HIGHER', 'MORCOPOLO']),
             'type' => $faker->randomElement(['Luxury', 'Semi-Luxury', 'Ordinary']),
             'registration_number' => 'T ' .$faker->numberBetween($min = 100, $max = 999). ' ' .Str::random(3),
           ]);
           $bus->save();
       }
    }
}
