<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

       for ($i = 0; $i < 356; $i++) {
           $ticket = App\Ticket::create([
               'bus_id' => '1',
               'to_place' => $faker->city,
               'from_place' => $faker->city,
               'booked_date' => $faker->date,
               'customer_name' => $faker->name,
               'amount' => $faker->randomElement(['34000', '37000']),
           ]);
           $ticket->save();
       }
    }
}
