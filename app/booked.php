<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booked extends Model
{
    //
    protected $table="booked";
    protected $fillable=[
    	'user','room','payment_method','payment_status','package','address','days','fee','arrival','departure', 	
    ];
}
