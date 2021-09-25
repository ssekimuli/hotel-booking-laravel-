@extends('dash.admindash')
@section('content')
<h1>client</h1>

        <div class="container-fluid mr-1">
          <div class="card shadow mb-4">
                        <table class="table table-striped table-responsive table-hover text-sm">
                          <thead>
                            <tr>
                              <th></th>
                              <th>FNAME</th>
                              <th>LNAME</th>
                              <th>d_o_birth</th>
                              <th>NATIONALITY</th>
                              <th>TEL</th>
                              <th>GENDER</th>
                              <th>EMAIL</th>
                              <th colspan="2">cmd</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($clients as $client)
                             <tr>
                              <td>{{$client->id}}</td>
                              <td>{{$client->surname}}</td>
                              <td>{{$client->givenname}}</td>
                              <td>{{$client->d_o_birth}}</td>
                              <td>{{$client->nationality}}</td>
                              <td>{{$client->telephone}}</td>
                              <td>{{$client->gender}}</td>
                              <td>{{$client->email}}</td>
                             <td class="text-center"><a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal{{$client->id}}">EDIT</a></td>
                    <!----edit modal-->
                    <!-- Modal -->
<div class="modal fade" id="exampleModal{{$client->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="panel-body">
<form method="POST" action="{{ url('editroom')}}"  class="form-horizontal" enctype="multipart/form-data">
                        {{Csrf_field()}}
<div class="form-group">
FNAME&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="rmname" required="" value="{{$client->surname}}" class="col-md-4">
</div>
<div class="form-group">
LNAME&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="sname" required="" value="{{$client->givenname}}" class="col-md-4">
</div>
<div class="form-group">
d_o_birth&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="date" name="dabirth" required=""value="{{$client->d_o_birth}}" class="col-md-4" placeholder="">
</div>
<div class="form-group">
Country&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="country" required="" value="{{$client->nationality}}" class="col-md-4">
</div>
<div class="form-group">
Telephone&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number" name="number" required="" value="{{$client->telephone}}" class="col-md-4">
</div>
<div class="form-group">
GENDER&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="gender" required="" value="{{$client->gender}}" class="col-md-4">
</div>
<div class="form-group">
EMAIL&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="email" required="" value="{{$client->email}}" class="col-md-4">
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
                              <td><a href="" class="btn-danger btn-sm">DELETE</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
@endsection
     