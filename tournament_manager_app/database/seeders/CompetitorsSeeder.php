<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competitors')->insert([
            'name' => 'John Doe',
            'email' => 'JohnDoe@gmail.com',
            'phone' => '024680246',
            'address' => '01 Laravel, teszt u. 2.',
        ]);
        DB::table('competitors')->insert([
            'name' => 'Jane Smith',
            'email' => 'JaneSmith@gmail.com',
            'phone' => '036925814',
            'address' => '01 Laravel, teszt u. 3.',
        ]);
        DB::table('competitors')->insert([
            'name' => 'Mark Miller',
            'email' => 'MarkMiller@gmail.com',
            'phone' => '048260482',
            'address' => '01 Laravel, teszt u. 4.',
        ]);
        DB::table('competitors')->insert([
            'name' => 'Alice Johnson',
            'email' => 'AliceJohnson@gmail.com',
            'phone' => '050505050',
            'address' => '01 Laravel, teszt u. 5.',
        ]);
        DB::table('competitors')->insert([
            'name' => 'Bob Brown',
            'email' => 'BobBrown@gmail.com',
            'phone' => '062840628',
            'address' => '01 Laravel, teszt u. 6.',
        ]);
    }
}
