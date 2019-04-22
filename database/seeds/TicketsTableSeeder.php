<?php

use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

       for ($i = 0; $i < 26; $i++) {
           $ticket = App\Ticket::create([
               'bus_id' => '1',
               'route_id' => '1',
               'passanger_id' => '1',
               'issuedBy' => $faker->name,
               'bookedDate' => $faker->date,
               'additinalInfo' => $faker->text(40),
               'amount' => $faker->randomElement(['34000', '36000' , '37000']),
           ]);
           $ticket->save();
       }
    }
}
