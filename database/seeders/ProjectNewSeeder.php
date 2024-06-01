<?php

namespace Database\Seeders;

use App\Models\ProjectNew;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectNewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectNew::factory(5)->create([
            'project_id' => 1,
        ]);
    }
}
