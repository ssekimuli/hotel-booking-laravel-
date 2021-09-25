@extends('dash.admindash')
@section('content')
          <div class="row">

            <!-- Area Chart -->
              <div class="col-xl-6 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">LIST OF CATEGORY</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <table class="table table-striped table-responsive table-hover text-sm">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Categories</th>
                              <th colspan="2">cmd</th>
                            </tr>
                          </thead>
                          <tbody>
                           @foreach($category as $catgroom)
                             <tr>
                              <td>{{$catgroom->id}}</td>
                              <td>{{$catgroom->categoryroom}}</td>
                              <td><a href="" class="btn-success btn-sm">EDIT</a></td>
                              <td><a href="" class="btn-danger btn-sm">DELETE</a></td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-4">
                 @if(session('success'))
                   <div class="alert alert-success">
                     {{session('success')}}
                    </div>
                 @endif
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">ADD CATEGORY</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                   <div class="panel-body">
                      <form method="POST" action="{{ url('addcategory')}}" novalidate="" role="form" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <div class="col-md-10">
                            <input type="text" required="" placeholder="room category"  class="form-control" name="category">
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
     