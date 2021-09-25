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
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/2.jpg')}}" class="d-block w-100"style="height: 400px;">

      <div class="carousel-caption text-white text-center">
          <h5 class="font-weight-bold text-white">BUILDINGS</h5>
          <p>We improve,develop,construct buildings</p>
          <a class="btn btn-sm btn-success text-center" href="home">BOOK</a>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/3.jpg')}}" class="d-block w-100"style="height: 400px;">

      <div class="carousel-caption text-white">
          <h5 class="font-weight-bold text-white">WATER BRANCHES</h5>
          <p>We improve,develop, build water branches</p>
          <a href="home" class="btn btn-sm btn-success text-center">BOOK</a>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/4.jpg')}}" class="d-block w-100"style="height: 400px;">

      <div class="carousel-caption text-white">
          <h5 class="font-weight-bold text-white">ELECTRICITY</h5>
          <p>We install electriccity for all kind of buildings</p>
          <a href="home" class="btn btn-sm btn-success text-center">BOOK</a>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<!------carousel end------>
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

<!---content--->
<div class="row justify-content-center p-2">

<div class="col-md-4 mt-5">
<div class="card shadow p-2">
<div class="carousel-inner wow fadeIn" style="opacity: 0.5px; z-index:1;">
  <div class="carousel-item active">
    <img src="{{asset('storage/gallery/1.jpg')}}" class="d-block w-100">
          <div class="carousel-caption">
            <h5 class="text-white"><b>DULEXE</b></h5>
            <a href="contact" class="btn btn-sm btn-warning text-white">book</a>
          </div>
          <button class="float-right mt-1 btn-dark text-white">120$</button>
  </div>
</div>
</div>
</div>
<div class="col-md-4 mt-5">
<div id="carouselExampleCaptions2" class="carousel zoomIn" data-ride="carousel">
<div class="carousel-inner wow fadeIn" style="opacity: 0.5px; z-index:1;">
  <div class="carousel-item active">
    <img src="{{asset('storage/gallery/1.jpg')}}" class="d-block w-100">
          <div class="carousel-caption">
            <h5 class="text-dark"><b>YOLUMS Ltd</b></h5>
            <p style="color: #0a0a0a">Tel:+256&nbsp757541477 Email:yolumltd@gmail.com</p>
            <a href="contact" class="btn btn-sm btn-success text-center text-white">message</a>
          </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/2.jpg')}}" class="d-block w-100">

      <div class="carousel-caption text-white text-center">
          <h5 class="font-weight-bold text-white">BUILDINGS</h5>
          <p>We improve,develop,construct buildings</p>
          <a class="btn btn-sm btn-success text-center" href="contact">message</a>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/3.jpg')}}" class="d-block w-100">

      <div class="carousel-caption text-white">
          <h5 class="font-weight-bold text-white">WATER BRANCHES</h5>
          <p>We improve,develop, build water branches</p>
          <a href="contact" class="btn btn-sm btn-success text-center">message</a>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/4.jpg')}}" class="d-block w-100">

      <div class="carousel-caption text-white">
          <h5 class="font-weight-bold text-white">ELECTRICITY</h5>
          <p>We install electriccity for all kind of buildings</p>
          <a href="contact" class="btn btn-sm btn-success text-center">message</a>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
<div class="col-md-4 mt-5">
<div class="card shadow p-2">
<div id="carouselExampleCaptions2" class="carousel zoomIn" data-ride="carousel">
<div class="carousel-inner wow fadeIn" style="opacity: 0.5px; z-index:1;">
  <div class="carousel-item active">
    <img src="{{asset('storage/gallery/1.jpg')}}" class="d-block w-100">
          <div class="carousel-caption">
            <h5 class="text-dark"><b>YOLUMS Ltd</b></h5>
            <p style="color: #0a0a0a">Tel:+256&nbsp757541477 Email:yolumltd@gmail.com</p>
            <a href="contact" class="btn btn-sm btn-success text-center text-white">message</a>
          </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/2.jpg')}}" class="d-block w-100">

      <div class="carousel-caption text-white text-center">
          <h5 class="font-weight-bold text-white">BUILDINGS</h5>
          <p>We improve,develop,construct buildings</p>
          <a class="btn btn-sm btn-success text-center" href="contact">message</a>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/3.jpg')}}" class="d-block w-100">

      <div class="carousel-caption text-white">
          <h5 class="font-weight-bold text-white">WATER BRANCHES</h5>
          <p>We improve,develop, build water branches</p>
          <a href="contact" class="btn btn-sm btn-success text-center">message</a>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{asset('storage/gallery/4.jpg')}}" class="d-block w-100">

      <div class="carousel-caption text-white">
          <h5 class="font-weight-bold text-white">ELECTRICITY</h5>
          <p>We install electriccity for all kind of buildings</p>
          <a href="contact" class="btn btn-sm btn-success text-center">message</a>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>
</div>
</div>


 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
 </html>
