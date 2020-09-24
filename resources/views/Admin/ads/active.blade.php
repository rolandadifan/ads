@extends('Admin.layouts.app')
@section('tittle', 'ACITIVE LIST')
@section('content')
@include('sweetalert::alert')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Tittle</th>
            <th scope="col">City</th>
            <th scope="col">Price</th>
            <th scope="col">Photo 1</th>
            <th scope="col">Photo 2</th>
            <th scope="col">Photo 3</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($active as $ad)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$ad->tittle}}</td>
            <td>{{$ad->city}}</td>
            <td>Rp. {{$ad->price}}</td>
            <td>
                <img width="50px" src="{{url($ad->photo1)}}" alt="" />
            </td>
            <td>
                <img width="50px" src="{{url($ad->photo2)}}" alt="" />
            </td>
            <td>
                <img width="50px" src="{{url($ad->photo3)}}" alt="" />
            </td>
            <td>
                <span class="badge badge-success">{{$ad->status}}</span>
            </td>
            <td>
                <div class="d-flex">
                    <div class="dropdown mr-1">
                        <button type="button" class="btn btn-secondary btn-sm" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
                            <i class="fa fa-eye"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                            <a class="dropdown-item" href="{{url('active/status', $ad->id)}}">Make In-Active</a>
                            <a class="dropdown-item" href="#">Make Highlight</a>
                            <a class="dropdown-item" href="#">View Ads</a>
                        </div>
                    </div>
                    <a href="{{route('ads.edit',$ad->id)}}" class="btn btn-primary btn-sm mr-1">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{route('ads.destroy',$ad->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
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