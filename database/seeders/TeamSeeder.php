<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            'name' => 'RedBull Racing',
            'logo' => 'https://i.bleacherreport.net/images/team_logos/328x328/red_bull_racing.png?canvas=492,328',
            'engine' => 'Honda',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('teams')->insert([
            'name' => 'Mercedes AMG Petronas',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Mercedes_AMG_Petronas_F1_Logo.svg/512px-Mercedes_AMG_Petronas_F1_Logo.svg.png',
            'engine' => 'Mercedes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('teams')->insert([
            'name' => 'Ferrari',
            'logo' => 'https://img.remediosdigitales.com/96633b/140013_cor/1024_2000.jpg',
            'engine' => 'Ferrari',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('teams')->insert([
            'name' => 'McLaren',
            'logo' => 'https://logowik.com/content/uploads/images/mclaren-formula-1-team8249.logowik.com.webp',
            'engine' => 'Mercedes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('teams')->insert([
            'name' => 'Aston Martin',
            'logo' => 'https://logowik.com/content/uploads/images/952_astonmartin.jpg',
            'engine' => 'Mercedes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
