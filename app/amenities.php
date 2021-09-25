<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amenities extends Model
{
    	protected $table="amenities";
    protected $fillable = [
        'items',
    ];
}
