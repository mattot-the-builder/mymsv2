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
            'expense_claim_id' => 1,
            'date' => $this->faker->date(),
            'details' => 'Expense item details',
            'amount' => $this->faker->randomFloat(2, 0, 999999.99),
        ];
    }
}
