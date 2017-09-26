<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excell extends Model
{
    protected $fillable=['id-no','school_id','firstname','middlename','surname','sex',];

    public function schools()
    {
    	return $this->belongsTo('App\School');
    }
}
