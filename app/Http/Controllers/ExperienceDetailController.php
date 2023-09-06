<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ExperienceDetail;
use App\Http\Requests\ExperienceDetailFormRequest;
use Illuminate\Http\Request;
use DB;

class ExperienceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    $expdetails= ExperienceDetail::where('candidate_id',auth()->guard('applicants')->user()->id)->get();
    //dd($expdetails);

        return view('applicants.next-steps.experience.index')->with(['expdetails'=>$expdetails]);
    }
       
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
     
            return view('applicants.next-steps.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceDetailFormRequest $request)
    {
        ExperienceDetail::create($request->validated());
        return redirect()->route('experiencedetails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExperienceDetail $experienceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExperienceDetail $experienceDetail)
    {
        return view('applicants.next-steps.experience.create', compact('experienceDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceDetailFormRequest $request, ExperienceDetail $experienceDetail)
    {
        $experienceDetail->fill($request->validated());
        $experienceDetail->save();
        return redirect()->route('experienceDetails.create')->with('success', 'Details Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExperienceDetail $experienceDetail)
    {
        //
    }
}
