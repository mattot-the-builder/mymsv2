<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MileageClaim>
 */
class MileageClaimFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'trip_date' => $this->faker->dateTimeThisYear()->format('Y-m-d'),
            'trip_name' => $this->faker->sentence($this->faker->numberBetween(3, 10), true),
            'starting_location' => $this->faker->city,
            'destination' => $this->faker->city,
            'mileage' => $this->faker->randomFloat(2, 10, 1000),
            'fuel_cost' => $this->faker->randomFloat(2, 10, 1000),
            'total_claim' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
