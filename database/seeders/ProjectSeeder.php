<?php

namespace Database\Seeders;

use App\Enums\ProjectStatusEnum;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 3; // demo user with role user
        $projectCategoryId = 1;

        Project::factory(3)->create([
            'user_id' => $userId,
            'project_category_id' => $projectCategoryId,
            'status' => ProjectStatusEnum::APPROVED,
        ]);

        // massive seed
        Project::factory(10)->create([
            'user_id' => $userId,
        ]);
    }
}
