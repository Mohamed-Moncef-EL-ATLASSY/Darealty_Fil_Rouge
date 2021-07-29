<?php

namespace App\Http\Controllers\admin\auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function adminRenderLogin() {
        return view('admin.auth.login');
    }

    public function adminRenderRegister() {
        return view('admin.auth.register');
    }

    public function adminLogin(Request $request) {
        $request->validate([
            'email'     => 'required|email|exists:admins,email',
            'password' => 'required',
        ]);

        $admin = Admin::where(['email' => $request->email])->first();
        //first(): brings out the first existing input from the database

        if ($admin && Hash::check($request->password, $admin->password)) {
            dd('logged in');
        }
    }

    // public function AdminRegister(Request $request) {
    //     //Validation
    //     $this->validate($request, [
    //         'name'      => 'required|min:3|max:255',
    //         'email'     => 'required|email|unique:admins,email',
    //         'password' => 'required|confirmed',
    //     ]);

    //     //Store user
    //     Admin::create([
    //         'name'     => $request->name,
    //         'email'    => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    // }
}
