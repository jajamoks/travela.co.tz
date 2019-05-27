<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = ['name','type','registrationNumber','seats'];

    public function users()
	  {
	  	return $this->belongsToMany(User::class);
	  }
}
