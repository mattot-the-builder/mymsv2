<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OvertimeItem>
 */
class OvertimeItemFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'date' => $this->faker->dateTimeThisYear->format('Y-m-d'),
            'details' => $this->faker->sentence($this->faker->numberBetween(3, 10), true),
            'start_time' => str_pad($this->faker->numberBetween(0, 23), 2, '0', STR_PAD_LEFT) . ":00:00",
            'end_time' => str_pad($this->faker->numberBetween(0, 23), 2, '0', STR_PAD_LEFT) . ":00:00",
            'total_hour' => $this->faker->numberBetween(2, 0, 24),
        ];
    }
}
