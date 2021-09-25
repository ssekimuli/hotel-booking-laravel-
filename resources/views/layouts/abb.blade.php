<?php
use App\Http\Controllers\bookingController;
$total=bookingController::cart_items();
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'books') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <!-- Custom styles for this template-->
  <link href="{{asset('css/admin.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/custome.css')}}" rel="stylesheet">
    <!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
          <!-------topbar----->
<div class="topbar text-center p-2" style="background:grey;height: 3.975rem;">
    <div class="justify-content-center">
        <a href="" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>
        <a href="" target="_blank">
            <i class="fab fa-google-plus-g mr-3"></i>
        </a>
        <a href="" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
      </a>
        <i style="color: #0a0a0a">+256&nbsp757541477</i>&nbsp&nbsp

    </div>   
</div>
    <!-----end topbar------->
    <!--------navigation-------->
<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top" style="z-index:2">
<a class="navbar-brand font-weight-bold ml-3 text-white" href="welcome">BOOKS</a>
 <a href="{{ url('cart') }}" class="ml-4">
    <i class="fas fa-shopping-cart mr-3 fa-sm fa-fw">&nbsp({{$total}})</i>
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-5">
         <li class="nav-item active">
            <a class="nav-link ml-3 text-danger" href="/"><b>Home</b><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="{{ url('rooms') }}"><b>Room</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="{{ url('service') }}"><b>Service</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="{{ url('contact') }}"><b>Contact us</b></a>
        </li>
         <li class="nav-item">
            <a class="nav-link text-danger" href="{{ url('profile') }}"><b>Profile</b></a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-danger" href="{{ url('aboutus') }}"><b>About us</b></a>
        </li>
       <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <li class="nav-item"><i class="text-warning">
        {{ Auth::user()->givenname }} @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
      </i>
              
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-out" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('allbooks')}}">
                  <i class="fas fa-tags fa-sm fa-fw mr-2 text-gray-400"></i>
                  Books
                </a>
                <a class="dropdown-item" href="{{route('myprofile')}}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                 Profile
                </a>
                <a class="dropdown-item" href="{{route('myroom')}}">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                 My room
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}">
                  <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                 logout
                </a>
              </div>
            </li>
    </ul>

  </div>
</nav>
    <!--------end navigation----->
       @yield('content')
    </div>
 
    <!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
