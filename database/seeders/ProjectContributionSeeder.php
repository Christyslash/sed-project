<?php

namespace Database\Seeders;

use App\Enums\ContributionStatusEnum;
use App\Models\ProjectContribution;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectContributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 1;
        $projectId = 1;

        $user = User::find($userId);

        ProjectContribution::factory(10)->create([
            'project_id' => $projectId,
        ])->each(function (ProjectContribution $contribution) use ($user) {
            $user->contributions()->attach($contribution, [
                'status' => ContributionStatusEnum::PUBLIC,
            ]);
        });
    }
}
