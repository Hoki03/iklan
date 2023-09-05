<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function op_beranda()
    {
        return view('layout/operator/beranda');
    }
    public function adm_beranda()
    {
        return view('layout/admin/beranda');
    }

    public function user()
    {
        $data_user = User::get();

        return view('layout/admin/table_user', compact('data_user'));
    }


    public function form_user()
    {
        return view('layout/tambah/tambah_user');
    }

    public function form_adm()
    {
        return view('layout/admin/form_adm');
    }

    public function tambah_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'  =>  'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data_user['name']     = $request->name;
        $data_user['email']  = $request->email;
        $data_user['password']  = bcrypt($request->password);

        User::create($data_user);

        return redirect()->route('admin.data_user');
    }

    public function edit_user(Request $request, $id)
    {
        $data_user = User::find($id);
        return view('layout/edit/edit_user', compact('data_user'));
    }

    public function update_user(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'  =>  'required',
            'email' => 'required',
            'password' => 'nullable',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data_user['name']     = $request->name;
        $data_user['email']  = $request->email;
        if ($request->password) {
            $data_user['password']  = bcrypt($request->password);
        }

        User::whereId($id)->update($data_user);

        return redirect()->route('admin.data_user');
    }

    public function hapus_user(Request $request, $id)
    {
        $data_user = User::find($id);
        if ($data_user) {
            $data_user->delete();
        }
        return redirect()->route('admin.data_user');
    }

    public function transaksi()
    {
        $data_transaksi = Transaksi::get();
        return view('layout/admin/table_transaksi', compact('data_transaksi'));
    }

    public function form(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'  =>  'required',
            'nominal' => 'required',
            'keterangan' => 'nullable',
            'time'  =>  'required',
            'pilihan' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data_transaksi['nama']     = $request->nama;
        $data_transaksi['nominal']  = $request->nominal;
        $data_transaksi['keterangan']  = $request->keterangan;
        $data_transaksi['tanggal']  = $request->tanggal;
        $data_transaksi['jenis_id']  = $request->jenis_id;

        Transaksi::create($data_transaksi);

        return redirect()->route('admin.form');
    }

    public function edit_transaksi(Request $request, $id)
    {
        $data_transaksi = Transaksi::find($id);
        return view('layout/edit/edit_transaksi', compact('data_transaksi'));
    }

    public function update_transaksi(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama'  =>  'required',
            'nominal' => 'required',
            'keterangan' => 'nullable',
            'time' => 'nullable',
            'pilihan' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data_transaksi['nama']     = $request->nama;
        $data_transaksi['nominal']  = $request->nominal;
        $data_transaksi['pilihan']  = $request->pilihan;
        if ($request->keterangan) {
            $data_transaksi['keterangan']  = $request->keterangan;
        }
        if ($request->time) {
            $data_transaksi['time']  = $request->time;
        }

        Transaksi::whereId($id)->update($data_transaksi);

        return redirect()->route('admin.form');
    }


    public function hapus_transaksi(Request $request, $id)
    {
        $data_transaksi = Transaksi::find($id);
        if ($data_transaksi) {
            $data_transaksi->delete();
        }
        return redirect()->route('admin.form');
    }

    public function hitung_transaksi()
    {
        $data_transaksi = Transaksi::count();
        $data_user = User::count();
        return view('layout/dashboard', compact('data_transaksi', 'data_user'));
    }

    public function struk(Request $request, $id)
    {
        $data_transaksi = Transaksi::find($id);
        $transaksi = Transaksi::get();

        return view('print/struk', compact('data_transaksi', 'transaksi'));
    }

    public function printall()
    {
        $data_transaksi = Transaksi::get();
        return view('print/printall', compact('data_transaksi'));
    }
}
