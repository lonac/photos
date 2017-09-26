<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excell extends Model
{
    protected $fillable=['id_no','firstname','middlename','surname','sex',];

    public function schools()
    {
    	return $this->belongsTo('App\School');
    }
}
