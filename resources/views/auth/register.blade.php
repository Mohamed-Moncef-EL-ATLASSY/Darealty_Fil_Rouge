@extends('layouts.userAuthlayout')

@section('content')


<!-- The content half -->
<div class="col-md-5 bg">
    <div class="login d-flex align-items-center py-5">

        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 mx-auto">
                    <h1>Register</h1>
                    <h4 class="mb-2">Welcome to Darealty!</h4>
                    <h5 class="mb-4"><u>Register to Darealty to customize your searches and see your account details.</u></h5>

                    <form action="{{ route('userRegister') }}" method="post">

                        @csrf
                        <div class="form-group mb-3">
                            <input id="name" name="name" type="text" placeholder="Full Name" autofocus="" class="form-control border-2 shadow-sm px-4 @error('name') border border-danger @enderror" value="{{ old('name') }}">
                            @error('name')
                                <div class="badge badge-danger bg-danger mt-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input id="email" name="email" type="email" placeholder="Email address" autofocus="" class="form-control border-2 shadow-sm px-4 @error('email') border border-danger @enderror" value="{{ old('email') }}">
                            @error('email')
                                <div class="badge badge-danger bg-danger mt-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <input id="phone" name="phone" type="text" placeholder="Phone Number" autofocus="" class="form-control border-2 shadow-sm px-4 @error('phone') border border-danger @enderror" value="{{ old('phone') }}">
                            @error('phone')
                                <div class="badge badge-danger bg-danger mt-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input id="password" name="password" type="password" placeholder="Password" class="form-control border-2 shadow-sm px-4 @error('password') border border-danger @enderror">
                            @error('password')
                                <div class="badge badge-danger bg-danger mt-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" class="form-control border-2 shadow-sm px-4 @error('password_confirmation') border border-danger @enderror">
                            @error('password_confirmation')
                            <div class="badge badge-danger bg-danger mt-3">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit" name="submit">Sign up</button>
                        <a href="{{ route('userLoginRender') }}" class="w-100 btn btn-lg btn-dark">Already have an account?</a>
                    </form>

                    <p class="mt-5 mb-3 text-center">&copy; Darealty</p>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
