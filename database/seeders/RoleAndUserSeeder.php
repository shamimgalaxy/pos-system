<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleAndUserSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $admin   = Role::create(['name' => 'Admin']);
        $manager = Role::create(['name' => 'Manager']);
        $cashier = Role::create(['name' => 'Cashier']);

        // Create Admin user
        $adminUser = User::create([
            'name'     => 'Admin User',
            'email'    => 'admin@pos.com',
            'password' => Hash::make('password'),
        ]);
        $adminUser->assignRole($admin);

        // Create Manager user
        $managerUser = User::create([
            'name'     => 'Manager User',
            'email'    => 'manager@pos.com',
            'password' => Hash::make('password'),
        ]);
        $managerUser->assignRole($manager);

        // Create Cashier user
        $cashierUser = User::create([
            'name'     => 'Cashier User',
            'email'    => 'cashier@pos.com',
            'password' => Hash::make('password'),
        ]);
        $cashierUser->assignRole($cashier);
    }
}