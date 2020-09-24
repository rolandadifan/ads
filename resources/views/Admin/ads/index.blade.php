@extends('Admin.layouts.app')
@section('tittle', 'ADS LIST')
@section('content')

@include('partials.alerts')
<a href="{{route('ads.create')}}" class="f btn btn-primary btn-md mb-3 active " role="button" aria-pressed="true">+ ADS</a>
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
        @foreach($ads as $ad)
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
                @if($ad->status == 'PENDING')
                <span class="badge badge-info">
                    @elseif($ad->status == 'ACTIVE')
                    <span class="badge badge-success">
                        @else
                        <span>
                            @endif
                            {{$ad->status}}
                        </span>
            </td>
            <td>
                <a href="{{route('ads.edit',$ad->id)}}" class="btn btn-primary btn-sm">
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
{{ $ads->links() }}



@endsection