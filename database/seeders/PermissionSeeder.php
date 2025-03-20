<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Role
        $admin = Role::create(['name' => 'administrator']);
        $user = Role::create(['name' => 'user']);

        // Permission
        $can_create = Permission::create(['name' => 'can create']);
        $can_read = Permission::create(['name' => 'can read']);
        $can_update = Permission::create(['name' => 'can update']);
        $can_delete = Permission::create(['name' => 'can delete']);
        $can_publish = Permission::create(['name' => 'can publish']);

        $admin->givePermissionTo($can_create, $can_read, $can_update, $can_delete, $can_publish);
        $user->givePermissionTo($can_create, $can_read, $can_update, $can_publish);
    }
}
