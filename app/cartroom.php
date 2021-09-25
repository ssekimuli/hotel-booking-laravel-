<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cartroom extends Model
{
    protected $table="cartroom";
    protected $fillable = [
	'user','room','cartimg','package','days','fee','arrival','departure',
    ];
}
