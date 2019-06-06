<?php

namespace App;

use App\Bus;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
      'bus_id', 'price', 'arrival_time',
      'departure_time', 'fromPlace', 'toPlace',
    ];

    // public function bus(){
    //   return $this->hasMany(Bus::class);
    // }
}
