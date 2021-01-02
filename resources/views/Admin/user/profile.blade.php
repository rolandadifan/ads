@extends('Admin.layouts.app')
@section('tittle', 'Profile')
@section('content')
@include('sweetalert::alert')

<div class="container">
    <div class="row">
        <div class="col-sm">
            <form action="{{route('admin.update', Auth::user()->id)}}" method="POST">
                @method('put')
                @csrf
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="prof1 img-circle elevation-2" alt="User Image">
                <div class="form-group ml-3 mr-5">
                    <h1 class="prof2 mt-5 mr-3">{{ Auth::user()->email }}</h1>
                </div>

                <div class="form-group ml-3 mr-5">
                    <label for="name" class="prof3 form-control-label">Nama</label>
                    <input type="text" name="name" value="{{ old('Auth::user()->name') ? old('Auth::user()->name') : Auth::user()->name }}" class="form-control @error('Auth::user()->name') is-invalid @enderror" />
                    @error('Auth::user()->name') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group ml-3 mr-5">
                    <label for="phone" class="3 form-control-label">No.HP</label>
                    <input type="number" name="phone" value="{{ old('Auth::user()->phone') ? old('Auth::user()->phone') : Auth::user()->phone }}" class="form-control @error('Auth::user()->phone') is-invalid @enderror" />
                    @error('Auth::user()->phone') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="form-group ml-3 mr-5">
                    <label for="address" class="3 form-control-label">Alamat</label>
                    <input type="text" name="address" value="{{ old('Auth::user()->address') ? old('Auth::user()->address') : Auth::user()->address }}" class="form-control @error('Auth::user()->address') is-invalid @enderror" />
                    @error('Auth::user()->address') <div class="text-muted">{{ $message }}</div> @enderror
                </div>

                <div class="prof4 form-group my-5">
                    <button type="submit" class="btn btn-primary ml-3 mr-5">UPDATE</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>



@endsection