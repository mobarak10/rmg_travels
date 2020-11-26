@extends('layouts.login')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<!-- Sign in -->
<div class="sign-in-wrapper">
    <div class="sign-in shadow-sm">
        <div class="row mx-0 h-100">
            <div class="col-lg-6 px-0 h-100 d-none d-lg-block">
                <div class="left">
                    <img src="{{ asset('images/topbar/brand.svg') }}" class="img-fluid logo" alt=""/>
                    <div class="content">
                        <h2>Welcome to MaxSOP admin</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of It is a long established fact that a reader will be distracted by the readable content of It is a long distracted by the readable content of It is a long</p>
                    </div>
                    <div class="social-wrapper">
                        <a  href="#"><i class="icofont-facebook"></i></a>
                        <a  href="#"><i class="icofont-twitter"></i></a>
                        <a  href="#"><i class="icofont-behance"></i></a>
                        <a  href="#"><i class="icofont-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 px-0 h-100">
                <div class="right">
                    <h3 class="title">Sign In</h3>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" placeholder="enter your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" placeholder="enter your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center my-20p">
                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline">Remember me on this device</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="action-buttons">
                            <button type="submit" class="btn">Sign In</button>
                        </div>
{{--                        <div class="my-20p">--}}
{{--                            <p>New at Max admin? <a href="sign-up.html">Sign up</a></p>--}}
{{--                        </div>--}}
                    </form>
                    <p class="legal">It is a long established fact that a reader will be <a href="#">distracted</a> by the readable content of a page when looking at its layout. The <a href="#">point</a> of using Lorem</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign in end -->
@endsection
