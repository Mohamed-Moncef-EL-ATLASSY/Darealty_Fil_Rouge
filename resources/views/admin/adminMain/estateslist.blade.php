@extends('admin.adminLayout.adminMainLayout')

@section('content')

<div class="container-fluid bg-light">
    @if ($listings->count())
    <table class="table table-dark table-striped table-hover table-responsive">
        <thead>
            <tr class="text-center">
                <th scope="col">Property Id</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">City</th>
                <th scope="col">Age</th>
                <th scope="col">Price</th>
                <th scope="col">Bedrooms</th>
                <th scope="col">Bathrooms</th>
                <th scope="col">Surface</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listings as $listing)
            <tr class="text-center">
                <th scope="row">{{ $listing->id }}</th>
                <td>{{ $listing->estate_title }}</td>
                <td>{{ $listing->estate_type }}</td>
                <td>{{ $listing->estate_city }}</td>
                <td>{{ $listing->estate_age }}Y old</td>
                <td class="text-center">{{ number_format($listing->estate_price, 0, ",", ".") . " MAD" }}</td>
                <td><i class="fas fa-bed"></i>  {{ $listing->estate_bedrooms }}</td>
                <td><i class="fas fa-bath"></i>  {{ $listing->estate_bathrooms }}</td>
                <td><i class="fas fa-arrows-alt"></i>  {{ $listing->estate_surface }}</td>
                <td class="text-center"><a href="{{ "Estates-List/update/" . $listing->id }}"  class="btn btn-warning col-8">Update <i class="fas fa-edit"></i></a></td>
                <td class="text-center"><a href="{{ "Estates-List/delete/" . $listing->id }}" class="btn btn-danger col-8">Delete <i class="fas fa-trash-alt"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>




@endsection
