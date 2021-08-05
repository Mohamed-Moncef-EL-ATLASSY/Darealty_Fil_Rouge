<?php

namespace App\Http\Controllers\admin\adminMain;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class estateslistController extends Controller
{
    public function adminEstatesListRender() {

        $admin = DB::table('admin');
        $listings = DB::table('listings');

        $listings = Listing::get();

        return view('admin.adminMain.estateslist', [
            'admin' => $admin,
            'listings' => $listings,
        ]);

    }


}
