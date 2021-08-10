@extends('admin.adminLayout.adminMainLayout')


@section('content')

<div class="container">
    <h2>Update User</h2>
    <form action="{{ route('adminUpdateUser') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user['id'] }}">
        <input type="hidden" name="password" value="{{ $user['password'] }}">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="name" class="form-control" id="name" name="name" value="{{ $user['name'] }}">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user['email'] }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="phone" class="form-control" id="phone" name="phone" value="{{ $user['phone'] }}">
        </div>
        <div class="row justify-content-between mt-4">
            <div class="form-group col-md-6 col-lg-5 col-6">
                <a href="{{ route('adminUsersListRender') }}" class="btn btn-danger col-12">Return to estates lists</a>
            </div>
            <div class="form-group col-md-6 col-lg-7 col-6 mb-4">
                <button type="submit" class="btn btn-warning col-12">Update user</button>
            </div>
        </div>
    </form>
</div>

@endsection
