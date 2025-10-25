<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    public function __invoke()
    {
        $jobs = Job::where('title', 'like', '%' . request('query') . '%')->get();

        return view('jobs.results', [
            'jobs' => $jobs,
            'query' => request('query'),
        ]);
    }
}
