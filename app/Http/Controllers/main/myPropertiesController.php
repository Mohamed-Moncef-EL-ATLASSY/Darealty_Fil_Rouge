<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class myPropertiesController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function usermyPropertiesRender(){
        return view('main.myProperties');
    }
}
