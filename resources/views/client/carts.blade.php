@include('layouts.abb')
<div class="text-center mb-5 mt-5">
	<span class="border border-dark p-3 pl-5 pr-5 shadow-lg text-dark"><a href=""><b>CART ROOMS</b></a></span>
</div>
<div class="container">
<div class="card col-md-12 col-lg-12 mb-3 shadow">
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
</div>
<div class="container d-flex flex-wrap p-3">
<div>

@foreach($listbkg as $cart)
	<div class="card mb-3 shadow" style="max-width: 545px;">
  <div class="row no-gutters">
    <div class="col-md-5">
      <img src="{{asset('storage/gallery/'.$cart->cartimg)}}" class="img-thumbnail card-img h-100" alt="..." >
    </div>
    <div class="col-md-7">
      <div class="card-body">
       
          <h5 class="card-title">{{$cart->room}}</h5>
        <hr class="sidebar-divider">
        <ul>
          
          <li>From:&nbsp<span><b class="text-danger">{{$cart->arrival}}</b></span><input type="hidden" name="" value="">&nbspTo:&nbsp<span><b class="text-danger">{{$cart->departure}}</b><input type="hidden" name="" value=""></span></li>
          <li>Days:&nbsp{{$cart->days}}</li>
          <li>Amoount:&nbsp{{$cart->fee}}/=</li>
          <li>Room NO:&nbsp{{$cart->room}}</li>
        </ul>
        <form method="POST" action="/delete/{{$cart->id}}"  class="form-horizontal float-right mb-3" enctype="multipart/form-data">
      {{Csrf_field()}}
      {{method_field('DELETE')}}
        <button class="btn btn-danger btn-sm ml-5" type="submit"><i class="fas fa-trash-alt fa-xs" style="color: white;"></i></button>
      </form>         
      </div>
    </div>

  </div>
</div>
@endforeach
</div>
<div class="card col-md-7 col-lg-6 mb-3 shadow border-left-warning border-bottom-warning ml-2">
	  <div class="row no-gutters">
    <div class="col-md-7">
      <div class="card-body">
       
          <h5 class="card-title">TOTAL AMOUNT BILLING</h5>
        <hr class="sidebar-divider">
       
         <b>Total Amount</b>:{{$totalfee}}/=<br><br>
         
        
        <div class="mb-1 row">
           <b>Email</b>:&nbsp<input type="email" name="email" required="" class="d-block col-8" placeholder="your email" value="{{$useremail}}">
        </div><br>
        <form action="{{ url('pay')}}" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
         <div>
           <b>TEL</b>:&nbsp<input type="tel" name="telephone" required="" placeholder="telephone number">
         </div>
       
        <hr class="sidebar-divider"> 
        <div class="">
          <button class="d-block btn btn-warning mt-3 float-right mb-3" type="submit">CHECK OUT</button>
        </div>
    
       </form>
      </div>
    </div>
  </div>
</div>
</div>

 </div>
</body>
 </html>


