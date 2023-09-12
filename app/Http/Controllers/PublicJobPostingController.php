<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use Illuminate\Http\Request;

class PublicJobPostingController extends Controller
{
    public function index()
    {
        $jobs = JobPosting::all();
        return view('applicants.jobopenings')->with(['jobs'=>$jobs]);
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
