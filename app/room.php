<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class room extends Model
{
   protected $table="room";
   protected $fillable = [
   'name','image','price','room_no','categoryroom','amenities','description',
	];

	//public function category(){

		//return $this->belongsTo('App\categoryroom','id');
	//}
}
