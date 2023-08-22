<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ExpenseClaim;
use App\Models\ExpenseItem;
use App\Models\LeaveRequest;
use App\Models\MileageClaim;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {

        User::factory()->create();
        Staff::factory()->create();
        ExpenseClaim::factory()->create();
        ExpenseItem::factory()->create();
        MileageClaim::factory()->create();
        LeaveRequest::factory()->create();

        // Staff::factory()->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
