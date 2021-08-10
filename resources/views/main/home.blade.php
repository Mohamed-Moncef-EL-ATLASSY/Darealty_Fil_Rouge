@extends('layouts.userMainlayout')
<link href="{{ URL::asset('css/userHome.css') }}" rel="stylesheet">

@section('content')

<div class="bg-light">
    <div class="mx-auto d-block col-12 mb-4" >
        <img src="{{ URL::asset('images/home/Provincial-Moving-Banner-Nov202019-copy.jpg') }}" class="img-fluid rounded mx-auto d-block" alt="Home">
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mb-3 mx-3">
        <div class="col col-md-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-body card-find">
                    <h5 class="card-title">Find your next property</h5>
                    <p class="card-text">Here you can find properties and select within your prefered one!</p>
                </div>
            </div>
        </div>
        <div class="col col-md-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-body card-safe">
                    <h5 class="card-title">Safe & secure transactions</h5>
                    <p class="card-text">With our safe & secure payments methods. This is the place for you!</p>
                </div>
            </div>
        </div>
        <div class="col col-md-4 col-lg-4 col-12">
            <div class="card">
                <div class="card-body card-get">
                    <h5 class="card-title">Get your keys</h5>
                    <p class="card-text">You will get your keys within no times! mesmerizing, isnt it?</p>
                </div>
            </div>
        </div>

    </div>


    <div class="explore_recent">
        <h4 class="mx-3">Explore recent listed properties</h4>
        @if ($listings->count())
        @foreach ($listings as $listing)
        <div class="card m-3">
            <div class="row g-0 m-2">
                <div class="col-md-12 col-lg-3 col-12">
                    <img src="{{ asset('properties_images/'. $listing->estate_thumbnail ) }}" class="img-fluid rounded-start" style="height: 100%; object-fit: contain;" >
                </div>
                <div class="col-md-12 col-lg-6 col-12">
                    <div class="card-body">
                        <h5 class="card-title"><u>{{ $listing->estate_title }}</u></h5>
                        <small class="text-uppercase text-sm text-secondary">{{ $listing->estate_city }} • {{ $listing->estate_type }} • {{ $listing->estate_age }}y old</small>
                        <p class="card-text">{{ $listing->estate_description }}</p>

                        <p class="card-text">
                            <small class="text-muted">
                                <i class="fas fa-bed"></i> {{ $listing->estate_bedrooms }} Bedrooms <b>•</b>
                                <i class="fas fa-bath"></i> {{ $listing->estate_bathrooms }} Bathrooms <b>•</b>
                                <i class="fas fa-arrows-alt"></i> {{ $listing->estate_surface }} m²
                            </small>
                        </p>

                        <small class="text-muted">Realtor</small>
                        <p class="m-1">{{ $listing->user->name }} </p>
                        <p class="m-1 text-muted">(+212){{ $listing->user->phone }}</p>

                    </div>
                </div>
                <div class="col-md-12 col-lg-3 col-12 d-flex flex-column justify-content-around">
                        <h4 class="text-dark text-center mx-5 mt-2">
                            <b>{{ number_format($listing->estate_price, 0, ",", ".") . " MAD" }}</b></h4>
                        <button type="submit" class="btn btn-success col-12">View Estate <i class="fas fa-angle-double-right"></i></button>
                </div>
            </div>
        </div>
        @endforeach
        <div class="pagination justify-content-center">
            {{ $listings->links() }}
        </div>
        @endif
    </div>
</div>



@endsection
