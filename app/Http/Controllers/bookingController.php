<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facade\Storage;
use Illuminate\Http\Request;
use App\User;
use App\room;
use App\categoryroom;
use App\amenities;
use App\package;
use App\cartroom;
use App\role;
use auth;
use DB;
use App\booked;
use Carbon\Carbon;
use Session;

class bookingController extends Controller
{
     public function admindash()
    {
    	return view('dash.admindash');
    }

     public function clients()
    {
        $clients=user::all();
    	return view('dash.client', compact('clients'));
    }

     public function role()
    { 
        $rol=role::all();
        return view('dash.role', compact('rol'));
    }

     public function amenities()
    {
        $amen=amenities::all();
        return view('dash.amenities', compact('amen'));
    }

    public function edit($id)
    {
        return view('dash.edit');
    }
     public function category()
    {
        $category=categoryroom::all();
    	return view('dash.category', compact('category'));
    }

     public function package()
    {   
        $packge=package::all();
        $rooms=room::all();
        $am=amenities::all();
        $crtyroom=categoryroom::all();
    	return view('dash.package' ,compact(['am','crtyroom','rooms','packge']));
    }

     public function addroom()
    {
        $rooms=room::all();
        $am=amenities::all();
        $crtyroom=categoryroom::all();
    	return view('dash.addroom',compact(['am','crtyroom','rooms']));
    }

     public function available()
    {
    	return view('dash.available');
    }

     public function today()
    {
    	return view('dash.today');
    }

     public function tomorrow()
    {
    	return view('dash.tomorrow');
    }

     public function yesterday()
    {
    	return view('dash.yesterday');
    }

     public function pending()
    {
    	return view('dash.pending');
    }

     public function week()
    {
    	return view('dash.week');
    }

     public function month()
    {
    	return view('dash.month');
    }

     public function year()
    {
    	return view('dash.year');
    }

     public function service()
    {
        return view('service');
    }

     public function room()
    {
        $tdy=Carbon::today()->format('d-m-Y');
        //$ctoday=\Carbon::createFromFormat('d/m/Y');
        $tm=Carbon::tomorrow()->format('d-m-Y ');
        $datdiff=round(abs(strtotime($tdy)-strtotime($tm))/86400);
        $ourrooms=room::all();
        return view('rooms', compact(['ourrooms','tdy','tm','datdiff']));
    }

     public function roomcart(Request $Request)
    {

        if (auth::check()){
            $user=auth::user()->id;
            $room=$Request->input('rmid');
            //$package=$Request->input('rmid');
            $cartimg1=$Request->input('cartimg');
            //dd($cartimg);
            $days=$Request->input('ndays');
            $fee=$Request->input('charge')*$days;
            $arrival=$Request->input('stdate');
            $departure=$Request->input('enddate');

            $booking=cartroom::create([
                'user'=>$user,
                'room'=>$room,
                'cartimg'=>$cartimg1,
                'days'=>$days,
                'fee'=>$fee,
                'arrival'=>$arrival,
                'departure'=>$departure,
            ]);
           // $userid=auth::user()->id;
            //$listbkg=cartroom::where('user',$userid)->get();
           // return view('client.roomcart', compact(['listbkg']));
            return redirect('/cart');
        }
        else{
            return redirect('/login');
        }
        
    }

     public function cartdelete($id){

      $deleroom=cartroom::find($id);
       // dd($deleroom);
     $deleroom->delete();
     //return redirect('/rooms');
     return back();
    }
     public function contactus()
    {

        return view('contactus');
    }

     public function profile()
    {
        return view('profile');
    }

     public function aboutus()
    {
        return view('aboutus');
    }

     public function logout()
    {
        auth::logout();
        return view('welcome');
    }

//payment controller
    public function cart(){
        $userid=auth::user()->id;
        $useremail=auth::user()->email;
        $listbkg=cartroom::where('user',$userid)->get();
        //$rname=room::where('room',$userid)->get();
        $totalfee=cartroom::where('user',$userid)->sum('fee');

       // dd($listbkg);
        return view('client.carts', compact(['listbkg','totalfee','useremail']));
    }

    static function cart_items(){
        $userid=auth::user()->id;
        //dd($userid);
        return cartroom::where('user',$userid)->count();

    }

    public function pay(Request $Request){
        $userid=auth::user()->id;
        $useraddress=auth::user()->nationality;
        $tel=$Request->input('telephone');
        $mp="card";
        $cart2bked=cartroom::where('user',$userid)->get();
        $pstatus="pending";

         $usersur=auth::user()->surname;
         $usergn=auth::user()->givenname;
        $mbks=booked::where('user',$userid)->get();
        //$fg=json_encode($cart2bked);
        //dd($fg);

        foreach ($cart2bked as $bked) {
           
            $booked=booked::create([
                'user'=>$userid,
                'room'=>$bked['room'],
                'payment_method'=>$mp,
                'payment_status'=>$pstatus,
                'package'=>$bked['package'],
                'address'=>$useraddress,
                'days'=>$bked['days'],
                'fee'=>$bked['fee'],
                'arrival'=>$bked['arrival'],
                'departure'=>$bked['departure'],
            ]);
        }

         $cartrve=cartroom::where('user',$userid)->delete();
        //return view('client.book' ,compact('mbks','usersur','usergn'));
         return redirect('/verify');
    }

    public function verify(){
        echo "hello verify";
    }
    //end
    public function myroom(){
        $userid=auth::user()->id;
        $usersur=auth::user()->surname;
         $usergn=auth::user()->givenname;
        $mbks=booked::where('user',$userid)->get();
        //$userid=DB::room()->id;
        //$cmbks=room::where('id',2)->get();
        //dd($cmbks);
        return view('client.book',compact('mbks','usersur','usergn'));
    }

}
