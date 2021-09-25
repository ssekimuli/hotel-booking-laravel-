@extends('dash.admindash')
@section('content')
          <div class="row">
          <!-- Pie Chart -->
           
              </div>
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal">
ADD PACKAGE
</button>
                    @if(session('success'))
                   <div class="alert alert-success">
                     {{session('success')}}
                    </div>
                 @endif

             <div class="card shadow mb-4">
                <table class="table table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th><b>No</b></th>
                      <th>PACKAGE</th>
                      <th>PRICE</th>
                      <th>ROOM_NO</th>
                      <th>catgry</th>
                      <th>ROOM</th>
                      <th>amenities</th>
                      <th colspan='2' class='text-center'>operation</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th><b>No</b></th>
                      <th>PACKAGE</th>
                      <th>PRICE</th>
                      <th>ROOM_NO</th>
                      <th>catgry</th>
                      <th>ROOM</th>
                      <th>amenities</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach($packge as $pkage)
                    <tr>
                    <td>{{$pkage->id}}</td>
                    <td>{{$pkage->package}}
                    <td>{{$pkage->price}}</td>
                    <td>{{$pkage->room_no}}</td>
                    <td>{{$pkage->categoryroom}}</td>
                    <td>{{$pkage->room}}</td>
                    <td>{{$pkage->amenities}}</td>
                    <td><a href="" class="btn-success btn-sm">EDIT</a></td>
                    <td><a href="" class="btn-danger btn-sm">DELETE</a></td>
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
<form method="POST" action="{{ url('addpackage')}}"  class="form-horizontal" enctype="multipart/form-data">
                        {{Csrf_field()}}
PACKAGE: <input type="text" name="package" require="" ><br><br>
CHARGES:<input type="number" name="charge"><br><br>


<label class="control-label">&nbsp&nbsp&nbsp&nbspROOM</label>&nbsp&nbsp
    <span class="text-danger">{{$errors->first('email')}}</span>
  <select name="prooms" class="col-md-4">
   <option>select</option>
      @foreach($rooms as $rms)
        <option  value="{{$rms->id}}" >{{$rms->name}}</option>
        @endforeach
      </select>

<hr class="sidebar-divider my-2">
<div class="form-group form-inline">
 <label class="col-md-2 control-label"><b>Category</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
   <span class="text-danger">{{$errors->first('email')}}</span>
    <select name="category" class="ml-2">
      <option>select</option>
        @foreach($crtyroom as $cty)
      <option value="{{$cty->id}}" >{{$cty->categoryroom}}</option>
           @endforeach
    </select>
  <label class="ml-3 control-label">&nbsp&nbsp&nbsp&nbsp<b>Amenities</b></label>&nbsp&nbsp
    <span class="text-danger">{{$errors->first('email')}}</span>
  <select name="amenit" class="col-md-4">
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

     