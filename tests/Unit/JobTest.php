<?php

use App\Models\Employer;
use App\Models\Job;
use App\Models\Tag;

it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $tag1 = Tag::factory()->create();
    $tag2 = Tag::factory()->create();

    $job->tags()->attach([$tag1->id, $tag2->id]);

    expect($job->tags)->toHaveCount(2)
        ->and($job->tags->pluck('id'))->toContain($tag1->id)
        ->and($job->tags->pluck('id'))->toContain($tag2->id);
});
