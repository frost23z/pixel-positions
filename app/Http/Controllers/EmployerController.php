<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployerRequest;
use App\Models\Employer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EmployerController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Employer::class);

        return Employer::all();
    }

    public function store(EmployerRequest $request)
    {
        $this->authorize('create', Employer::class);

        return Employer::create($request->validated());
    }

    public function show(Employer $employer)
    {
        $this->authorize('view', $employer);

        return $employer;
    }

    public function update(EmployerRequest $request, Employer $employer)
    {
        $this->authorize('update', $employer);

        $employer->update($request->validated());

        return $employer;
    }

    public function destroy(Employer $employer)
    {
        $this->authorize('delete', $employer);

        $employer->delete();

        return response()->json();
    }
}
