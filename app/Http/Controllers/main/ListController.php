<?php

namespace App\Http\Controllers\main;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['users']);
    // }


    public function userListRender(){
        // $region = region::get();

        return view('main.list');
    }



    public function listProperty(Request $request) {
        $this->validate($request , [
            'estate_type'        => 'required',
            'estate_city'        => 'required',
            'estate_bedrooms'    => 'required',
            'estate_bathrooms'   => 'required',
            'estate_surface'     => 'required',
            'estate_age'         => 'required',
            'estate_title'       => 'required',
            'estate_price'       => 'required',
            'estate_thumbnail'   => 'required',
            'estate_description' => 'required',
        ]);

        $request->user()->Listings()->create([
            'estate_type'        => $request->estate_type,
            'estate_city'        => $request->estate_city,
            'estate_bedrooms'    => $request->estate_bedrooms,
            'estate_bathrooms'   => $request->estate_bathrooms,
            'estate_surface'     => $request->estate_surface,
            'estate_age'         => $request->estate_age,
            'estate_title'       => $request->estate_title,
            'estate_price'       => $request->estate_price,
            'estate_thumbnail'   => $request->estate_thumbnail,
            'estate_description' => $request->estate_description,
        ]);

        return redirect()->route('userHomeRender');

        // Listing::create([
        //     'estate_type'        => $request->estate_type,
        //     'estate_city'        => $request->estate_city,
        //     'estate_bedrooms'    => $request->estate_bedrooms,
        //     'estate_bathrooms'   => $request->estate_bathrooms,
        //     'estate_surface'     => $request->estate_surface,
        //     'estate_age'         => $request->estate_age,
        //     'estate_title'       => $request->estate_title,
        //     'estate_price'       => $request->estate_price,
        //     'estate_thumbnail'   => $request->estate_thumbnail,
        //     'estate_description' => $request->estate_description,
        // ]);

    }
}

