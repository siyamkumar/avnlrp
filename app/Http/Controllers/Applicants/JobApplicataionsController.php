<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use Illuminate\Http\Request;

class JobApplicataionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $candidate = auth()->guard('applicants')->user();
        $jobapplications = $candidate->jobapplications;
        return view('applicants.myapplications', compact('jobapplications'));
    }

    public function create()
    {
    }
    public function store(Request $request)
    {

    }
    public function show(string $id)
    {

    }
    public function edit(ApplicationReferenceNumber $jobapplication)
    {
        return view('applicants.applications.edit', compact('jobapplication'));
        
    }
    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}
