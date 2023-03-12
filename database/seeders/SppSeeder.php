<?php

namespace Database\Seeders;

use App\Models\Spp;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spp::create([
            'nominal' => 500000,
            'tahun'   => '2015',
        ]);

        Spp::create([
            'nominal' => 1000000,
            'tahun'   => '2010',
        ]);

        Spp::create([
            'nominal' => 2000000,
            'tahun'   => '2012',
        ]);

        Spp::create([
            'nominal' => 5000000,
            'tahun'   => '2015',
        ]);
    }
}
