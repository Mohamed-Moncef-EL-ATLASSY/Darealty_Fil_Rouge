<?php

namespace App\Http\Controllers\admin\adminMain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function renderDashboard() {
        return view('admin.adminMain.dashboard');
    }
}
