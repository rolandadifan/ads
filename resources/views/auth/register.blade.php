@extends('layouts.app')

@section('content')
<section class="sign-up">
    <div class="container sign-up-container animate__animated animate__bounceInUp">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-10 col-sm-12 sign-up-block">
                <div class="row">
                    <div class="col-md-1 col-sm-12 col-1 sign-up-link justify-content-center">
                        <button class="btn-sign-up">
                            <p>S</p>
                            <p>I</p>
                            <p>G</p>
                            <p>N</p>
                            <br>
                            <p>U</p>
                            <p>P</p>
                        </button>
                    </div>
                    <div class="col-md col-sm col form-content">
                        <div class="row text-center mb-2">
                            <div class="col-md">
                                <h3>Create Account</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
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
                        <div class="row mt-3 text-sign-up justify-content-center">
                            <div class="col-md-3 d-none d-md-block text-center">
                                <hr>
                            </div>
                            <div class="col-md-5 col-sm-12 text-center">
                                <p>
                                    Or use your email account
                                </p>
                            </div>
                            <div class="col-md-4 d-none d-md-block text-center">
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Name">Name</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="Email">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="No. Telp">No. Telp</label>
                                        <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="name" autofocus>

                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="name" autofocus>

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <!-- <div class="form-group">
                                        <label for="photo">Foto</label>
                                        <input type="file" name="photo" value="{{ old('photo') }}" accept="image/*" class="form-control1 @error('photo') is-invalid @enderror" />
                                        @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div> -->

                                    <div class="form-group ml-3 mr-5">
                                        <input type="hidden" name="role" value="USERS" />
                                        @error('role') <div class="text-muted">{{ $message }}</div> @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="InputPassword1">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="InputPassword1">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                    <button type="submit" class="btn btn-danger">Sign Up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-12 col-1 sign-in-link  justify-content-center">
                        <a href="{{route('login')}}">
                            <button class="btn-sign-in">
                                <p>S</p>
                                <p>I</p>
                                <p>G</p>
                                <p>N</p>
                                <br>
                                <p>I</p>
                                <p>N</p>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection