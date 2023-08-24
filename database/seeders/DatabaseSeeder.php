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

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
