<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
            CitySeeder::class,

            RolePermissionSeeder::class,

            UserSeeder::class,

            ProjectCategorySeeder::class,
            ProjectSeeder::class,
            ProjectNewSeeder::class,
            ProjectContributionSeeder::class,
            ProjectCommentSeeder::class,
            ProjectPaymentSeeder::class,

            PayoutSeeder::class,
        ]);
    }
}
