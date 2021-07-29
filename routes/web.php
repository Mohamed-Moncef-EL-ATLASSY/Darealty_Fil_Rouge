<?php

use App\Http\Controllers\auth\UserAuthController;
use App\Http\Controllers\admin\auth\AdminAuthController;
use App\Http\Controllers\admin\adminMain\DashboardController;
use App\Http\Controllers\main\FindController;
use App\Http\Controllers\main\ListController;
use Illuminate\Support\Facades\Route;


//Home page
Route::get('/', function () { return view('main.home');})->name('userHomeRender') ;

//Register
Route::get('/register', [UserAuthController::class, 'userRenderRegister'] )->name('userRegisterRender');
Route::post('/register', [UserAuthController::class, 'userRegister'] )->name('userRegister');

//Login
Route::get('/login', [UserAuthController::class, 'userRenderLogin'] )->name('userLoginRender');

//List your property
Route::get('/list', [ListController::class, 'userListRender'] )->name('userListRender');

//Find your property
Route::get('/find', [FindController::class, 'userFindRender'] )->name('userFindRender');



//Admin {
    //login
    Route::get('/admin/login', [AdminAuthController::class, 'adminRenderLogin'] )->name('adminLoginRender');
    Route::post('/admin/login', [AdminAuthController::class, 'adminLogin'] )->name('adminLogin');

    //Dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'renderDashboard'] )->name('adminDashboardRender');


// Route::get('/admin/register', [AdminAuthController::class, 'adminRenderRegister'] )->name('admin.register');
// Route::post('/admin/register', [AdminAuthController::class, 'AdminRegister'] )->name('admin.register');


// }

