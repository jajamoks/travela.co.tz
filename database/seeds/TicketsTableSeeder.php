<?php
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
      $faker = Faker\Factory::create();

       for ($i = 0; $i < 7; $i++) {
           $ticket = App\Ticket::create([
               'route_id' => '1',
               'passenger_id' => $faker->randomElement([1, 2, 3, 4, 5]),
               'issuedBy' => $faker->name,
               'bookedDate' => $faker->date,
               'additionalInfo' => $faker->text(40),
           ]);
           $ticket->save();

           $passenger = App\Passenger::create([
              'name' => $faker->name,
              'number' => 123456789,
              'ticket_id' => $ticket->id
           ]);
           $passenger->save();
       }
    }
}
