<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\admin\auth\AdminAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Listing;

class HomeController extends Controller {

    public function userHomeRender(){
        $listings = Listing::paginate(5);

        return view('main.home', [
            'listings' => $listings
        ]);
    }

}
