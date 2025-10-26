<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::query()->with(['employer', 'tags'])->where('title', 'like', '%' . request('query') . '%')->get();

        return view('jobs.results', [
            'jobs' => $jobs,
            'query' => request('query'),
        ]);
    }
}
