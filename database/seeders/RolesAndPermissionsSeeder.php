<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // $role = Role::create(['name' => 'Super Admin']);
        // $role = Role::create(['name' => 'Staff']);
        // $role = Role::create(['name' => 'Guest']);

        $users = User::all();

        foreach ($users as $user) {
            if ($user->id != 1 && $user->id != 2 && $user->id != 3) {
                $user->assignRole('Staff');
                $user->removeRole('staff');
            }
        }

        // User::find(1)->removeRole('Staff');
        // User::find(1)->assignRole('Super Admin');
        // User::find(2)->removeRole('Staff');
        // User::find(2)->assignRole('Super Admin');
        // User::find(3)->removeRole('Staff');
        // User::find(3)->assignRole('Super Admin');
    }
}
