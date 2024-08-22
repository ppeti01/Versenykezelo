<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competitions')->insert([
            'name' => 'Dota',
            'year' => '2020',
            'languages' => json_encode(['hu', 'en']),
            'correct' => 10,
            'incorrect' => -5,
            'empty' => 0,
        ]);
        DB::table('competitions')->insert([
            'name' => 'GO',
            'year' => '2021',
            'languages' => json_encode(['hu']),
            'correct' => 15,
            'incorrect' => -7.5,
            'empty' => 0,
        ]);
        DB::table('competitions')->insert([
            'name' => 'LoL',
            'year' => '2022',
            'languages' => json_encode(['hu', 'en']),
            'correct' => 10,
            'incorrect' => -5,
            'empty' => 0,
        ]);
        DB::table('competitions')->insert([
            'name' => 'PHP',
            'year' => '2023',
            'languages' => json_encode(['hu', 'de']),
            'correct' => 5,
            'incorrect' => -2.5,
            'empty' => 0,
        ]);

    }
}
