<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excell extends Model
{
    protected $fillable=['idno','school_id','firstname','middlename','surname','sex',];

    public function schools()
    {
    	return $this->belongsTo('App\School','school_id');
    }

    public function students()
    {
    	return $this->hasOne('App\Student');
    }

    public function school_photos()
    {
    	return $this->hasOne('App\SchoolPhoto');
    }
}
