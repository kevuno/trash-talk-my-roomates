<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{

    // A complain belongs to a Roomate
    function roommate(){
    	return $this->belongsTo('App\Roommate');
    }
}
