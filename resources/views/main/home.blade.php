@extends('layouts.userMainlayout')

@section('content')

<div class="bg-light">
    <h4 class="">Explore recent listed properties</h4>
    @if ($listings->count())
    @foreach ($listings as $listing)
    <div class="card m-3">
        <div class="row g-0 m-2">
            <div class="col-md-2">
                <img src="..." class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
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
                    <p class="m-1 text-muted">(+212) {{ $listing->user->phone }}</p>

                </div>
            </div>
            <div class="col-md-2 d-flex flex-column justify-content-around">
                {{-- <div class="row d-flex justify-content-between"> --}}
                    <h4 class="text-dark text-center mx-5 mt-2">
                        <b>{{ number_format($listing->estate_price, 0, ",", ".") . " MAD" }}</b></h4>
                    <button type="submit" class="btn btn-success col-12">View Estate <i class="fas fa-angle-double-right"></i></button>
                {{-- </div> --}}
            </div>
        </div>
    </div>





    @endforeach





    @else
    there are no posts
    @endif


    {{-- <div class="mt-4">
        <p>property number: {{ $listing->id }}</p>
    <p>property number: {{ $listing->user->phone }}</p>
    <p>property number: {{ $listing->user->name }}</p>
    <div class="card mt-2" style="width: 18rem;">
        <ul class="list-group list-group-flush ">
            <li class="list-group-item">{{$listing->estate_description}}</li>
            <li class="list-group-item">{{$listing->estate_type}}</li>
            <li class="list-group-item">{{$listing->estate_age}}</li>
            <li class="list-group-item">{{$listing->estate_price}}</li>
        </ul>
    </div>
</div> --}}

{{-- <div class="card-deck row">
        <div class="card col-2">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div> --}}


</div>


@endsection
