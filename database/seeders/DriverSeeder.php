<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drivers = [
            // RedBull Racing drivers
            [
                'first_name' => 'Max',
                'last_name' => 'Verstappen',
                'nationality' => 'Dutch',
                'age' => 24,
                'team_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Sergio',
                'last_name' => 'Perez',
                'nationality' => 'Mexican',
                'age' => 33,
                'team_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Mercedes drivers
            [
                'first_name' => 'Lewis',
                'last_name' => 'Hamilton',
                'nationality' => 'British',
                'age' => 38,
                'team_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'George',
                'last_name' => 'Russell',
                'nationality' => 'British',
                'age' => 25,
                'team_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Ferrari drivers
            [
                'first_name' => 'Charles',
                'last_name' => 'Leclerc',
                'nationality' => 'Monegasque',
                'age' => 25,
                'team_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Carlos',
                'last_name' => 'Sainz',
                'nationality' => 'Spanish',
                'age' => 29,
                'team_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // McLaren drivers
            [
                'first_name' => 'Lando',
                'last_name' => 'Norris',
                'nationality' => 'British',
                'age' => 23,
                'team_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Oscar',
                'last_name' => 'Piastri',
                'nationality' => 'Australian',
                'age' => 22,
                'team_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Aston Martin drivers
            [
                'first_name' => 'Fernando',
                'last_name' => 'Alonso',
                'nationality' => 'Spanish',
                'age' => 42,
                'team_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Lance',
                'last_name' => 'Stroll',
                'nationality' => 'Canadian',
                'age' => 24,
                'team_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('drivers')->insert($drivers);
    }
}