@extends('layouts.abb')

@section('content')
   <!-------carousel--->
<div class="justify-content-center row">
  <div class="card col-md-6 col-lg-6 shadow  bg-light align-items-center" style="opacity:0.8; background:#0a0a0a;">


    <h6 class="card-title text-sm text-warning text-bold h3"><b>MY ROOM</b></h6>
    <hr class="sidebar-divider">
    <div class="text-warning row mb-4">
      <i class="fas fa-wifi ml-2">&nbsp&nbsp<b class="text-secondary">wifi</b></i>
      <i class="fas fa-car ml-3">&nbsp<b class="text-secondary">Parking</b></i>
       <i class="fas fa-camera ml-3">&nbsp<b class="text-secondary">Cctv security</b></i>
    </div>
   @foreach($mbks as $myb)
     <div class="col-md-6 col-lg-6">
       <img src="{{asset('storage/gallery/1rm1.jpg')}}" class="img-thumbnail card-img h-60" alt="...">
  </div>
    <div class="">
       <ul class="list-unstyled list-inline text-dark">
      <li class="list-inline-item"><b class="text-warning">NAME:</b>&nbsp&nbsp<i class="text-dark text-decoration-underline">{{$usersur}}&nbsp&nbsp{{$usergn}}</i></li><br><br>
      <li class="list-inline-item"><b class="text-warning">FEE&nbsp&nbsp&nbsp&nbsp&nbsp:</b>&nbsp&nbsp{{$myb->fee}}/=</li>
      <li class="list-inline-item mr-5"><b class="text-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDAYS:</b>&nbsp&nbsp{{$myb->days}}</li><br>
      <li class="list-inline-item"><b class="text-warning">ARRIVE:</b>&nbsp&nbsp{{$myb->arrival}}</li>
      <li class="list-inline-item"><b class="text-warning">Dept:</b>&nbsp&nbsp{{$myb->departure}}</li>
    
      <li><b class="text-uppercase">payment status:</b>&nbsp&nbsp{{$myb->payment_status}}</li>
        <hr>
    </ul>
    </div>
   @endforeach
    <hr>
    <I class="text-sm text-primary">"THANK YOU FOR BOOKING WITH US"</I>
</div>
</div>
<!------carousel end------>
@endsection
 
</body>
 </html>
