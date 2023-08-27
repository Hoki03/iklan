<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('layout/dashboard');
    }

    public function user()
    {
        $data_user = User::get();

        return view('layout/table_user', compact('data_user'));
    }


    public function form_user()
    {
        return view('layout/tambah/tambah_user');
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

        return redirect()->route('admin.form');
    }

    public function edit_pelanggan(Request $request, $id)
    {
        $data_pelanggan = Pelanggan::find($id);
        return view('layout/edit/edit_pelanggan', compact('data_pelanggan'));
    }

    public function update_pelanggan(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama'  =>  'required',
            'nominal' => 'required',
            'keterangan' => 'nullable',
            'time' => 'nullable',
            'pilihan' => 'required',
        ]);
        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data_pelanggan['nama']     = $request->nama;
        $data_pelanggan['nominal']  = $request->nominal;
        $data_pelanggan['pilihan']  = $request->pilihan;
        if ($request->keterangan) {
            $data_pelanggan['keterangan']  = $request->keterangan;
        }
        if ($request->time) {
            $data_pelanggan['time']  = $request->time;
        }

        Pelanggan::whereId($id)->update($data_pelanggan);

        return redirect()->route('admin.form');
    }


    public function hapus_pelanggan(Request $request, $id)
    {
        $data_pelanggan = Pelanggan::find($id);
        if ($data_pelanggan) {
            $data_pelanggan->delete();
        }
        return redirect()->route('admin.form');
    }

    public function hitung_pelanggan()
    {
        $data_pelanggan = Pelanggan::count();
        $data_user = User::count();
        return view('layout/dashboard', compact('data_pelanggan', 'data_user'));
    }

    public function struk()
    {
        return view('print/struk');
    }
}
