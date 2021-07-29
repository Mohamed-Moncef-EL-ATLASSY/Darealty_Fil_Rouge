<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function userRenderLogin() {
        return view('auth.login');
    }

    public function userRenderRegister() {
        return view('auth.register');
    }

    public function userRegister(Request $request) {
        //Validation
        $this->validate($request, [
            'name'      => 'required|min:3|max:255',
            'email'     => 'required|email',
            'password' => 'required|confirmed',
        ]);

        //Store user
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);


        //Sign the user in

        //Redirect
    }
}
