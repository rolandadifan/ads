@extends('Admin.layouts.app')
@section('tittle', 'MESSAGE LIST')
@section('content')
@include('partials.alerts')

<table id="example1" class="display table table-striped" style="width:100%">
    <thead class="theadA">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">phone</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($message as $msg)
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$msg->name}}</td>
            <td>{{$msg->email}}</td>
            <td>{{$msg->telepon}}</td>
            <td>
                <a href="{{route('message.show',$msg->id)}}" class="btn btn-secondary btn-sm">
                    <i class="fa fa-eye"></i>
                </a>
                <form action="{{route('message.destroy',$msg->id)}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>




@endsection