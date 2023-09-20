<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceDetailFormRequest;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Applicants\ExperienceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Exception;

class ExperienceController extends Controller
{

    public function index()
    {

        $expdetails = ExperienceDetail::where('candidate_id', auth()->guard('applicants')->user()->id)->get();
        return view('applicants.next-steps.experience.index')->with(['expdetails' => $expdetails]);
    }


    public function create(ApplicationReferenceNumber $jobapplication)
    {
        return view('applicants.next-steps.experience.create', compact('jobapplication'));
    }

    public function store(ExperienceDetailFormRequest $request, ApplicationReferenceNumber $jobapplication)
    {


       
        $file = $request->file('experience_path');
        $fileName = $file->getClientOriginalName();
        $upload = Storage::putFileAs('documents/' . $request->candidate_id . '/experience', $file, $fileName);
        ExperienceDetail::create(array_merge($request->all(), [
            'application_reference_number_id' => $jobapplication->id,
            'experience_path' => $upload
        ]));
        return redirect()->route('jobapplication.edit', $jobapplication);

        // try {
          
        // } catch (Exception $e) {
        //     return redirect()->back()->with([
        //         'status' => 'danger',
        //         'message' => $e->getMessage()
        //     ]);
        // }
    }

    public function show(ExperienceDetail $experiencedetail)
    {
        return response()->download(storage_path("app/public/certificate/{$experiencedetail->experience_path}"));
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

    public function destroy(ApplicationReferenceNumber $jobapplication, ExperienceDetail $experiencedetail)
    {
        $experiencedetail->delete();
    }
}
