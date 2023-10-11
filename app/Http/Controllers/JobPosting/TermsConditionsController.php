<?php

namespace App\Http\Controllers\JobPosting;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use App\Models\JobPosting\TermsCondition;
use Illuminate\Http\Request;

class TermsConditionsController extends Controller
{
    public function index()
    {
        //
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
    public function store(Request $request,JobPosting $jobposting )
    {
        if($request->jobTerms)
        TermsCondition::create([
                    'job_posting_id' => $jobposting->id,
                    'job_terms' => $request->jobTerms,
                    
                ]);
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
    public function update(Request $request, JobPosting $jobposting,TermsCondition $jobterms)
    {
        $jobterms->job_terms = $request->jobTerms;
       
        $jobterms->save();
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
