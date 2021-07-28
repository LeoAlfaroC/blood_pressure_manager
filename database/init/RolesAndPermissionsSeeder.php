<?php

namespace Database\Init;

use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder
{
    public function __invoke()
    {
        if ($this->present()) {
            return;
        }

        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'manage patients']);
        Permission::create(['name' => 'export staff csv']);
        Permission::create(['name' => 'export patient csv']);

        Role::create(['name' => 'Admin'])
            ->givePermissionTo(['manage patients', 'export staff csv', 'export patient csv']);

        Role::create(['name' => 'Doctor'])
            ->givePermissionTo(['manage patients', 'export patient csv']);

        Role::create(['name' => 'Nurse'])
            ->givePermissionTo(['manage patients']);
    }

    public function present(): bool
    {
        return DB::table('roles')->count() > 0;
    }
}
