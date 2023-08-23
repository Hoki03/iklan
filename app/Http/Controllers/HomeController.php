<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function table()
    {
        $data_user = User::get();

        return view('layout/table_user', compact('data_user'));
    }

    public function pelanggan()
    {
        $data_pelanggan = User::get();
        return view('layout/table_pelanggan', compact('data_pelanggan'));
    }
}
