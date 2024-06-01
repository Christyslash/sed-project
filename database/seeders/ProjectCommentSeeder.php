<?php

namespace Database\Seeders;

use App\Models\ProjectComment;
use App\Models\ProjectContribution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectContributionId = 1;

        ProjectComment::factory(10)->create([
            'project_contribution_id' => $projectContributionId,
        ]);
    }
}
