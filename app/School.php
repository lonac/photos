<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['name','center_number','year','level'];

    public function excells()
    {
    	return $this->hasOne('App\Excell');
    }

    public function school_photos()
    {
    	return $this->hasMany('App\SchoolPhoto');
    }
}
