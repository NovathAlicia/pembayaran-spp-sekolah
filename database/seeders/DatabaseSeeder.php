<?php

namespace Database\Seeders;

use Database\Seeders\SppSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\KelasSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KelasSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SppSeeder::class);
    }
}
