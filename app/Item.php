<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
			protected $fillable = [
      'item_name',
      'item_price',
      'item_qty',
      'item_tax',
      'item_status',
      'created_at'
    ];}
