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

    Route::get('data_user', [HomeController::class, 'user'])->name('data_user');
    Route::get('form_user', [HomeController::class, 'form_user'])->name('form_user');
    Route::delete('hapus_user/{id}', [HomeController::class, 'hapus_user'])->name('hapus_user');
    Route::post('tambah_user', [HomeController::class, 'tambah_user'])->name('tambah_user');

    Route::get('edit_user/{id}', [HomeController::class, 'edit_user'])->name('edit_user');
    Route::put('update_user/{id}', [HomeController::class, 'update_user'])->name('update_user');

    Route::get('data_pelanggan', [HomeController::class, 'pelanggan'])->name('form');
    Route::post('tambah_pelanggan', [HomeController::class, 'form'])->name('tambah_pelanggan');
    Route::delete('hapus_pelanggan/{id}', [HomeController::class, 'hapus_pelanggan'])->name('hapus_pelanggan');

    Route::get('struk', [HomeController::class, 'struk'])->name('struk');
});
