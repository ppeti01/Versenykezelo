<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoundsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rounds')->insert([
            'competition_id' => 1,
            'round_name' => 'I.',
            'names' => json_encode(['John Doe', 'Jane Smith', 'Mark Miller']),
            'date' => '2020-01-01'
        ]);
        DB::table('rounds')->insert([
            'competition_id' => 1,
            'round_name' => 'II.',
            'names' => json_encode(['Alice Johnson', 'Bob Brown']),
            'date' => '2020-01-01'
        ]);
        DB::table('rounds')->insert([
            'competition_id' => 1,
            'round_name' => 'III.',
            'names' => json_encode(['Alice Johnson', 'John Doe']),
            'date' => '2020-01-02'
        ]);

        DB::table('rounds')->insert([
            'competition_id' => 3,
            'round_name' => 'I.',
            'names' => json_encode(['John Doe', 'Mark Miller']),
            'date' => '2022-06-20'
        ]);
        DB::table('rounds')->insert([
            'competition_id' => 3,
            'round_name' => 'II.',
            'names' => json_encode(['Alice Johnson', 'Bob Brown', 'Jane Smith']),
            'date' => '2022-06-21'
        ]);
        DB::table('rounds')->insert([
            'competition_id' => 3,
            'round_name' => 'III.',
            'names' => json_encode(['Jane Smith', 'Mark Miller']),
            'date' => '2022-06-22'
        ]);

        DB::table('rounds')->insert([
            'competition_id' => 2,
            'round_name' => 'I.',
            'names' => json_encode(['Mark Miller', 'Alice Johnson']),
            'date' => '2021-09-1'
        ]);
        DB::table('rounds')->insert([
            'competition_id' => 2,
            'round_name' => 'II.',
            'names' => json_encode(['Bob Brown', 'Jane Smith', 'John Doe']),
            'date' => '2021-09-10'
        ]);
    }
}
