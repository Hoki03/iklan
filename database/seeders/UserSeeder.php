<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Hoki',
            'email'     => '672020025@student.uksw.edu',
            'password'  => bcrypt('672020025'),
        ]);

        User::create([
            'name'      => 'Tiara',
            'email'     => '672020242@student.uksw.edu',
            'password'  => bcrypt('672020242'),
        ]);

        User::create([
            'name'      => 'Nanda',
            'email'     => '672020220@student.uksw.edu',
            'password'  => bcrypt('672020220'),
        ]);
    }
}
