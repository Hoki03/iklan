<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pelanggan::create([
            'nama'          => 'Hoki',
            'nominal'       => '1000000',
            'keterangan'    => 'Oke',
            'time'          => '08/23/2023 12:55 PM',
            'pilihan'       => 'Radio',
        ]);
    }
}
