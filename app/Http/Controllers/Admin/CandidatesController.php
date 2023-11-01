<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Candidate;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\PersonalDetail;



class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $applications = ApplicationReferenceNumber::where('status', '!=', 'draft')->paginate(9);
        if ($request->shortlisted)
            $applications =  ApplicationReferenceNumber::where('status', 'shortlisted')->paginate(9);
        if ($request->rejected)
            $applications = ApplicationReferenceNumber::where('status', 'rejected')->paginate(9);
            if ($request->submitted)
            $applications = ApplicationReferenceNumber::where('status', 'submitted')->paginate(9);
        return view('admin.candidates.index')->with([
            'applications' => $applications,
            'shortlisted' => $request->shortlisted ?? null,
            'rejected' => $request->rejected ?? null,
            'submitted' => $request->submitted ?? null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

       

      
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
    }
}
