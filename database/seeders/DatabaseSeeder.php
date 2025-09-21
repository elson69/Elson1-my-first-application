<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employer;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 10 employers
        $employers = Employer::factory(10)->create();

        // Create 50 jobs and randomly assign them to the 10 employers
        Job::factory(50)->make()->each(function ($job) use ($employers) {
            $job->employer_id = $employers->random()->id;
            $job->save();
        });
    }
}
