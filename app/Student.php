<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['school_id','excel_id'];

    public function excells()
    {
    	return $this->belongsTo('App\Excell');
    }
}
