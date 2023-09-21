<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceDetailFormRequest;
use App\Models\Applicants\ExperienceDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Applicants\ApplicationReferenceNumber;
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
        if ($request->file('experience_path')) {
            $file = $request->file('experience_path');
            ExperienceDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/experience', $request->file('experience_path'), $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            ExperienceDetail::create($request->validated());
        }





       
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
        return redirect()->route('experiencedetails.index');
    }

    public function show(ExperienceDetail $experiencedetail)
    {
        return response()->download(storage_path("app/public/certificate/{$experiencedetail->experience_path}"));
    }


    public function edit(ApplicationReferenceNumber $jobapplication,ExperienceDetail $experiencedetail)
    {
        return view('applicants.next-steps.experience.edit', compact('jobapplication','experiencedetail'));
    }


    public function update(ExperienceDetailFormRequest $request, ApplicationReferenceNumber $jobapplication, ExperienceDetail $experiencedetail)
    {
        if ($request->file('filepond')) {
            $file = $request->file('filepond');
            $experiencedetail->marksheet_path = Storage::putFileAs('documents/' . $request->candidate_id . '/experience', $file, $file->getClientOriginalName());
            $experiencedetail->file_name = $file->getClientOriginalName();
            $experiencedetail->file_size = $file->getSize();
            $experiencedetail->file_type = $file->getClientOriginalExtension();
        }

        $experiencedetail->fill($request->validated());

        $experiencedetail->save();
        return redirect()->route('jobapplication.edit', $jobapplication);
    }

    public function destroy(ApplicationReferenceNumber $jobapplication, ExperienceDetail $experiencedetail)
    {
        $experiencedetail->delete();
    }
}
