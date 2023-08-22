<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login/login');
});

Route::get('forgot', function () {
    return view('login/forgot');
});

Route::get('recover', function () {
    return view('login/recover');
});

Route::get('dashboard', function () {
    return view('layout/dashboard');
});

Route::get('form', function () {
    return view('layout/form');
});
