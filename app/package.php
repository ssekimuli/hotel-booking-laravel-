<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $table="package";
    protected $fillable = [
        'package','price','sroom', 
    ];
}
