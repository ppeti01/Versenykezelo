<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rounds>
 */
class RoundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $allNames = ['John Doe', 'Jane Smith', 'Mark Miller', 'Alice Johnson', 'Bob Brown'];

        // Véletlenszerű számú versenyző kiválasztása a listából
        $competitorNames = $this->faker->randomElements($allNames, $this->faker->numberBetween(2, 5));

        return [
            'competition_id' => \App\Models\Competition::factory(),
            'names' => json_encode($competitorNames), // A versenyzők nevei JSON formátumban
            'date' => $this->faker->date(),
        ];
    }
}
