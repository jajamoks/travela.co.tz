<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
  protected $fillable = [
    'bus_id', 'status'
  ];
}
