@extends('layouts.empty')

@section('content')

<section id="wrapper">

        <div class="login-register" style="background-image:url({{asset('images/login.jpg')}});">

            <div class="login-box card">

                <div class="card-body">

                    <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}">
                    @csrf

                        <h3 class="box-title m-b-20">Sign In</h3>

                        <div class="form-group ">

                            <div class="col-xs-12">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                            </div>

                        </div>


                        <div class="form-group">

                            <div class="col-xs-12">

                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                        </div>

                        <div class="form-group">

                            <div class="d-flex no-block align-items-center">

                                <div class="checkbox checkbox-primary p-t-0">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                            </div>

                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-xs-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group m-b-0">

                            <div class="col-sm-12 text-center">

                                Don't have an account? <a href="/register" class="text-info m-l-5"><b>Sign Up</b></a>

                            </div>

                        </div>

                    </form>

                    <form class="form-horizontal" id="recoverform" action="index.html">

                        <div class="form-group ">

                            <div class="col-xs-12">

                                <h3>Recover Password</h3>

                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>

                            </div>

                        </div>

                        <div class="form-group ">

                            <div class="col-xs-12">

                                <input class="form-control" type="text" required="" placeholder="Email"> </div>

                        </div>

                        <div class="form-group text-center m-t-20">

                            <div class="col-xs-12">

                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>


@endsection
