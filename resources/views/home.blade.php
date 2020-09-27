@extends('layouts.app')
@section('tittle', 'ADS')

@section('content')
<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 mt-5" data-400="opacity:0;left:100px;" data-0="opacity:1;left:0px;">
                <h1>
                    Tampilkan Bisnis <br />
                    <span>Anda di Website Kami</span>
                </h1>
                <p class="lead">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi
                    et unde, illo voluptatem vel reiciendis porro consequuntur
                    autem, nulla obcaecati est fugit neque blanditiis eveniet
                    explicabo voluptate ipsa molestiae repellat?
                </p>
                @guest
                <a href="{{route('register')}}"> <button class="btn btn-jumbo">STARTED NOW</button></a>
                @else
                <a href="#"> <button class="btn btn-jumbo">STARTED NOW</button></a>
                @endguest
            </div>
        </div>
    </div>
</div>
</header>

<!-- search panel -->
<div class="container container-search-panel">
    <div class="row justify-content-center">
        <div class="col-md-12 search-panel">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-sm-6">
                    <form class="form-inline">
                        <input type="text" style="background-image: url('/image/search.png');" placeholder="search..." />
                    </form>
                </div>
                <div class="col-md-6 col-sm-6 search-2">
                    <form class="form-inline">
                        <i class="fa fa-th-large" aria-hidden="true"></i>
                        <select class="mr-5">
                            @foreach($category as $ctg)
                            <option selected>{{$ctg->name}}</option>
                            @endforeach
                        </select>
                        <a href="#">Pasang Iklan <i class="fa fa-bullhorn" aria-hidden="true"></i></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ads section -->
<section class="ads-content">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-md-3 ads-block" data-50-top="opacity:1;right:0px;" data-900-top="opacity:0;right:100px;">
                <h1>Latest Ads</h1>
            </div>
            <div class="col-md-2 offset-md-7 ads-link" data-50-top="opacity:1;bottom:0px;" data-900-top="opacity:0;bottom:100px;">
                <a href="#">View All</a>
            </div>
        </div>
    </div>
    <div class="container ads-item" data-50-top="opacity:1;left:0px;" data-400-top="opacity:0;left:100px;">
        <div class="row mb-3">
            @forelse($ads as $ad)
            <div class="col-lg-4 col-md-6 mt-3">
                <div class="card">
                    <img src="{{ url($ad->photo1) }}" class="card-img" alt="Ads-images1" />
                    <div class="fluid-container card-img-overlay text-images">
                        <div class="row justify-content-between text-img-content">
                            <div class="col-lg-5 col-5 col-md-5  highlights">
                                <h6>HIGHLIGHT</h6>
                            </div>
                            <div class="col-lg-6 offset-lg-1 col-md-7 col-6 prices">
                                <p>RP. {{$ad->price}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="col-md-10 ads-title">
                                <h5 class="card-title">{{$ad->tittle}}</h5>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-love">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <p class="card-text">
                            {{$ad->year}} <br />
                            {{($ad->sdescription)}}
                        </p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <div class="row justify-content-between">
                            <div class="col-md-6">
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> Kota
                                    {{$ad->city}}
                                </p>
                            </div>
                            <div class="col-md-4 offset-md-2 details">
                                <a href="#">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <tr>
                <td colspan="6" class="" style="margin-left: 900px;">Data tidak tersedia</td>
            </tr>
            @endforelse
        </div>
    </div>
</section>


<!-- introduction section  -->
@include('pages.about')

<!-- contact-us section -->
@include('pages.contact')

<!-- footer -->
@include('includes.footer')

@endsection