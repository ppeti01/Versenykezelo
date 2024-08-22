<?php

namespace Database\Factories;

//use Dotenv\Util\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Users>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $allNames = ['John Doe', 'Jane Smith', 'Mark Miller', 'Alice Johnson', 'Bob Brown'];
        $Name = array_slice($allNames, 1, 5);
        foreach ($Name as $n) {
            echo $n;
    }
        return [
            'name' => $Name,
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'age' => $this->faker->numberBetween(18, 30),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}
