@extends('admin.adminLayout.adminMainLayout')

@section('content')

<div class="container bg-light">
    @if ($listings->count())
    <table class="table table-dark table-striped table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col">Property Id</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col" class="text-center">Price</th>
                <th scope="col">Bedrooms</th>
                <th scope="col">Bathrooms</th>
                <th scope="col">Surface</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listings as $listing)
            <tr>
                <th scope="row">{{ $listing->id }}</th>
                <td>{{ $listing->estate_title }}</td>
                <td>{{ $listing->estate_type }}</td>
                <td>{{ $listing->estate_city }}</td>
                <td>{{ $listing->estate_age }}Y old</td>
                <td class="text-end">{{ number_format($listing->estate_price, 0, ",", ".") . " MAD" }}</td>
                <td><i class="fas fa-bed"></i>  {{ $listing->estate_bedrooms }}</td>
                <td><i class="fas fa-bath"></i>  {{ $listing->estate_bathrooms }}</td>
                <td><i class="fas fa-arrows-alt"></i>  {{ $listing->estate_surface }}</td>

                <td>Update</td>
                <td>Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>




@endsection
