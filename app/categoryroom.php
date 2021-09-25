<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryroom extends Model
{
   	protected $table="categoryroom";
    protected $fillable = [
        'categoryroom',
    ];

    //public function room(){

    	//return $this->hasMany('App\room','categoryroom');
  //  }
}
