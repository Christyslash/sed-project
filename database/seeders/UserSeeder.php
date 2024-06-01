<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // super_admin
        $email = 'super.admin@' . config('app.domain');
        $password = app()->isProduction() ? Str::password() : 'password';
        User::factory()->create([
            'name' => 'SuperAdmin ' . config('app.name'),
            'email' => $email,
            'password' => Hash::make($password),
        ])->assignRole(RoleEnum::SUPER_ADMIN);
        $this->command->info("  > SuperAdmin [$email] : $password");

        // admin
        $email = 'admin@' . config('app.domain');
        $password = app()->isProduction() ? Str::password() : 'password';
        User::factory()->create([
            'name' => 'Admin ' . config('app.name'),
            'email' => $email,
            'password' => Hash::make($password),
        ])->assignRole(RoleEnum::ADMIN);
        $this->command->info("  > Admin [$email] : $password");

        // user
        $email = 'user@' . config('app.domain');
        $password = app()->isProduction() ? Str::password() : 'password';
        User::factory()->create([
            'name' => 'User ' . config('app.name'),
            'email' => $email,
            'password' => Hash::make($password),
        ])->assignRole(RoleEnum::USER);
        $this->command->info("  > User [$email] : $password");
    }
}
