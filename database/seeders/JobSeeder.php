<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        Job::factory()
            ->count(50)
            ->hasAttached(Tag::factory()->count(3)->create())
            ->create();
    }
}
