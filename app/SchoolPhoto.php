<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolPhoto extends Model
{
    protected $fillable = ['school_id','image'];

    public function schools()
    {
    	return $this->belongsTo('App\School');
    }

    public function excells()
    {
    	return $this->belongsTo('App\Excell');
    }
}
