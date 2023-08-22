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
            'user_id' => 1,
            'staff_status' => $this->faker->randomElement(['Permanent', 'Intern']),
            // 'front_ic' => $this->faker->image('public/storage/staffs/front_ic', 200, 200, 'people'),
            // 'back_ic' => $this->faker->image('public/storage/staffs/back_ic', 200, 200, 'people'),
            'ic_number' => '010101-01-0101',
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
            'vehicle_registration' => 'DBA 1234',
            'vehicle_type' => $this->faker->randomElement(['Car', 'Motorcycle', 'Van', 'Truck']),
            'vehicle_model' => 'Proton',
        ];
    }
}
