<?php

use Illuminate\Database\Seeder;

class BussesTableSeeder extends Seeder
{
    public function run()
    {
      $bus_1 = new \App\Bus();
      $bus_1->registration_number = 'T 245 BAS';
      $bus_1->name = 'HIGHER';
      $bus_1->type = 'Luxury';
      $bus_1->seats = '61';
      $bus_1->save();

      $bus_2 = new \App\Bus();
      $bus_2->registration_number = 'T 623 AVG';
      $bus_2->name = 'MORCOPOLO';
      $bus_2->type = 'Luxury';
      $bus_2->seats = '59';
      $bus_2->save();

      $bus_3 = new \App\Bus();
      $bus_3->registration_number = 'T 354 DKG';
      $bus_3->name = 'YOUTONG';
      $bus_3->type = 'Semi Luxury';
      $bus_3->seats = '60';
      $bus_3->save();
    }
}
