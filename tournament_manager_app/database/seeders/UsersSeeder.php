<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'age' => 23,
            'phone' => '0123456789',
            'address' => '01 Laravel, teszt u. 1.',
        ]);
        DB::table('users')->insert([
            'username' => 'JohnDoe',
            'name' => 'John Doe',
            'email' => 'JohnDoe@gmail.com',
            'password' => Hash::make('dummy'),
            'age' => 19,
            'phone' => '024680246',
            'address' => '01 Laravel, teszt u. 2.',
        ]);
        DB::table('users')->insert([
            'username' => 'JaneSmith',
            'name' => 'Jane Smith',
            'email' => 'JaneSmith@gmail.com',
            'password' => Hash::make('dummy'),
            'age' => 20,
            'phone' => '036925814',
            'address' => '01 Laravel, teszt u. 3.',
        ]);
        DB::table('users')->insert([
            'username' => 'MarkMiller',
            'name' => 'Mark Miller',
            'email' => 'MarkMiller@gmail.com',
            'password' => Hash::make('dummy'),
            'age' => 21,
            'phone' => '048260482',
            'address' => '01 Laravel, teszt u. 4.',
        ]);
        DB::table('users')->insert([
            'username' => 'AliceJohnson',
            'name' => 'Alice Johnson',
            'email' => 'AliceJohnson@gmail.com',
            'password' => Hash::make('dummy'),
            'age' => 22,
            'phone' => '050505050',
            'address' => '01 Laravel, teszt u. 5.',
        ]);
        DB::table('users')->insert([
            'username' => 'BobBrown',
            'name' => 'Bob Brown',
            'email' => 'BobBrown@gmail.com',
            'password' => Hash::make('dummy'),
            'age' => 23,
            'phone' => '062840628',
            'address' => '01 Laravel, teszt u. 6.',
        ]);
    }
}
