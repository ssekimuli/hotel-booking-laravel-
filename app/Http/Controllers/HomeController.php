<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use auth;
use App\booked;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

     public function books()
    {
        $userid=auth::user()->id;
        $usersur=auth::user()->surname;
         $usergn=auth::user()->givenname;
        $mbks=booked::where('user',$userid)->get();
        return view('client.book', compact('mbks','usergn','usersur'));
    }

     public function allbooks()
    {
        $usersur=auth::user()->surname;
         $usergn=auth::user()->givenname;
        return view('client.allbooks', compact('usersur','usergn'));
    }

     public function myprofile()
    {
        return view('client.myprofile');
    }

}
