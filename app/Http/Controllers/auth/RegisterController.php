<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $role = "user";

        //Validation
        $this->validate($request, [
            'name'      => 'required|min:3|max:255',
            'email'     => 'required|email',
            'password' => 'required|confirmed',
            'role' => 'required',
        ]);

        //Store user
        User::create([
            dd($request)
            // 'name'     => $request->name,
            // 'email'    => $request->email,
            // 'role'     => $role,
            // 'password' => Hash::make($request->password),
        ]);


        //Sign the user in

        //Redirect
    }
}
