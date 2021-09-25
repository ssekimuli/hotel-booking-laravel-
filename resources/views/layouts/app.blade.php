 <!DOCTYPE html>
<html>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>books</title>
 <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 <!-- Custom styles for this template-->
  <link href="http://127.0.0.1:8000/css/admin.min.css" rel="stylesheet">
  <link href="http://127.0.0.1:8000/css/bootstrap.css" rel="stylesheet">
   <link href="http://127.0.0.1:8000/css/custome.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    .top-socail-link ul li{
    list-style: none;
    text-decoration: none;
}
.top-socail-link ul li a{
    color: white;
    text-decoration: none;
}
        html, body {
            background-color: #fff;
            color: #0a0a0a;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
<body>
    <!-------topbar----->
<div class="topbar text-center p-2" style="background:grey;height: 3.975rem;">
    <div class="justify-content-center">
        <a href="" target="_blank">
            <i class="fab fa-facebook-f mr-3"></i>
        </a>&nbsp
        |<a href="" target="_blank">
            <i class="fab fa-google-plus-g mr-3"></i>
        </a>
        |<a href="" target="_blank">
            <i class="fab fa-twitter mr-3"></i>
      </a>
        |&nbsp&nbsp&nbsp<i class="fas fa-fw fa-phone"></i><i style="color: #0a0a0a">+256&nbsp757541477</i>&nbsp&nbsp

    </div>   
</div>
    <!-----end topbar------->
    <!--------navigation-------->
<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top" style="z-index:2">
<a class="navbar-brand font-weight-bold ml-3 text-white" href="welcome">BOOKS</a>
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
        <li class="nav-item">
           <a href="{{ url('books') }}" class="btn btn-sm btn-warning">BOOK</a>
        </li>
    </ul>
  </div>
</nav>
</body>
</html>