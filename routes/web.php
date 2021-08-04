<?php

use App\Http\Controllers\auth\UserAuthController;
use App\Http\Controllers\admin\auth\AdminAuthController;
use App\Http\Controllers\admin\adminMain\DashboardController;
use App\Http\Controllers\main\FindController;
use App\Http\Controllers\main\HomeController;
use App\Http\Controllers\main\ListController;
use App\Http\Controllers\main\myPropertiesController;
use Illuminate\Support\Facades\Route;


//Home page
Route::get('/', [HomeController::class, 'userHomeRender'] )->name('userHomeRender');

//Register
Route::get('/register', [UserAuthController::class, 'userRenderRegister'] )->name('userRegisterRender');
Route::post('/register', [UserAuthController::class, 'userRegister'] )->name('userRegister');

//Login
Route::get('/login', [UserAuthController::class, 'userRenderLogin'] )->name('userLoginRender');
Route::post('/login', [UserAuthController::class, 'userLogin'] )->name('userLogin');

//Logout
Route::get('/logout', [UserAuthController::class, 'userLogout'] )->name('userLogout');

//List your property
Route::get('/list', [ListController::class, 'userListRender'] )->name('userListRender');
Route::post('/list', [ListController::class, 'listProperty'] )->name('listProperty');

//My properties
Route::get('/myProperties', [myPropertiesController::class, 'usermyPropertiesRender'] )->name('usermyPropertiesRender');


//Admin {
    //login
    Route::get('/admin/login', [AdminAuthController::class, 'adminRenderLogin'] )->name('adminLoginRender');
    Route::post('/admin/login', [AdminAuthController::class, 'adminLogin'] )->name('adminLogin');

    //Logout
    Route::get('/admin/logout', [AdminAuthController::class, 'adminLogout'] )->name('adminLogout');


    //Dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboardRender'] )->name('adminDashboardRender');


// Route::get('/admin/register', [AdminAuthController::class, 'adminRenderRegister'] )->name('admin.register');
// Route::post('/admin/register', [AdminAuthController::class, 'AdminRegister'] )->name('admin.register');


// }


//Image upload
// Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
// Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
