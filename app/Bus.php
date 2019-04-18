<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = ['bus_name','bus_type','bus_registration_number','maximum_seats'];
}
