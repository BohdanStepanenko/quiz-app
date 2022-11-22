<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $results = [
            'Q1' => $this->faker->randomDigit(),
            'Q2' => $this->faker->randomDigit(),
            'Q3' => $this->faker->randomDigit(),
            'Q4' => $this->faker->randomDigit(),
            'Q5' => $this->faker->randomDigit(),
            'Q6' => $this->faker->randomDigit(),
            'Q7' => $this->faker->randomDigit(),
            'Q8' => $this->faker->randomDigit(),
            'Q9' => $this->faker->randomDigit(),
            'Q10' => $this->faker->randomDigit(),
        ];

        $summary = array_sum($results);

        return [
            'user_id' => User::all()->random(),
            'results' => $results,
            'summary' => $summary,
        ];
    }
}
