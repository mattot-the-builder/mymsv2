<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ExpenseClaim;
use App\Models\ExpenseItem;
use App\Models\LeaveRequest;
use App\Models\MileageClaim;
use App\Models\OvertimeClaim;
use App\Models\OvertimeItem;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {

        User::factory()->create([
            'name' => 'mattot',
            'email' => 'mattot@test.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'mattot the builder',
            'email' => 'mattot.builder@test.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(50)->create();

        $users = User::all();

        foreach ($users as $user) {
            Staff::factory()->create([
                'user_id' => $user->id,
            ]);

            ExpenseClaim::factory(10)->create([
                'staff_id' => $user->id,
            ]);

            MileageClaim::factory(10)->create([
                'staff_id' => $user->id,
            ]);

            OvertimeClaim::factory(10)->create([
                'staff_id' => $user->id,
            ]);

            LeaveRequest::factory(10)->create([
                'staff_id' => $user->id,
            ]);
        }

        $expense_claims = ExpenseClaim::all();
        $overtime_claims = OvertimeClaim::all();

        foreach ($expense_claims as $expense_claim) {
            ExpenseItem::factory(10)->create([
                'expense_claim_id' => $expense_claim->id,
            ]);
        }

        foreach ($overtime_claims as $overtime_claim) {
            OvertimeItem::factory(10)->create([
                'overtime_claim_id' => $overtime_claim->id,
            ]);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
