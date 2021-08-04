<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller {

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
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'required|numeric|min:10',
            'password'  => 'required|confirmed',
        ]);

        //Store user
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);


        //Sign the user in
        auth()->attempt($request->only('email', 'password'));

        //Redirect
        return redirect()->route('userHomeRender');
    }

    public function userLogin(Request $request) {
        $request->validate([
            'email'    => 'required|email|exists:users,email',
            'password' => 'required',
        ]);

        if (!auth()->attempt($request->only('email','password'), $request->remember)) {
            return back()->with('password_status', 'Invalid password entry');
        }

        //Redirect
        return redirect()->route('userHomeRender');
    }

    public function userLogout() {

        auth()->logout();

        return redirect()->route('userLoginRender');
    }
}
