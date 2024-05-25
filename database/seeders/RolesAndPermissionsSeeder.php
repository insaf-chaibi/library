<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);

        // Create permissions
        $viewDashboardPermission = Permission::create(['name' => 'view dashboard']);

        // Assign permissions to roles
        $adminRole->givePermissionTo($viewDashboardPermission);
    }
}
