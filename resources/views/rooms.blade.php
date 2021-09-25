  @include('layouts.app')
   <!-------carousel--->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner wow fadeIn" style="opacity: 0.5px; z-index:1;">
	  <div class="carousel-item active">
	    <img src="{{asset('storage/gallery/1.jpg')}}" class="d-block w-100"style="height: 350px;">
<div class="carousel-caption">
<div class="card shadow mb-5 bg-light" style="opacity:0.8; background:#0a0a0a;">
<form class="form-group form-inline p-2 mt-3 justify-content-center">
	<p class="text-center text-warning h5 p-3"><b>CHECK AVAILABILITY</b></p>
 <hr class="sidebar-divider" style="color: black;">
 <div class="row justify-content-between w-100">
 	<label class="control-label ml-3"><b class="text-dark font-weight-bold">Check in</b></label>
  <input type="date" name="" class="btn-sm btn btn-dark">
  	<label class="control-label"><b class="ml-2 text-dark font-weight-bold">Check out</b></label>&nbsp&nbsp
	<input type="date" name="" class="btn-sm btn btn-dark">  
	<input type="submit" name="" value="CHECK" class="btn-sm btn text-dark font-weight-bold" style="background:orange;">
 </div>
</form>
</div>
</div>
 </div> 
 
	</div>
</div>
<!------carousel end------>
<div class="mt-2">
<div class="card col-md-12 col-lg-12 shadow">
    <div class="row no-gutters">
    <div class="col-md-7">
      <div class="card-body justify-content-center">
          <h6 class="card-title text-sm text-dark">FACILITIES</h6>
          <hr class="sidebar-divider">
          <div class="text-warning row">
            <i class="fas fa-wifi ml-2">&nbsp&nbsp<b class="text-secondary">wifi</b></i>
            <i class="fas fa-car ml-3">&nbsp<b class="text-secondary">Parking</b></i>
             <i class="fas fa-camera ml-3">&nbsp<b class="text-secondary">Cctv security</b></i>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="p-5 shadow-none bg-light container-fluid mb-0">
<div class="text-center mb-5 mt-2">
	<span class="border border-dark p-3 pl-5 pr-5 shadow-lg text-dark"><a href=""><b>VIEW ALL ROOMS</b></a></span>
</div>
<div class="d-flex flex-wrap justify-content-between">
 @foreach($ourrooms as $our)
	<div class="card mb-3 shadow" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img src="{{asset('storage/gallery/'.$our->image)}}" class="img-thumbnail card-img h-100" alt="...">
    </div>
    <div class="col-md-7">
      <div class="card-body">
       <form method="post" action="{{url('roomcart')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="cartimg" value="{{$our->image}}">
        <input type="hidden" name="rmid" value="{{$our->id}}">
          <h5 class="card-title">{{$our->name}}</h5>
        <hr class="sidebar-divider">
        <ul>
          <i class="text-success">Available</i>
          <li>From:&nbsp<b class="text-danger">{{$tdy}}</b><input type="hidden" name="stdate" value="{{$tdy}}">&nbspTo:&nbsp<b class="text-danger">{{$tm}}</b><input type="hidden" name="enddate" value="{{$tm}}"></li>
          <li>Days:{{$datdiff}}</li><input type="hidden" name="ndays" value="{{$datdiff}}">
          <li>Room:{{$our->room_no}}</li>
          <li>{{$our->price}}/=<input type="hidden" name="charge" value="{{$our->price}}"></li>
        </ul>
        <div class="row justify-content-between">
          <button class="btn-sm btn-info">details</button>
          <button class="btn-warning text-right mr-2" type="submit">Add to Cart</button>
        </div>
       </form>
      </div>
    </div>
  </div>
</div>
  @endforeach
	
</div>
</div>
<div>
<footer class="bg-gray-900 text-white text-center text-lg-start">
	 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Footer Content</h5>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
          molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
          voluptatem veniam, est atque cumque eum delectus sint!
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="text-white">Link 1</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 2</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 3</a>
          </li>
          <li>
            <a href="#!" class="text-white">Link 4</a>
          </li>
        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-white" href=""><i style="color: #9dd413;">design by ssekimuli</i></a>
  </div>
  <!-- Copyright -->
</footer>
 </div>
</body>
 </html>
