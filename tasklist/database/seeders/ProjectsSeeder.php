<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //this will generate 3 projects
        for ($i = 1; $i <= 3; $i++) {
            Project::create([
                'name' => "Project $i",
            ]);
        }
    }
}
