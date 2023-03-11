<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'          => 'Administrator',
            'email'         => 'admin@gmail.com',
            'jenis_kelamin' => 'laki-laki',
            'password'      => bcrypt('12345678'),
            'role'          => 'admin'
        ]);
        User::create([
            'kelas_id'      => 3,
            'name'          => 'Hibban',
            'nis'           => 182648647364,
            'nisn'          => 473643298423,
            'alamat'        => 'Margo City',
            'no_telp'       => '14045',
            'jenis_kelamin' => 'laki-laki',
            'email'         => 'hibban@gmail.com',
            'password'      => bcrypt('12345678'),
            'role'          => 'siswa'
        ]);
    }
}
