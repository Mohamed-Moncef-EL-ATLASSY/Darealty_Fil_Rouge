@extends('layouts.userAuthlayout')

@section('content')


<!-- The content half -->
<div class="col-md-5 bg">
    <div class="login d-flex align-items-center py-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 mx-auto">
                    <h1>Log In</h1>
                    <h4 class="mb-2">Welcome back!</h4>
                    <h5 class="mb-4"><u>Log in to Darealty to view our featured estates and your favorite
                            preferences.</u></h5>
                    <form action="/" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <input id="email" type="email" placeholder="Email address" autofocus="" class="form-control border-0 shadow-sm px-4">
                        </div>
                        <div class="form-group mb-3">
                            <input id="password" type="password" placeholder="Password" class="form-control border-0 shadow-sm px-4 text-primary">
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                            <label for="customCheck1" class="custom-control-label">Remember Me</label>
                        </div>

                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit" name="submit">Log in</button>
                        <a href="{{ route('userRegisterRender') }}" class="w-100 btn btn-lg btn-dark">New User?</a>
                    </form>

                    <p class="mt-3 text-center">&copy; Darealty</p>

                </div>
            </div>
        </div>
    </div>
</div>




@endsection
