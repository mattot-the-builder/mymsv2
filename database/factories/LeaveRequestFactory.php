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
            // staff_id	start_date end_date total_leave	reasons	
            'staff_id' => 1,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'total_leave' => 5,
            'reasons' => 'Sick',
        ];
    }
}
