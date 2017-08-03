<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
	//scope
    public function scopeSunday($query){
    	return $query->where( "type", "sunday" );
    }
    public function scopeFindSunday($query,$id){
    	return $query->where( "type", "sunday" )->where( "id", $id );
    }
}
