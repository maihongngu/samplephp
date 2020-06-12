@extends('layouts.empty')

@section('content')
<section id="wrapper" class="login-register login-sidebar"
    style="background-image:url({{asset('images/signup.jpg')}});">

    <div class="login-box card">

        <div class="card-body">

            <form class="form-horizontal form-material" id="loginform"  method="POST" action="{{ route('register') }}">
                @csrf
                <a href="javascript:void(0)" class="text-center db"><br />Project A</a>

                <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>

                <div class="form-group m-t-20">

                    <div class="col-xs-12">


                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name"
                            autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                </div>

                <div class="form-group ">

                    <div class="col-xs-12">

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                </div>

                <div class="form-group ">

                    <div class="col-xs-12">

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                            name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                </div>

                <div class="form-group">

                    <div class="col-xs-12">

                    <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation"  placeholder="Confirm Password" required autocomplete="new-password">

                    </div>

                </div>

                <div class="form-group text-center m-t-20">

                    <div class="col-xs-12">

                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                            type="submit"> {{ __('Register') }}</button>

                    </div>

                </div>

                <div class="form-group m-b-0">

                    <div class="col-sm-12 text-center">

                        Already have an account? <a href="/login" class="text-info m-l-5"><b>Sign In</b></a>

                    </div>

                </div>

            </form>

        </div>

    </div>

</section>
@endsection


