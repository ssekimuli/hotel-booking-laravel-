@extends('dash.admindash')
@section('content')
          <div class="row">
          <!-- Pie Chart -->
           
              </div>
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-4 btn-sm mt-4 ml-3" data-toggle="modal" data-target="#exampleModal">
ADD NEW ROOM
</button>
@if(session('success'))
<div class="alert alert-success">
{{session('success')}}
</div>
 @endif

<div class="card shadow mb-4">
  <table class="table table-bordered table-dark text-white text-center table-sm" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr class='text-primary'>
       <th>RMid</th>
      <th>image</th>
      <th>Name</th>
      <th>Price</th>
      <th>room_no</th>
      <th>catgry</th>
      <th>amenities</th>
      <th colspan='2' class='text-center'>operation</th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th>RMid</th>
      <th>image</th>
      <th>Name</th>
      <th>Price</th>
      <th>room_no</th>
      <th>catgry</th>
      <th>amenities</th>
    </tr>
  </tfoot>
  <tbody>
    @foreach($rooms as $rmz)
    <tr>
    <td>{{$rmz->id}}</td>
    <td><img src="{{asset('storage/gallery/'.$rmz->image)}}" style='height:50px; width:90px;'></td>
    <td>{{$rmz->name}}</td>
    <td>{{$rmz->price}}</td>
    <td>{{$rmz->room_no}}</td>
    <td>{{$rmz->categoryroom}}</td>
    <td>{{$rmz->amenities}}</td>
     <td><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#{{$rmz->name}}">EDIT</a></td>
    <!----edit modal-->
                    <!-- Modal -->
<div class="modal fade" id="{{$rmz->name}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT ROOM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="panel-body">
<form method="POST" action="{{ url('editroom',[$rmz->id])}}"  class="form-horizontal" enctype="multipart/form-data">
                        {{Csrf_field()}}
<div class="form-group">
NAME&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="rmname" required="" class="col-md-4" value="{{$rmz->name}}">
</div>
<div class="form-group">
CHARGES&nbsp:&nbsp&nbsp<input type="number" name="charge" class="col-md-4" required="" value="{{$rmz->price}}">
</div>
<div class="form-group">
RM_NO&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="rmno" class="col-md-4" required="" value="{{$rmz->room_no}}">
</div>
<hr class="sidebar-divider my-2">
<div class="form-group form-inline">
 <label class="col-md-2 control-label"><b>Category</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
   <span class="text-danger">{{$errors->first('email')}}</span>
    <select name="category" class="ml-2" required="" >
      <option>{{$rmz->categoryroom}}</option>
        @foreach($crtyroom as $cty)
      <option value="{{$cty->id}}" >{{$cty->categoryroom}}</option>
           @endforeach
    </select>
  <label class="ml-3 control-label">&nbsp&nbsp&nbsp&nbsp<b>Amenities</b></label>&nbsp&nbsp
    <span class="text-danger">{{$errors->first('email')}}</span>
  <select name="amenit" class="col-md-4" required="" >
   <option>{{$rmz->amenities}}</option>
      @foreach($am as $m)
        <option  value="{{$m->id}}" >{{$m->items}}</option>
        @endforeach
      </select>
  
  </div>
  <div class="form-group">
    <div class="col-md-offset-4 col-md-10">
      <button class="btn btn-info btn-sm" type="submit">UPDATE</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
    <!--modal-->
    <td><form method="POST" action="/del/{{$rmz->id}}"  class="form-horizontal" enctype="multipart/form-data">
      {{Csrf_field()}}
      {{method_field('DELETE')}}
        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
      </form>
    </td>
    </tr>
    @endforeach
    <tr>
     
  </tbody>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">NEW ROOM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="panel-body">
<form method="POST" action="{{ url('addrooms')}}"  class="form-horizontal" enctype="multipart/form-data">
  {{Csrf_field()}}
<div class="form-group">
NAME&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="rmname" required="" class="col-md-4">
</div>
<div class="form-group">
IMAGE&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="file" name="img" class="col-md-6" required="" >
</div>
<div class="form-group">
CHARGES&nbsp:&nbsp&nbsp<input type="number" name="charge" class="col-md-4" required="">
</div>
<div class="form-group">
RM_NO&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="rmno" class="col-md-4" required="" >
</div>
<hr class="sidebar-divider my-2">
<div class="form-group form-inline">
 <label class="col-md-2 control-label"><b>Category</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
   <span class="text-danger">{{$errors->first('email')}}</span>
    <select name="category" class="ml-2" required="" >
      <option>select</option>
        @foreach($crtyroom as $cty)
      <option value="{{$cty->id}}" >{{$cty->categoryroom}}</option>
           @endforeach
    </select>
  <label class="ml-3 control-label">&nbsp&nbsp&nbsp&nbsp<b>Amenities</b></label>&nbsp&nbsp
    <span class="text-danger">{{$errors->first('email')}}</span>
  <select name="amenit" class="col-md-4" required="" >
   <option>select</option>
      @foreach($am as $m)
        <option  value="{{$m->id}}" >{{$m->items}}</option>
        @endforeach
      </select>
  
  </div>
  <div class="form-group">
    <div class="col-md-offset-4 col-md-10">
      <button class="btn btn-info btn-sm" type="submit">Submit</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
            
@endsection
     