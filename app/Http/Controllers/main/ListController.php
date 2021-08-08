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
        $regions = Region::get();
        $estate_types = EstateType::get();

        return view('main.list', [
            'regions' => $regions,
            'estate_type' => $estate_types
        ]);
    }

    public function listing(){
        return $this->belongsTo(Listing::class);
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
            'estate_thumbnail'   => 'required|mimes:jpeg,png,jpg|max:2048',
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

        return redirect()->route('usermyPropertiesRender');
    }

    // public function store(Request $request)
    // {

    //     $request->validate([
    //         'title'=>'required',
    //         'category'=>'required',
    //         'detail'=>'required',
    //     ]);
    //     // Post Full Image
    //     if($request->hasFile('post_image')){
    //         $image2=$request->file('post_image');
    //         $reFullImage=time().'.'.$image2->getClientOriginalExtension();
    //         $dest2=public_path('/imgs/full');
    //         $image2->move($dest2,$reFullImage);
    //     }else{
    //         $reFullImage='na';
    //     }

    //     $post=new Post;
    //     $post->user_id=0;
    //     $post->cat_id=$request->category;
    //     $post->title=$request->title;
    //     $post->thumb=$reThumbImage;
    //     $post->full_img=$reFullImage;
    //     $post->detail=$request->detail;
    //     $post->tags=$request->tags;
    //     $post->save();

    //     return redirect('admin/post/create')->with('success','Data has been added');

    // }


}

