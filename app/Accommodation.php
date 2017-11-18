<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    public function rooms()
    {
    	return $this->hasMany('App\Room');
    }
}
