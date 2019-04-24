<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = ['name', 'number', 'email'];

    public function ticket(){
      return $this->hasOne(Ticket::class);
    }
}
