<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ChampionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $championships = [
            [
                'year' => 2021,
                'driver_name' => 'Max Verstappen',
                'team_name' => 'Redbull Racing',
                'points' => 395.5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'year' => 2020,
                'driver_name' => 'Lewis Hamilton',
                'team_name' => 'Mercedes',
                'points' => 347,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'year' => 2019,
                'driver_name' => 'Lewis Hamilton',
                'team_name' => 'Mercedes',
                'points' => 413,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'year' => 2018,
                'driver_name' => 'Lewis Hamilton',
                'team_name' => 'Mercedes',
                'points' => 408,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'year' => 2017,
                'driver_name' => 'Lewis Hamilton',
                'team_name' => 'Mercedes',
                'points' => 363,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('championships')->insert($championships);
    }
}
