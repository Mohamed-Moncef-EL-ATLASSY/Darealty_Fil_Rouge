<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['users']);
    // }


    public function userListRender(){
        return view('main.list');
    }

    public function listProperty(Request $request) {
        $this->validate($request , [
            'estate_type' => 'required',
            'estate_city' => 'required',
            'estate_bedrooms' => 'required',
            'estate_bathrooms' => 'required',
            'estate_surface' => 'required',
            'estate_age' => 'required',
            'estate_title' => 'required',
            'estate_price' => 'required',
            'estate_thumbnail' => 'required',
            'estate_description' => 'required',
        ]);

        // $table->string('estate_type');
        // $table->string('estate_city');
        // $table->integer('estate_bedrooms');
        // $table->integer('estate_bathrooms');
        // $table->integer('estate_surface');
        // $table->integer('estate_age');
        // $table->string('estate_title');
        // $table->string('estate_price');
        // $table->string('estate_thumbnail');
        // $table->text('estate_description');
    }
}

