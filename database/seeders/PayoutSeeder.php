<?php

namespace Database\Seeders;

use App\Models\Payout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = 1;
        $projectId = 1;

        Payout::factory(3)->create([
            'user_id' => $userId,
            'project_id' => $projectId,
        ]);
    }
}
