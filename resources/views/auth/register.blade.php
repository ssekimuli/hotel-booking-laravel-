  @include('layouts.app')
<div style="background:url('storage/gallery/2.jpg');background-size:cover;" class="d-block w-100">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <div class="card shadow mb-4 mt-5 ml-3 mr-3" style="opacity:0.6; background:#0a0a0a;">
                <div class="panel-heading text-center mt-4 text-primary"><b>CUSTOMER'S FORM</b></div>
                <hr class="sidebar-divider my-2">
                <div class="panel-body col-12 mt-4 ml-4">
                    <form class="d-flex flex-wrap" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-8 col-md-8 control-label text-white">SURNAME</label>

                            <div class="col-md-10">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('givenname') ? ' has-error' : '' }}">
                            <label for="givenname" class="col-md-8 control-label text-white">GIVEN NAME</label>

                            <div class="col-md-10">
                                <input id="givenname" type="text" class="form-control" name="givenname" value="{{ old('givenname') }}" required autofocus>

                                @if ($errors->has('givenname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('givenname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('date of birth') ? ' has-error' : '' }}">
                            <label for="date" class="col-md-12 control-label text-white">DATE OF BIRTH</label>

                            <div class="col-12 col-md-12">
                                <input id="d_o_birth" type="date" class="form-control" name="d_o_birth"  required autofocus placeholder='Y-M-D'>

                                @if ($errors->has('d_o_birth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('d_o_birth') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-8 control-label text-white">PHONE</label>

                            <div class="col-md-10">
                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" required autofocus>

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                            <label for="nationality" class="col-md-8 control-label text-white">NATIONALITY</label>

                            <div class="col-md-10">
                                <input id="nationality" type="text" class="form-control" name="nationality" value="{{ old('nationality') }}" required autofocus>

                                @if ($errors->has('nationality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nationality') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-6 control-label text-white">GENDER</label>

                            <div class="col-md-10">
                                <input id="gender" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus placeholder="male/female">

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-8 control-label text-white">E-Mail Address</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-8 control-label text-white">Password</label>

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-8 control-label text-white">Confirm Password</label>

                            <div class="col-md-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group form-inline mt-4">
                            <div class="col-md-12 text-white">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button><br>
                                <hr class="sidebar-divider my-2">
                                <div class="mt-4 mb-5">IF you have account:&nbsp<a href="{{ route('login') }}">Login</a></div>
                            </div>
                        </div>
                        </div>
                    </form>
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