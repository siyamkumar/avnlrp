<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceDetailFormRequest;
use App\Models\Applicants\ExperienceDetail;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
   
    public function index()
    {
        
        $expdetails= ExperienceDetail::where('candidate_id',auth()->guard('applicants')->user()->id)->get();
        return view('applicants.next-steps.experience.index')->with(['expdetails'=>$expdetails]);
    }

   
    public function create()
    {
        return view('applicants.next-steps.experience.create');
    }

    public function store(ExperienceDetailFormRequest $request)
    {
        ExperienceDetail::create($request->validated());
        return redirect()->route('experiencedetails.index');
    }

    public function show(string $id)
    {
     
    }

   
    public function edit(ExperienceDetail $experiencedetail)
    {
        return view('applicants.next-steps.experience.edit', compact('experiencedetail'));
    }

    
    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
       
    }
}
