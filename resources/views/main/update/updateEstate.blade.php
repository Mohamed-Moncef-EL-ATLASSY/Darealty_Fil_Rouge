@extends('layouts.userMainlayout')
<link href="{{ URL::asset('css/userList.css') }}" rel="stylesheet">

@section('content')

<div class="container-fluid px-1 py-3 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11">
            <h3 class="text-center">Update property</h3>
            <div class="card">

                <form action="{{ route('userUpdateEstate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $listing['id'] }}">
                    <input type="hidden" name="estate_thumbnail" value="{{ $listing['estate_thumbnail'] }}">
                    <h4 class=" mb-4">General informations</h4>

                    <div class="row justify-content-between ">
                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">Estate type</label>
                            <select class="form-control" id="estate_type" name="estate_type">
                                <option selected value="{{ $listing['estate_type'] }}">{{ $listing['estate_type'] }}</option>
                                @foreach($estate_type as $estate_type)
                                    <option value="{{$estate_type->estate_type}}">{{$estate_type->estate_type}}</option>
                                @endforeach
                            </select>

                            @error('estate_type')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex">
                            <label class="form-control-label px-3">City</label>
                            <select class="form-control" id="estate_city" name="estate_city">
                                <option selected value="{{ $listing['estate_city'] }}">{{ $listing['estate_city'] }}</option>
                                @foreach($regions as $region)
                                    <option value="{{$region->region}}">{{$region->region}}</option>
                                @endforeach
                            </select>
                            @error('estate_city')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <h4 class="my-4">Property details</h4>

                    <div class="row justify-content-between ">
                        <div class="form-group col-sm-3 flex-column d-flex"> <label class="form-control-label px-3">Bedrooms: </label>
                            <input type="number" id="estate_bedrooms" name="estate_bedrooms" value="{{ $listing['estate_bedrooms'] }}" placeholder="Bedrooms" min="0">
                            @error('estate_bedrooms')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group col-sm-3 flex-column d-flex"> <label class="form-control-label px-3">Bathrooms: </label>
                            <input type="number" id="estate_bathrooms" name="estate_bathrooms" value="{{ $listing['estate_bathrooms'] }}" placeholder="Bathrooms" min="0">
                            @error('estate_bathrooms')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group col-sm-3 flex-column d-flex"> <label class="form-control-label px-3">Surface (m²): </label>
                            <input type="number" id="estate_surface" name="estate_surface" value="{{ $listing['estate_surface'] }}" placeholder="Surface" min="0">
                            @error('estate_surface')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group col-sm-3 flex-column d-flex"> <label class="form-control-label px-3">Property age</label>
                            <input type="number" id="estate_age" name="estate_age" value="{{ $listing['estate_age'] }}" placeholder="Property age" min="0">
                            @error('estate_age')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>

                    <h4 class="my-4">Property description</h4>

                    <div class="row justify-content-between mt-3">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Property title:</label>
                            <input type="text" id="estate_title" name="estate_title" value="{{ $listing['estate_title'] }}" placeholder="Property title">
                            @error('estate_title')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Property price (MAD):</label>
                            <input type="text" id="estate_price" name="estate_price" value="{{ $listing['estate_price'] }}" placeholder="Property price" >
                            @error('estate_price')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row justify-content-between mt-3">
                        <div class="form-group col-12 flex-column d-flex">

                            <label class="form-control-label px-3">Property description</label>
                            <input type="text" id="estate_description" name="estate_description" value="{{ $listing['estate_description'] }}" placeholder="Property description"></input>
                            @error('estate_description')
                            <div class="badge badge-danger bg-danger mt-3">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                    </div>

                    <div class="row justify-content-between mt-4">
                        <div class="form-group col-md-6 col-lg-5 col-6">
                            <a href="{{ route('userUpdateEstate') }}" class="btn btn-danger col-12">Return to estates lists</a>
                        </div>
                        <div class="form-group col-md-6 col-lg-7 col-6">
                            <button type="submit" class="btn btn-warning col-12">Update property</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
