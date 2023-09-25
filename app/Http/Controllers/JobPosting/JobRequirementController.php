<?php

namespace App\Http\Controllers\JobPosting;
use App\Models\JobPosting;
use App\Models\JobPosting\JobRequirement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobRequirementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.jobs.edit')->with([
            'locationunits' => JobRequirement::all(),
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
    public function store(Request $request,JobPosting $jobposting, JobRequirement $jobrequirement )
    {
       
        if($request->jobSpecification)
      //  dd($request);
        JobRequirement::create([
                    'job_posting_id' => $jobposting->id,
                    'job_specification' => $request->jobSpecification,
                    'knowledge' => $request->jobKnowledge,
                    'skills' => $request->jobSkillCompetency,
                ]);
              return redirect()->back();
             // return view('admin.jobs.partials.specification', compact('jobrequirement'));
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
    public function update(Request $request, JobPosting $jobposting,JobRequirement $jobrequirement)
    {
        $jobrequirement->job_specification = $request->jobSpecification;
        $jobrequirement->knowledge = $request->jobKnowledge;
        $jobrequirement->skills = $request->jobSkillCompetency;
        $jobrequirement->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
