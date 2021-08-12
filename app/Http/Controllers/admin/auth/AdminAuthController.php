<?php

namespace App\Http\Controllers\admin\auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminAuthController extends Controller {
    public function adminRenderLogin() {
        return view('admin.auth.login');
    }

    public function adminRenderRegister() {
        return view('admin.auth.register');
    }

    public function adminLogin(Request $request) {
        $request->validate([
            'email'    => 'required|email|exists:admins,email',
            'password' => 'required',
        ]);

        $admin = Admin::where(['email' => $request->email])->first();

        if ($admin &&  strcmp('Admin' , $admin->password) == 0 ) {
        //Redirect
        return redirect()->route('adminUsersListRender');
        }

        else {
            return back()->with('password_status', 'Invalid password entry');
        }


    }

    public function adminLogout() {
        auth()->logout();
        return redirect()->route('adminLoginRender');
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
