<?php

namespace App\Http\Controllers\admin\adminMain;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class userslistController extends Controller
{
    public function adminUsersListRender() {
        $admin = DB::table('admin');
        $users = DB::table('users');

        $users = User::get();

        return view('admin.adminMain.userslist', [
            'admin' => $admin,
            'users' => $users,
        ]);
    }

    public function showUser_id($id) {
        $user = User::find($id);
        return view('admin.adminMain.update.updateUser', [
            'user' => $user
        ]);
    }

    public function adminUsersListUpdate($id) {
        $updateUserById = User::find($id);
        // $updateUserById->
        // return redirect()->route('adminUsersListRender');
    }

    public function adminUsersListDelete($id) {
        $deleteUserById = User::find($id);
        $deleteUserById->delete();
        return redirect()->route('adminUsersListRender');
    }
}
