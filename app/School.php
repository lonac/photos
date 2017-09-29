<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['name','center_number',];

    public function excells()
    {
    	return $this->hasOne('App\Excell');
    }

    public function pictures()
    {
    	return $this->hasOne('App\Picture');
    }
}
