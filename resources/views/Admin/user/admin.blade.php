@extends('Admin.layouts.app')
@section('tittle', 'ADMIN LIST')
@section('content')


<!-- <a href="{{route('admin.create')}}" class="f btn btn-primary btn-md mb-3 active " role="button" aria-pressed="true">+ Admin</a> -->
<table id="example1" class="display table table-striped" style="width:100%">
    <thead class="theadA">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">phone</th>
            <th scope="col">address</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($user as $usr)
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$usr->name}}</td>
            <td>{{$usr->email}}</td>
            <td>{{$usr->phone}}</td>
            <td>{{$usr->address}}</td>
            <td></td>
            <td>
                <a href="" class="btn btn-primary btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                </a>
                <a href="" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>




@endsection