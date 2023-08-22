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
            //generate faker data for following
            // staff_id	trip_date	trip_name	starting_location	destination	mileage	fuel_cost	total_claim
            'staff_id' => 1,
            'trip_date' => $this->faker->date(),
            'trip_name' => $this->faker->word,
            'starting_location' => $this->faker->city,
            'destination' => $this->faker->city,
            'mileage' => $this->faker->randomFloat(2, 100, 1000),
            'fuel_cost' => $this->faker->randomFloat(2, 10, 100),
            'total_claim' => $this->faker->randomFloat(2, 100, 1000),
        ];
    }
}
