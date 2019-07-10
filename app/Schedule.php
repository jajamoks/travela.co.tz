<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'bus_id', 'route_id', 'scheduledDate'
      ];

    public function routes()
    {
      return $this->belongsToMany(Route::class);
    }

    public function busses()
    {
      return $this->belongsTo(Bus::class);
    }
}
