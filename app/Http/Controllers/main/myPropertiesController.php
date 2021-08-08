<?php

namespace App\Http\Controllers\main;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class myPropertiesController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }

    public function propertyBy(){
        return $this->user->contains('user_id', $user->id);
    }

    public function usermyPropertiesRender(){
        $listings = Listing::paginate(8);

        return view('main.myProperties', [
            'listings' => $listings
        ]);
    }

    public function user() {
        return $this->hasMany(Listing::class);
    }
}
