<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 500; $i++) {
            Transaksi::create([
                'nama'  =>  'Transaksi ke-' . $i,
                'nominal' => random_int(10000, 10000000),
                'keterangan' => '',
                'tanggal' => random_int(2022, 2023) . '/' . random_int(1, 12) . '/' . random_int(1, 30),
                'jenis_id' => random_int(1, 2),
            ]);
        }
    }
}
