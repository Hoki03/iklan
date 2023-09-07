<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda_adm()
    {
        $jum_transaksi = Transaksi::count();
        $jum_user = User::count();
        $data_transaksi = Transaksi::get();
        $data_user = User::get();
        return view('layout/admin/beranda', compact('jum_transaksi', 'jum_user', 'data_transaksi', 'data_user'));
    }

    public function beranda_op()
    {
        $jum_transaksi = Transaksi::count();
        $jum_user = User::count();
        $data_transaksi = Transaksi::get();
        $data_user = User::get();
        return view('layout/operator/beranda', compact('jum_transaksi', 'jum_user', 'data_transaksi', 'data_user'));
    }
}
