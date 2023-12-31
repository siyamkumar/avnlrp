<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobPostingArnController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, JobPosting $jobposting)
    {

        $applications = $jobposting->arns()->paginate(9);
        if ($request->shortlisted)
            $applications = $jobposting->arns()->where('status', 'shortlisted')->paginate(9);
        if ($request->rejected)
            $applications = $jobposting->arns()->where('status', 'rejected')->paginate(9);
        return view('admin.jobs.applications.index')->with([
            'jobposting' => $jobposting,
            'applications' => $applications,
            'shortlisted' => $request->shortlisted ?? null,
            'rejected' => $request->rejected ?? null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
