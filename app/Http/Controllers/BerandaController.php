<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda_adm()
    {
        $data_transaksi = Transaksi::count();
        $data_user = User::count();
        return view('layout/admin/beranda', compact('data_transaksi', 'data_user'));
    }
    public function beranda_op()
    {
        $data_transaksi = Transaksi::count();
        $data_user = User::count();
        return view('layout/operator/beranda', compact('data_transaksi', 'data_user'));
    }
}
