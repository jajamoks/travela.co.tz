<?php

use Illuminate\Database\Seeder;

class RoutesTableSeeder extends Seeder
{
    public function run()
    {
      $mbeya = new \App\Route();
      $mbeya->fromPlace = 'Mby';
      $mbeya->bus_id = '1';
      $mbeya->toPlace = 'Dar';
      $mbeya->arrival_time = '17:00:00';
      $mbeya->departure_time = '05:00:00';
      $mbeya->save();


      $arusha = new \App\Route();
      $arusha->fromPlace = 'Aru';
      $arusha->bus_id = '1';
      $arusha->toPlace = 'Dar';
      $arusha->arrival_time = '17:00:00';
      $arusha->departure_time = '06:30:00';
      $arusha->save();


      $dar = new \App\Route();
      $dar->bus_id = '2';
      $dar->toPlace = 'Aru';
      $dar->arrival_time = '17:00:00';
      $dar->departure_time = '06:15:00';
      $dar->fromPlace = 'Dar';
      $dar->save();
    }
}
