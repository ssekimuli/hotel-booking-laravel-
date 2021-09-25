@extends('layouts.abb')

@section('content')
   <!-------carousel--->
<div class="justify-content-center row">
  <div class="card col-md-6 col-lg-6 shadow  bg-light align-items-center" style="opacity:0.8; background:#0a0a0a;">


    <h6 class="card-title text-sm text-warning text-bold h6 text-uppercase"><b>{{$usersur}}&nbsp{{$usergn}} Books</b></h6>
    <hr class="sidebar-divider">
    <div class="text-warning row mb-4">
      <i class="fas fa-wifi ml-2">&nbsp&nbsp<b class="text-secondary">wifi</b></i>
      <i class="fas fa-car ml-3">&nbsp<b class="text-secondary">Parking</b></i>
       <i class="fas fa-camera ml-3">&nbsp<b class="text-secondary">Cctv security</b></i>
    </div>
    <div class="">
    		<table class="table table-striped table-responsive table-hover text-sm table-sm">
    		<thead class="text-sm text-warning">
    			<tr>
    				<th>RM</th>
    				<th>PAYMT MTD</th>
    				<th>FEE</th>
    				<th>DAYS</th>
    				<th>ARR</th>
    				<th>DEP</th>
    			</tr>
    		</thead>
    		<tbody>
    			<tr></tr>
    		</tbody>
    	</table>
    	</div>

    <I class="text-sm text-primary">"THANK YOU FOR BOOKING WITH US"</I>
</div>
</div>
	
<!------carousel end------>
@endsection
 
</body>
 </html>
