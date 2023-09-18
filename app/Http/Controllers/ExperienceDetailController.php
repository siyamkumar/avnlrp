<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ExperienceDetail;
use App\Http\Requests\ExperienceDetailFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ExperienceDetailController extends Controller
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
        $file = $request->file('experience_path');
        $fileName = $file->getClientOriginalName();       
        $upload = Storage::putFileAs("certificate", $file, $fileName);
        ExperienceDetail::create (array_merge($request->all(), ['experience_path' => $upload]));
        return redirect()->route('experiencedetails.index');
    }
    public function show(string $id)
    {
    }    
    public function edit(ExperienceDetail $experiencedetail)
    {
        return view('applicants.next-steps.experience.edit', compact('experiencedetail'));
    }
    public function update(ExperienceDetailFormRequest $request, ExperienceDetail $experiencedetail)
    {
        $experiencedetail->fill($request->validated());
        $experiencedetail->save();
        return redirect()->route('experiencedetails.index')->with('success', 'Details Update successfully');
    }    
    public function destroy(ExperienceDetail $experiencedetail)
    {
        $experiencedetail->delete();
    }  
}
