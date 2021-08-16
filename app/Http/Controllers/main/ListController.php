<?php

namespace App\Http\Controllers\main;

use App\Models\Region;
use App\Models\Listing;
use App\Models\EstateType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }


    public function userListRender(){
        $regions      = Region::get();
        $estate_types = EstateType::get();
        // $listing      = Listing::get();

        return view('main.list', [
            // 'listing'     => $listing,
            'regions'     => $regions,
            'estate_type' => $estate_types
        ]);
    }

    // public function listing(){
    //     return $this->belongsTo(Listing::class);
    // }


    public function listProperty(Request $request) {

        $this->validate($request , [
            'estate_type'        => 'required',
            'estate_city'        => 'required',
            'estate_bedrooms'    => 'required',
            'estate_bathrooms'   => 'required',
            'estate_surface'     => 'required',
            'estate_age'         => 'required',
            'estate_title'       => 'required',
            'estate_price'       => 'required|numeric',
            'estate_thumbnail'   => 'required|mimes:jpeg,png,jpg|max:2048',
            'estate_description' => 'required',
        ]);

        //Image Upload
        $getEstateTitle = $request->estate_title; //Get property title
        $getTimeInSec = time(); //Get current tim in secondes
        $getCurrentTime = date('Y_m_d°H-i-s',$getTimeInSec); //Get current time in Year-Month-Day Hour:Minutes:Secondes
        $getExtension = $request->file('estate_thumbnail')->getClientOriginalExtension(); //Get file Extension

        $property_image_upload = $getEstateTitle . '--' . $getCurrentTime . '.' . $getExtension; //Set a new name for the uploaded file(image)

        $request->estate_thumbnail->move(public_path('properties_images'), $property_image_upload);


        $request->user()->Listings()->create([
            'estate_type'        => $request->estate_type,
            'estate_city'        => $request->estate_city,
            'estate_bedrooms'    => $request->estate_bedrooms,
            'estate_bathrooms'   => $request->estate_bathrooms,
            'estate_surface'     => $request->estate_surface,
            'estate_age'         => $request->estate_age,
            'estate_title'       => $request->estate_title,
            'estate_price'       => $request->estate_price,
            'estate_thumbnail'   => $property_image_upload,
            'estate_description' => $request->estate_description,
        ]);

        return redirect()->route('usermyPropertiesRender');
    }
}

