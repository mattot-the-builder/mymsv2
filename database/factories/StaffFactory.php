<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StaffFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'staff_status' => $this->faker->randomElement(['Permanent Staff', 'Contract Staff', 'Internship']),
            'ic_number' => $this->faker->numberBetween(01010101010101, 999999999999),
            'age' => $this->faker->numberBetween(18, 65),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'address' => $this->faker->address,
            'contact' => $this->faker->phoneNumber,
            'dob' => $this->faker->date(),
            'pob' => $this->faker->city,
            'position' => $this->faker->jobTitle,
            'marital_status' => $this->faker->randomElement(['Single', 'Married', 'Divorced', 'Widowed']),
            'start_date_working' => $this->faker->date(),
            'spouse_name' => $this->faker->name,
            'spouse_contact' => $this->faker->phoneNumber,
            'spouse_position' => $this->faker->jobTitle,
            'spouse_company' => $this->faker->company,
            'emergency_contact' => $this->faker->name,
            'emergency_contact_relationship' => $this->faker->randomElement(['Spouse', 'Parent', 'Sibling', 'Child']),
            'education' => 'degree',
            'vehicle_registration' => $this->faker->randomElement([
                'ABC1234', 'DEF5678', 'GHI9101', 'JKL1121', 'MNO3141',
                'PQR5161', 'STU7181', 'VWX9191', 'YZA2121', 'BCD3131', 'EFG4141', 'HIJ5151', 'KLM6161', 'NOP7171', 'QRS8181',
                'TUV9191', 'WXY2121', 'ZAB3131', 'CDE4141', 'FGH5151', 'IJK6161', 'LMN7171', 'OPQ8181', 'RST9191', 'UVW2121',
                'XYZ3131', 'ABC4141', 'DEF5151', 'GHI6161', 'JKL7171', 'MNO8181', 'PQR9191', 'STU2121', 'VWX3131', 'YZA4141',
            ]),
            'vehicle_type' => $this->faker->randomElement(['Car', 'Motorcycle', 'Van', 'Truck']),
            'vehicle_model' => $this->faker->randomElement(['Toyota', 'Honda', 'Perodua', 'Proton']),
        ];
    }
}
