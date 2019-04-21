<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    public function run()
    {
      $arusha = new \App\Route();
      $arusha->from_place = 'Arusha';
      $arusha->bus_name = '1';
      $arusha->to_place = 'Dar es salaam';
      $arusha->arrival_time = '17:00:00';
      $arusha->departure_time = '06:00:00';
      $arusha->save();


      $dar = new \App\Route();
      $dar->bus_name = '2';
      $dar->to_place = 'Arusha';
      $dar->arrival_time = '17:00:00';
      $dar->departure_time = '06:00:00';
      $dar->from_place = 'Dar es salaam';
      $dar->save();
    }
}
