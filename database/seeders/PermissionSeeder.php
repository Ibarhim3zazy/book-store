<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminPermissions = [
            'Add Admin',
            'View Admin',
            'Edit Admin',
            'Delete Admin',
            'Add Merchant',
            'View Merchant',
            'Edit Merchant',
            'Delete Merchant',
            'Add User',
            'View User',
            'Edit User',
            'Delete User',
        ];

        $merchantPermissions = [
            'Add Employee',
            'View Employee',
            'Edit Employee',
            'Delete Employee',
        ];

        foreach ($adminPermissions as $permission) {
            Permission::updateOrCreate([
                'name' => $permission,
                'guard_name' => 'admin',
            ]);
        }

        foreach ($merchantPermissions as $permission) {
            Permission::updateOrCreate([
                'name' => $permission,
                'guard_name' => 'merchant',
            ]);
        }

    }
}
