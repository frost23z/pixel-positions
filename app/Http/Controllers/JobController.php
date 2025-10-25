<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class JobController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
//        $this->authorize('viewAny', Job::class);

        return view('jobs.index', [
            'jobs' => Job::all()->groupBy('featured'),
            'tags' => Tag::all(),
        ]);
    }

    public function store(JobRequest $request)
    {
        $this->authorize('create', Job::class);

        return Job::create($request->validated());
    }

    public function show(Job $job)
    {
        $this->authorize('view', $job);

        return $job;
    }

    public function update(JobRequest $request, Job $job)
    {
        $this->authorize('update', $job);

        $job->update($request->validated());

        return $job;
    }

    public function destroy(Job $job)
    {
        $this->authorize('delete', $job);

        $job->delete();

        return response()->json();
    }
}
