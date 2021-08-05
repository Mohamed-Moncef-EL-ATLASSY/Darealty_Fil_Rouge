<?php

namespace App\Http\Controllers\admin\adminMain;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class userslistController extends Controller
{
    public function adminUsersListRender() {

        $admin = DB::table('admin');
        $users = DB::table('users');

        return view('admin.adminMain.userslist', [
            'admin' => $admin,
            'users' => $users,
        ]);
    }
}
