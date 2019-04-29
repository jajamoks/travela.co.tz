<?php

use Illuminate\Database\Seeder;

class SeatsTableSeeder extends Seeder
{
    public function run()
    {
      for ($i = 0; $i < 35; $i++) {
          $seat = App\Seat::create([
            'bus_id' => '1',
            'status' => '35',
          ]);
          $seat->save();
      }
    }
}
