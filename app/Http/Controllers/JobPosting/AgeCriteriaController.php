<?php

namespace App\Http\Controllers\JobPosting;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use App\Models\JobPosting\AgeCriteria;
use Illuminate\Http\Request;

class AgeCriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function store(Request $request, JobPosting $jobposting)
    {
        
        AgeCriteria::create([
            'job_posting_id'=>$jobposting->id,
            'minAge' => $request->minAge,
            'maxAge' => $request->maxAge
        ]);
        return redirect()->back();
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AgeCriteria $agecriteria)
    {
       
    }

    
    public function update(Request $request, JobPosting $jobposting, AgeCriteria $agecriterion)
    {
        
        $agecriterion->minAge = $request->minAge;
        $agecriterion->maxAge = $request->maxAge;
        $agecriterion->save();
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
