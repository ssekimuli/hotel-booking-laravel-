  @include('layouts.app')

<div style="background:url('storage/gallery/2.jpg');background-size:cover;" class="d-block w-100 full-height">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2 mt-5">
            <div class="panel panel-default">
            <div class="card shadow mb-4 mt-5 ml-3 mr-3" style="opacity:0.6; background:#0a0a0a;">
                <div class="panel-heading text-center mt-4 text-primary"><b>CUSTOMER'S LOGIN</b></div>
                <hr class="sidebar-divider my-2">
                <div class="panel-body col-12 mt-4 ml-5 pl-5">
            
                 <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label text-white">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label text-white">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            <div class="col-md-8 mt-4 text-warning">
                            Don't have account.&nbsp&nbsp<a href="{{ route('register') }}" class="text-primary">register</a>
                            </div>
                            </div>
                        </div>
                    </form
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>