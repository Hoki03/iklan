<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaksi::create([
            'nama'          => 'Hoki',
            'nominal'       => '1000000',
            'keterangan'    => 'Oke',
            'tanggal'          => '08/23/2023',
            'jenis_id'       => 'Radio',
        ]);
    }
}
