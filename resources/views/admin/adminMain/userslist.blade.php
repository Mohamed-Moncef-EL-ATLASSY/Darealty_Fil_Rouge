@extends('admin.adminLayout.adminMainLayout')

@section('content')

<div class="container bg-light ">
    <h4 class="m-3 p-3 text-center">Total users: {{ $users->count() }}  <i class="fas fa-user"></i></h4>
    <table class="table table-dark table-striped table-hover table-responsive">
        <thead>
            <tr class="text-center">
                <th scope="col">User Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @if ($users->count())
            @foreach ($users as $user)
            <tr class="text-center">
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>+212-{{ $user->phone }}</td>
                <td><a href="{{ "Users-List/update/" . $user->id }}" class="btn btn-warning col-12">Update <i class="fas fa-edit"></i></a></td>
                <td><a href="{{ "Users-List/delete/" . $user->id }}" class="btn btn-danger col-12">Delete <i class="fas fa-trash-alt"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>

@endsection
