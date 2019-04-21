<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
      'bus_name', 'price', 'arrival_time',
      'departure_time', 'fromPlace', 'toPlace',
    ];
}
