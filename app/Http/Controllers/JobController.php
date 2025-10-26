<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobRequest;
use App\Models\Job;
use App\Models\Tag;
use Arr;
use Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class JobController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::latest()->get()->groupBy('featured'),
            'tags' => Tag::all(),
        ]);
    }

    public function store(JobRequest $request)
    {
        $validated = $request->validated();

        $validated['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($validated, ['tags']));

        if (!empty($validated['tags'])) {
            $tags = array_map('trim', explode(',', $validated['tags']));
            foreach ($tags as $tag) {
                $tag = Tag::firstOrCreate(['name' => strtolower($tag)]);
                $job->tag($tag->name);
            }
        }

        return redirect()->route('index')->with('success', 'Job posted successfully!');
    }

    public function create()
    {
        return view('jobs.create');
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

    public function edit(Job $job)
    {

    }
}
