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
               'issuedBy' => $faker->name,
               'fromPlace' => $faker->city,
               'bookedDate' => $faker->date,
               'customerName' => $faker->name,
               'additinalInfo' => $faker->text(40),
               'amount' => $faker->randomElement(['34000', '36000' , '37000']),
               'toPlace' => $faker->randomElement(['Arusha', 'Dar es salaam']),
           ]);
           $ticket->save();
       }
    }
}
