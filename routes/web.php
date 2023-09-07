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

Route::group(['prefix' => 'operator', 'middleware' => ['auth', 'admin:operator'], 'as' => 'operator.'], function () {
    Route::get('beranda', [HomeController::class, 'op_beranda'])->name('beranda');
    Route::get('struk/{id}', [HomeController::class, 'struk'])->name('struk');
    Route::get('form', [HomeController::class, 'form_op'])->name('form');
    Route::get('data_transaksi', [HomeController::class, 'transaksi_op'])->name('data_transaksi');
    Route::post('tambah_transaksi', [HomeController::class, 'tambah_transaksi_op'])->name('tambah_transaksi');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin:admin'], 'as' => 'admin.'], function () {

    Route::get('beranda', [HomeController::class, 'adm_beranda'])->name('beranda');
    Route::get('form', [HomeController::class, 'form_adm'])->name('form');


    Route::get('data_user', [HomeController::class, 'user'])->name('data_user');
    Route::get('form_user', [HomeController::class, 'form_user'])->name('form_user');
    Route::delete('hapus_user/{id}', [HomeController::class, 'hapus_user'])->name('hapus_user');
    Route::post('tambah_user', [HomeController::class, 'tambah_user'])->name('tambah_user');

    Route::get('edit_user/{id}', [HomeController::class, 'edit_user'])->name('edit_user');
    Route::put('update_user/{id}', [HomeController::class, 'update_user'])->name('update_user');

    Route::get('edit_transaksi/{id}', [HomeController::class, 'edit_transaksi'])->name('edit_transaksi');
    Route::put('update_transaksi/{id}', [HomeController::class, 'update_transaksi'])->name('update_transaksi');

    Route::get('data_transaksi', [HomeController::class, 'transaksi'])->name('form');
    Route::post('tambah_transaksi', [HomeController::class, 'form'])->name('tambah_transaksi');
    Route::delete('hapus_transaksi/{id}', [HomeController::class, 'hapus_transaksi'])->name('hapus_transaksi');

    Route::get('struk/{id}', [HomeController::class, 'struk'])->name('struk');
    Route::get('printall', [HomeController::class, 'printall'])->name('printall');
});
