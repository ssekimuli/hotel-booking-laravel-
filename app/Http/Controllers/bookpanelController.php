<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\categoryroom;
use App\role;
use App\package;
use App\room;
use App\amenities;

class bookpanelController extends Controller
{
    public function addcategory (Request $request){
    	$cat = $request->input('category');
    	//dd($cat);
    	$catroon=categoryroom::create([
    		'categoryroom'=>$cat,
    	]);

    	return back()->with('success', 'categoryroom added');
    }

     public function addrole (Request $request){
    	$duty = $request->input('role');
    	//dd($cat);
    	$duties=role::create([
    		'role'=>$duty,
    	]);

    	return back()->with('success', 'role added');
    }

    public function addpackage (Request $request){
      $package = $request->input('package');
      $charge = $request->input('charge');
      $roomno =$request->input('rmno');
      $room= $request->get('prooms');
      $catgry=$request->get('category');
      $amd=$request->get('amenit');
    	//dd($cat);
    	$packages=package::create([
        'package'=>$package,
        'price'=>$charge,
        'room_no'=>$roomno,
        'categoryroom'=>$catgry,
        'room'=>$room,
        'amenities'=>$amd, 
    	]);

    	return back()->with('success', 'package added');
    }

     public function add_amenties (Request $request){
    	$amt = $request->input('amenity');
    	//dd($cat);
    	$amts=amenities::create([
    		'items'=>$amt,
    	]);

    	return back()->with('success', 'amenities added');
    }

     public function addrooms (Request $req) {

       $req->validate([
           'rmname'=>'required',
           'img'=>'required',
           'charge'=>'required',
           'rmno'=>'required'
       ]);

        $nameroom = $req->input('rmname');
        $price = $req->input('charge');
        $noroom = $req->input('rmno');
        $ctyroom = $req->get('category');
        $amdties = $req->get('amenit');
        // dd($imageroom);

       if ($req->hasFile('img')) {
           $orig_roomimage = $req->img->getClientOriginalName();
           $req->img->storeAs('/public/gallery/', $orig_roomimage);

           $roomdetails= room::create([
            'name'=>$nameroom,
            'image'=>$orig_roomimage,
            'price'=>$price,
            'room_no'=>$noroom,
            'categoryroom'=>$ctyroom,
            'amenities'=>$amdties,
         ]);
 
        }

      
      return back()->with('success','room added to databases');
    }

    public function editroom(Request $request, $id){

      $nameroom = $request->input('rmname');
       $price = $request->input('charge');
      $noroom = $request->input('rmno');
       $ctyroom = $request->get('category');
       $amdties = $request->get('amenit');

      $edit=room::where('id',$id)->update([
'name'=>$nameroom,
'price'=>$price,
'room_no'=>$noroom,
'categoryroom'=>$ctyroom,
'amenities'=>$amdties,

      ]);
     //dd($RMid);
   return back()->with('success','room updated to databases');  
    }

    public function del($id){

      $deleroom=room::find($id);
      $deleroom->delete();

     return back();
    }
}
