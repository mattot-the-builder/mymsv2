<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use app\Models\User;
use App\Models\Staff;

use App\Models\ExpenseClaim;
use App\Models\ExpenseItem;
use App\Models\LeaveRequest;
use App\Models\MileageClaim;
use App\Models\OvertimeClaim;
use App\Models\OvertimeItem;


class StaffSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

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
    }
}
