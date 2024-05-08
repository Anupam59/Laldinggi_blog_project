@extends('layout.authMain')
@section('AuthTitle', 'Login Page')

@section('content')


    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Laldiggi</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                @if($message = Session::get('success'))
                    <p class="login-box-msg"> {{ $message }}</p>
                @endif

                <form action="{{ route('sample.validate_login') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        @if($errors->has('email'))
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                        @endif
                    </div>


                    <div class="input-group mb-3">
                        <input type="password" name="password" id="passInput" class="form-control" placeholder="Password">
                        @if($errors->has('password'))
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock">{{ $errors->first('password') }}</span>
                                </div>
                            </div>
                        @endif
                    </div>


                    <div class="row">
                        <div class="col-8">
                            <div class="form-check">
                                <input type="checkbox" id="showPass" class="form-check-input">
                                <label class="form-check-label" for="exampleCheck1">Show Password</label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mb-1">
                    <a href="{{ route('forget.password.get') }}">Reset Password</a>
                </p>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

@endsection

@section('AuthScript')
    <script>
        $('#showPass').on('click', function(){
            var passInput=$("#passInput");
            if(passInput.attr('type')==='password')
            {
                passInput.attr('type','text');
            }else{
                passInput.attr('type','password');
            }
        })
    </script>
@endsection
