@extends('Admin.layouts.app')
@section('tittle', 'Setting')
@section('content')
@include('sweetalert::alert')
<div class="">
    <form action="{{route('setting.update', $setting->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group ml-3 mr-5">
            <label for="facebook" class="form-control-label">Facebook</label>
            <input type="text" name="facebook" value="{{ old('facebook') ? old('facebook') : $setting->facebook }}" class="form-control @error('facebook') is-invalid @enderror" />
            @error('facebook') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group ml-3 mr-5">
            <label for="whatsup" class="form-control-label">whatsup</label>
            <input type="text" name="whatsup" value="{{ old('whatsup') ? old('whatsup') : $setting->whatsup }}" class="form-control @error('whatsup') is-invalid @enderror" />
            @error('whatsup') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group ml-3 mr-5">
            <label for="instagram" class="form-control-label">instagram</label>
            <input type="text" name="instagram" value="{{ old('instagram') ? old('instagram') : $setting->instagram }}" class="form-control @error('instagram') is-invalid @enderror" />
            @error('instagram') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group ml-3 mr-5">
            <label for="twitter" class="form-control-label">Twitter</label>
            <input type="text" name="twitter" value="{{ old('twitter') ? old('twitter') : $setting->twitter }}" class="form-control @error('twitter') is-invalid @enderror" />
            @error('twitter') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>
</div>
@endsection