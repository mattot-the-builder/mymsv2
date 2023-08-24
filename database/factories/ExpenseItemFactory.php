<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExpenseItem>
 */
class ExpenseItemFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'date' => $this->faker->dateTimeThisYear->format('Y-m-d'),
            'details' => $this->faker->sentence($this->faker->numberBetween(3, 10), true),
            'amount' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
