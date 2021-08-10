<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main\HomeController;
use App\Http\Controllers\main\ListController;
use App\Http\Controllers\auth\UserAuthController;
use App\Http\Controllers\main\myPropertiesController;
use App\Http\Controllers\admin\auth\AdminAuthController;
use App\Http\Controllers\admin\adminMain\DashboardController;
use App\Http\Controllers\admin\adminMain\estateslistController;
use App\Http\Controllers\admin\adminMain\userslistController;

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
Route::get('/myProperties/update/{id}', [myPropertiesController::class, 'getListing_id'] );
Route::post('/myProperties/update/', [myPropertiesController::class, 'userUpdateEstate'] )->name('userUpdateEstate');
Route::get('/myProperties/delete/{id}', [myPropertiesController::class, 'userEstateListDelete'] );

//Admin login
Route::get('/admin/login', [AdminAuthController::class, 'adminRenderLogin'] )->name('adminLoginRender');
Route::post('/admin/login', [AdminAuthController::class, 'adminLogin'] )->name('adminLogin');

//Admin Logout
Route::get('/admin/logout', [AdminAuthController::class, 'adminLogout'] )->name('adminLogout');


//Admin Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboardRender'] )->name('adminDashboardRender');

//Admin Users List + Update user + Delete user
Route::get('/admin/Users-List', [userslistController::class, 'adminUsersListRender'] )->name('adminUsersListRender');
Route::get('/admin/Users-List/update/{id}', [userslistController::class, 'showUser_id'] );
Route::post('/admin/Users-List/update/', [userslistController::class, 'adminUpdateUser'] )->name('adminUpdateUser');
Route::get('/admin/Users-List/delete/{id}', [userslistController::class, 'adminUsersListDelete'] );


//Admin Estates List + Update estate + Delete estate
Route::get('/admin/Estates-List', [estateslistController::class, 'adminEstatesListRender'] )->name('adminEstatesListRender');
Route::get('/admin/Estates-List/update/{id}', [estateslistController::class, 'getListing_id'] );
Route::post('/admin/Estates-List/update/', [estateslistController::class, 'adminUpdateEstate'] )->name('adminUpdateEstate');
Route::get('/admin/Estates-List/delete/{id}', [estateslistController::class, 'adminEstatsListDelete'] );


// Route::get('/admin/register', [AdminAuthController::class, 'adminRenderRegister'] )->name('admin.register');
// Route::post('/admin/register', [AdminAuthController::class, 'AdminRegister'] )->name('admin.register');


// }


//Image upload
// Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
// Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');
