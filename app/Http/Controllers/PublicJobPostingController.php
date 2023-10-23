<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use App\Models\LocationUnit;
use App\Models\ReservationCategory;
use Illuminate\Http\Request;

class PublicJobPostingController extends Controller
{
    public function index()
    {
        $jobs = JobPosting::where('status', 'active')->paginate(10);
        return view('applicants.jobopenings')->with([
            'jobs' => $jobs,
            'locations' => LocationUnit::all(),
            'reservationcategories' => ReservationCategory::orderBy('name', 'asc')->get(),
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(JobPosting $job)
    {
        return view('applicants.jobdetails', compact('job'));
    }
    public function edit(string $id)
    {
    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy(string $id)
    {
    }
}
