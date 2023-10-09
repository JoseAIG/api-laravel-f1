<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Teams
        $this->call(TeamSeeder::class);
        // Drivers
        $this->call(DriverSeeder::class);
        // Cars
        $this->call(CarSeeder::class);
    }
}
