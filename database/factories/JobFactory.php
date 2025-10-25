<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->randomElement(['$40,000 - $60,000', '$60,000 - $80,000', '$80,000 - $100,000']),
            'location' => $this->faker->randomElement(['New York, NY', 'San Francisco, CA', 'Remote']),
            'schedule' => $this->faker->randomElement(['Full-time', 'Part-time', 'Contract']),
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'employer_id' => Employer::factory(),
        ];
    }
}
