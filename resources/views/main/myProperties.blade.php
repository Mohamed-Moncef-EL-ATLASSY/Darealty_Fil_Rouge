@extends('layouts.userMainlayout')

@section('content')
<div class="bg-light">
    <h4>My Properties</h4>
        <div class="my_Properties row row-cols-1 row-cols-md-2 mx-2">
        @if ($listings->count())
        @foreach ($listings as $listing)
        <div class="card">
            <div class="row g-0 m-2">
                <div class="col-md-12 col-lg-3 col-12">
                    <img src="..." class="img-fluid rounded-start">
                </div>
                <div class="col-md-12 col-lg-5 col-12">
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
                <div class="col-md-12 col-lg-4 col-12 d-flex flex-column justify-content-between">
                        <h4 class="text-dark text-center mx-4 mt-2 col-lg-10">
                            <b>{{ number_format($listing->estate_price, 0, ",", ".") . " MAD" }}</b></h4>
                            <div class="py-2 d-grid gap-2">
                                <button type="submit" class="btn btn-success col-12">View Estate <i class="fas fa-angle-double-right"></i></button>
                                <button type="submit" class="btn btn-warning col-12">Update <i class="fas fa-edit"></i></button>
                                <button type="submit" class="btn btn-danger col-12">Delete <i class="fas fa-trash-alt"></i></button>
                            </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
    <div class="pagination mt-3 justify-content-center">
        {{ $listings->links() }}
    </div>
</div>



@endsection
