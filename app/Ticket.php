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

  public function passenger()
    {
        return $this->belongsTo(Passenger::class);
    }

  public function route()
    {
        return $this->belongsTo(Route::class);
    }

  public function bus()
    {
        return $this->belongsTo(Bus::class);
    }

}
