@extends('admin.adminLayout.adminMainLayout')

@section('content')

<div class="container-fluid bg-light">
    @if ($users->count())
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Listed Properties</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>number</td>
                <td>Update</td>
                <td>Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>



@endsection
