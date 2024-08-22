<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Competitions>
 */
class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'year' => $this->faker->year(),
            'languages' => json_encode(['hu', 'en']),
            'correct' => $this->faker->numberBetween(10, 10),
            'incorrect' => $this->faker->numberBetween(-5, -5),
            'empty' => $this->faker->numberBetween(0, 0),
        ];
    }
}
