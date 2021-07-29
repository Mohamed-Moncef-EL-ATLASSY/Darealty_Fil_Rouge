<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\main\FindController;
use App\Http\Controllers\main\ListController;
use Illuminate\Support\Facades\Route;


//Home page
Route::get('/', function () { return view('main.home');})->name('home') ;

//Register
Route::get('/register', [RegisterController::class, 'index'] )->name('register');
Route::post('/register', [RegisterController::class, 'register'] )->name('UserStore');

//Login
Route::get('/login', [LoginController::class, 'index'] )->name('login');


//List your property
Route::get('/list', [ListController::class, 'index'] )->name('list');

//Find your property
Route::get('/find', [FindController::class, 'index'] )->name('find');

