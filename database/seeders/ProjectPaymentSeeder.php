<?php

namespace Database\Seeders;

use App\Models\ProjectPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projectContributionId = 1;

        ProjectPayment::factory(10)->create([
            'project_contribution_id' => $projectContributionId,
        ]);
    }
}
