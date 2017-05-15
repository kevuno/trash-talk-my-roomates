<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roommate extends Model
{
    // A roomate has many complains
    function complains(){
    	return $this->hasMany('App\Complain');
    }
}
