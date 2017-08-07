<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = 'process';

    //scope
    public function scopeLevel( $query, $process ){
    	return $query->where( "level", $process )->get();
    }

    public function scopeDeletePE( $query, $id ){
    	return $query->where( "level", 'POST ENCOUNTER' )->where( "id", $id )->delete();
    }
}
