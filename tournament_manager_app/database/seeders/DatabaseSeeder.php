<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Competition;
use App\Models\Competitor;
use App\Models\Round;
use App\Models\User;
use Database\Factories\CompetitorFactory;
use Database\Factories\RoundFactory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\UserOriginal::factory(10)->create();

        // \App\Models\UserOriginal::factory()->create([
        //     'name' => 'Test UserOriginal',
        //     'email' => 'test@example.com',
        // ]);

        //User::factory(5)->create();
        //Competition::factory(5)->create();
        //Round::factory(3)->create();
        //Competitor::factory(10)->create();

        $this->call([
            UsersSeeder::class,
            CompetitionsSeeder::class,
            CompetitorsSeeder::class,
            RoundsSeeder::class,
        ]);
    }
}
