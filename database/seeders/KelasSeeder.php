<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            'name' => '5-E'
        ]);
        Kelas::create([
            'name' => '5-F'
        ]);
        Kelas::create([
            'name' => '6-E'
        ]);
        Kelas::create([
            'name' => '6-F'
        ]);
    }
}
