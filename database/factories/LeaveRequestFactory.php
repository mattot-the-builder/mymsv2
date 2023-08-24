<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LeaveRequestFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'start_date' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
            'end_date' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
            'total_leave' => $this->faker->numberBetween(1, 90),
            'reasons' => $this->faker->sentence($this->faker->numberBetween(3, 10), true),
        ];
    }
}
