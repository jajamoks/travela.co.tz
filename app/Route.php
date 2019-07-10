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

    public function Bus()
    {
        return $this->belongsToMany(Bus::class, 'schedules', 'route_id', 'bus_id');
    }

    public function schedule()
    {
      return $this->belongsToMany(Schedule::class);
    }
}
