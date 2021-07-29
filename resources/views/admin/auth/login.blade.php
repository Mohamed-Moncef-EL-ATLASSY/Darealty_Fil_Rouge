@extends('admin.adminLayout.adminAuthLayout')

@section('content')


<div class="col-md-5 bg">
        <div class="login d-flex align-items-center py-5">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-7 mx-auto">
                        <h1>Admin Log In</h1>
                        <h4 class="mb-2">Welcome back!</h4>
                        <form action="{{ route('admin.login') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input name="email" required id="email" type="email" placeholder="Email address" autofocus="" class="form-control border-0 shadow-sm px-4">
                            </div>
                            <div class="form-group mb-3">
                                <input id="password" required name="password" type="password" placeholder="Password" class="form-control border-0 shadow-sm px-4 text-primary">
                            </div>

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
