@extends('layout.authMain')
@section('AuthTitle', 'Forget Password')

@section('content')


    <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Laldiggi</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                @if (Session::has('message'))
                    <p class="login-box-msg">{{ Session::get('message') }}</p>
                @endif


                <form action="{{ route('forget.password.post') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        @if ($errors->has('email'))
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Request new password</button>
                        </div>
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="{{ route('login') }}">Login</a>
                </p>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->



{{--    <main class="login-form">--}}
{{--        <div class="cotainer">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-md-8">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">Reset Password</div>--}}
{{--                        <div class="card-body">--}}

{{--                            @if (Session::has('message'))--}}
{{--                                <div class="alert alert-success" role="alert">--}}
{{--                                    {{ Session::get('message') }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

{{--                            <form action="{{ route('forget.password.post') }}" method="POST">--}}
{{--                                @csrf--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>--}}
{{--                                    <div class="col-md-6">--}}
{{--                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>--}}
{{--                                        @if ($errors->has('email'))--}}
{{--                                            <span class="text-danger">{{ $errors->first('email') }}</span>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        Send Password Reset Link--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </main>--}}






@endsection
