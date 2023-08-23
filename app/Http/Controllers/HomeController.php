<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function user()
    {
        $data_user = User::get();

        return view('layout/table_user', compact('data_user'));
    }

    public function pelanggan()
    {
        $data_pelanggan = Pelanggan::get();
        return view('layout/table_pelanggan', compact('data_pelanggan'));
    }

    public function form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'  =>  'required',
            'nominal' => 'required',
            'keterangan' => 'required',
            'time'  =>  'required',
            'pilihan' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data_pelanggan['nama']     = $request->nama;
        $data_pelanggan['nominal']  = $request->nominal;
        $data_pelanggan['keterangan']  = $request->keterangan;
        $data_pelanggan['time']  = $request->time;
        $data_pelanggan['pilihan']  = $request->pilihan;

        Pelanggan::create($data_pelanggan);

        return redirect()->route('form');
    }

    public function hapus_pelanggan(Request $request, $id)
    {
        $data_pelanggan = Pelanggan::find($id);
        if ($data_pelanggan) {
            $data_pelanggan->delete();
        }
        return redirect()->route('form');
    }
}
