@extends('layouts.app')
@section('tittle', 'LOGIN')

@section('content')
<section class="sign-in">
    <div class="container sign-in-container animate__animated animate__bounceInDown">
        <div class="row justify-content-center align-items-center sign-in-block">
            <div class="col-md-10 col-sm-12">
                <div class="row">
                    <div class="col-md-1 col-sm-1 col-1 sign-up-link justify-content-center">
                        <a href="{{ route('register')}}">
                            <button class="btn-sign-up">
                                <p>S</p>
                                <p>I</p>
                                <p>G</p>
                                <p>N</p>
                                <br>
                                <p>U</p>
                                <p>P</p>
                            </button>
                        </a>
                    </div>
                    <div class="col-md col-sm col form-content">
                        <div class="row text-center">
                            <div class="col-md">
                                <h3>Welcome Back</h3>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class=" form-group">
                                        <label for="exampleUsername">{{ __('E-Mail Address') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row remember-me">
                                        <div class="col-md-6">
                                            <div class="form-group form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger text-success">Sign In</button>
                                    @if (Route::has('password.request'))
                                    <a class="forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3 text-sign-in justify-content-center">
                            <div class="col-md-4 col-sm-3 col-3 text-center">
                                <hr>
                            </div>
                            <div class="col-md-3 col-sm col text-center">
                                <p>
                                    Or sign in with
                                </p>
                            </div>
                            <div class="col-md-4 col-sm-3 col-3 text-center">
                                <hr>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-3">
                            <div class="col-md-2 col-sm-3 col-3">
                                <a href="#">
                                    <button class="btn-facebook">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-2 col-sm-3 col-3">
                                <a href="#">
                                    <button class="btn-twitter">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                            <div class="col-md-2 col-sm-3 col-3">
                                <a href="#">
                                    <button class="btn-google">
                                        <i class="fa fa-google" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1 col-1 sign-in-link  justify-content-center">
                        <button class="btn-sign-in">
                            <p>S</p>
                            <p>I</p>
                            <p>G</p>
                            <p>N</p>
                            <br>
                            <p>I</p>
                            <p>N</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection