<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OvertimeClaim>
 */
class OvertimeClaimFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'total_hours' => $this->faker->numberBetween(1, 12),
            'ot_code' => 1.5,
            'total_claim' => $this->faker->randomFloat(2, 100, 5000),
        ];
    }
}
