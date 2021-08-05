<?php

namespace App\Http\Controllers\admin\adminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class estateslistController extends Controller
{
    public function adminEstatesListRender() {

        $admin = DB::table('admin');
        $listing = DB::table('listing');

        return view('admin.adminMain.estateslist', [
            'admin' => $admin,
            'listing' => $listing,
        ]);

    }


}
