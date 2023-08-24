<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('forgot', function () {
    return view('login/forgot');
});

Route::get('recover', function () {
    return view('login/recover');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {

    Route::get('dashboard', [HomeController::class, 'hitung_pelanggan'])->name('dashboard');

    Route::get('form', function () {
        return view('layout/form');
    });

    Route::get('data_user', [HomeController::class, 'user']);
    Route::get('data_pelanggan', [HomeController::class, 'pelanggan']);
    Route::post('tambah_pelanggan', [HomeController::class, 'form'])->name('tambah_pelanggan');
    Route::delete('hapus_pelanggan/{id}', [HomeController::class, 'hapus_pelanggan'])->name('hapus_pelanggan');
});
