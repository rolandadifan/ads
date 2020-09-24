@extends('Admin.layouts.app')
@section('tittle', 'Page About')
@section('content')
@include('sweetalert::alert')
<div class="">
    <form action="{{route('about.update', $about->id)}}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="about" class="form-control-label">About</label>
            <textarea name="about" class="ckeditor form-control @error('about') is-invalid @enderror" style="height: 200px">{{ old('about') ? old('about') : $about->about}}</textarea>
            @error('about') <div class=" text-muted">{{ $message }}</div> @enderror
        </div>
        <div class="form-group">
            <label for="intro" class="form-control-label">Intro</label>
            <textarea name="intro" class="ckeditor1 form-control @error('intro') is-invalid @enderror" style="height: 200px">{{ old('intro') ? old('intro') : $about->intro}}</textarea>
            @error('intro') <div class="text-muted">{{ $message }}</div> @enderror
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>
</div>






@endsection