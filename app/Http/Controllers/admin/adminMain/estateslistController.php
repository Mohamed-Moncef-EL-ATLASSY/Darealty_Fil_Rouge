<?php

namespace App\Http\Controllers\admin\adminMain;

use App\Models\Region;
use App\Models\Listing;
use App\Models\EstateType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

    public function getListing_id($id) {
        $regions      = Region::get();
        $estate_types = EstateType::get();

        $listing = Listing::find($id);
        return view('admin.adminMain.update.updateEstate', [
            'listing'     => $listing,
            'regions'     => $regions,
            'estate_type' => $estate_types,
        ]);
    }

    public function adminUpdateEstate(Request $request) {
        $listing = Listing::find($request->id);

        $listing->estate_age         = $request->estate_age;
        $listing->estate_bathrooms   = $request->estate_bathrooms;
        $listing->estate_bedrooms    = $request->estate_bedrooms;
        $listing->estate_city        = $request->estate_city;
        $listing->estate_description = $request->estate_description;
        $listing->estate_price       = $request->estate_price;
        $listing->estate_surface     = $request->estate_surface;
        $listing->estate_thumbnail   = $request->estate_thumbnail;
        $listing->estate_title       = $request->estate_title;
        $listing->estate_type        = $request->estate_type;

        $listing->save();
        return redirect()->route('adminEstatesListRender');
    }


    public function adminEstateListDelete($id) {
        $deleteListingById = Listing::find($id);
        $deleteListingById->delete();
        return redirect()->route('adminEstatesListRender');
    }


}
