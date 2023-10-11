<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TrackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tracks = [
            [
                'name' => 'Monza Circuit',
                'location' => 'Monza, Italy',
                'length' => 5.793,
                'fastest_lap' => '1:18.887',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Circuit of the Americas',
                'location' => 'Austin, USA',
                'length' => 5.513,
                'fastest_lap' => '1:36.169',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Silverstone Circuit',
                'location' => 'Silverstone, UK',
                'length' => 5.891,
                'fastest_lap' => '1:29.283',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Spa-Francorchamps Circuit',
                'location' => 'Spa, Belgium',
                'length' => 7.004,
                'fastest_lap' => '1:46.286',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Interlagos Circuit',
                'location' => 'Sao Paulo, Brazil',
                'length' => 4.309,
                'fastest_lap' => '1:10.540',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('tracks')->insert($tracks);
    }
}
