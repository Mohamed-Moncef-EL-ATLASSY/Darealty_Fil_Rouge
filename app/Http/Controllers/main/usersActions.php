<?php

namespace App\Http\Controllers\main;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class usersActions extends Controller
{
    public function UserActionRender() {
        $user = DB::table('users');
        $user = User::get();

        return view('main.userActions', [
            'users' => $user,
        ]);
    }

    public function showUser_id($id) {
        $user = User::find($id);
        return view('main.userActions', [
            'user' => $user
        ]);
    }

    public function userUpdate(Request $request) {
        $user = User::find($request->id);

        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->phone    = $request->phone;
        $user->password = $request->password;

        $user->save();
        return redirect()->route('userHomeRender');
    }

    public function userDelete($id) {
        $deleteUserById = User::find($id);
        $deleteUserById->delete();
        auth()->logout();
        return redirect()->route('userLoginRender');
    }
}
