<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

       for ($i = 0; $i < 7; $i++) {
           $ticket = App\Ticket::create([
               'bus_id' => '1',
               'route_id' => '1',
               'passenger_id' => '1',
               'issuedBy' => $faker->name,
               'bookedDate' => $faker->date,
               'additionalInfo' => $faker->text(40),
           ]);
           $ticket->save();
       }
    }
}
