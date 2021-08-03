@extends('admin.adminLayout.adminAuthLayout')

@section('content')


<div class="col-md-5 bg">
        <div class="login d-flex align-items-center py-5">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 mx-auto">
                        <h1>Admin Log In</h1>
                        <h4 class="mb-2">Welcome back!</h4>
                        <form action="{{ route('adminLogin') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input id="email" name="email" type="email" placeholder="Email address" autofocus="" class="form-control border-2 shadow-sm px-4 @error('email') border border-danger @enderror" value="{{ old('email') }}">
                            </div>
                            @error('email')
                            <div class="badge badge-danger bg-danger mb-3">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="form-group mb-3">
                                <input id="password" name="password" type="password" placeholder="Password" class="form-control border-2 shadow-sm px-4 @error('password') border border-danger @enderror">
                            </div>
                            @error('password')
                            <div class="badge badge-danger bg-danger mb-3">
                                {{ $message }}
                            </div>
                            @enderror
                            @if (session('password_status'))
                            <span class="badge bg-danger mb-3">
                                {{ session('password_status') }}
                            </span>
                            @endif

                            <div class="custom-control custom-checkbox mb-3">
                                <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                <label for="customCheck1" class="custom-control-label">Remember Me</label>
                            </div>

                            <button class="w-100 btn btn-lg btn-primary mb-3" type="submit" name="submit">Log in</button>
                        </form>
                        <p class="mt-3 text-center">&copy; Darealty</p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
