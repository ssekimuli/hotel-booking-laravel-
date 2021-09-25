      @extends('dash.admindash')
      @section('content')
      <div class="row">
      <!-- Pie Chart -->

      </div>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary mb-4 btn-sm mt-4 ml-3" data-toggle="modal" data-target="#exampleModal">
      ADD AMENITIE
      </button>
      @if(session('success'))
      <div class="alert alert-success">
      {{session('success')}}
      </div>
      @endif

      <div class="card shadow mb-4 col-6">
      <table class="table table-striped table-responsive table-hover text-sm">
      <thead>
        <tr>
          <th></th>
          <th>Amenities</th>
          <th colspan="2">cmd</th>
        </tr>
      </thead>
      <tbody>
        @foreach($amen as $amty)
          <tr>
          <td>{{$amty->id}}</td>
          <td>{{$amty->items}}</td>
          <td><a href="edit/{{$amty->id}}" class="btn-success btn-sm">EDIT</a></td>
          <td><a href="" class="btn-danger btn-sm">DELETE</a></td>
        </tr>
        @endforeach
      </tbody>
      </table>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">NEW amenities</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
      <div class="panel-body">
      <form method="post" action="{{url('add_amenty')}}" novalidate="" role="form" class="form-horizontal">
      {{ csrf_field() }}
      <div class="form-group">
      <div class="col-md-12">
        <input type="text" required="" placeholder="item,item,item" id="ITEMS" class="form-control" name="amenity">
      </div>
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
