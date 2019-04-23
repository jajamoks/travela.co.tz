<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
  protected $dates = ['bookedDate'];

  protected $fillable = [
    'route_id', 'additionalInfo', 'bookedDate',
    'issuedBy', 'passenger_id'
  ];

}
