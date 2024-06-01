<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (RoleEnum::values() as $role) {
            Role::create([
                'name' => $role,
            ]);
        }

        $superAdminRole = Role::where('name', RoleEnum::SUPER_ADMIN)->first();

        // seed permissions for filament debugger
        collect(config('filament-debugger.permissions'))
            ->map(function ($permission) use ($superAdminRole) {
                $pO = Permission::firstOrCreate([
                    'name' => $permission,
                    'guard_name' => config('filament.auth.guard'),
                ]);

                // give filament debugger permissions to super_admin
                $superAdminRole->givePermissionTo($permission);

                return $pO;
            });
    }
}
