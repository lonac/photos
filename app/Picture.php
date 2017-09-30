<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = ['school_id','image'];

    public function schools()
    {
    	return $this->belongsTo('App\School');
    }
}
