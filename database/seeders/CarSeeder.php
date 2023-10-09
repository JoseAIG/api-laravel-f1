<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            // Red Bull
            [
                'model' => 'RB16B',
                'manufacturer' => 'Red Bull Racing',
                'year' => 2021,
                'power' => 950,
                'engine' => 'Honda',
                'team_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Mercedes
            [
                'model' => 'W12',
                'manufacturer' => 'Mercedes-AMG Petronas Formula One Team',
                'year' => 2021,
                'power' => 950,
                'engine' => 'Mercedes',
                'team_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Ferrari
            [
                'model' => 'SF21',
                'manufacturer' => 'Scuderia Ferrari Mission Winnow',
                'year' => 2021,
                'power' => 950,
                'engine' => 'Ferrari',
                'team_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // McLaren
            [
                'model' => 'MCL35M',
                'manufacturer' => 'McLaren F1 Team',
                'year' => 2021,
                'power' => 950,
                'engine' => 'Mercedes',
                'team_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Aston Martin
            [
                'model' => 'AMR21',
                'manufacturer' => 'Aston Martin Cognizant Formula One Team',
                'year' => 2021,
                'power' => 950,
                'engine' => 'Mercedes',
                'team_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('cars')->insert($cars);
    }
}
