@extends('layouts.abb')

@section('content')
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
@endsection
 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
 </html>