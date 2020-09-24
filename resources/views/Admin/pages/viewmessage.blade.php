@extends('Admin.layouts.app')
@section('tittle', 'PESAN')
@section('content')

<div class="container">
    <h1>{{$message->name}}</h1>
    <h4>Email &nbsp; : &nbsp; {{$message->email}}</h4>
    <h4>No. hp &nbsp; : &nbsp;{{$message->telepon}}</h4>

    <br>
    <h4>Pesan</h4>
    <p class="pesan">{{$message->message}}</p>
    <a href="/message" class="btn btn-primary btn-md mb-2">Kembali</a>
</div>






@endsection