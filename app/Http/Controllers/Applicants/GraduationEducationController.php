<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\GraduationEducationFormRequest;
use App\Models\Applicants\GraduationEducationDetail;
use App\Models\Applicants\ApplicationReferenceNumber;
use Illuminate\Support\Facades\Storage;

class GraduationEducationController extends Controller
{

    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->graduationeducationdetails)
            return redirect()->route('jobapplication.graduationeducationdetails.edit', $candidate->graduationeducationdetails);
        return redirect()->route('jobapplication.graduationeducationdetails.create');
    }

    public function create()
    {
        return view('applicants.next-steps.graduation-details');
    }


    public function store(GraduationEducationFormRequest $request,ApplicationReferenceNumber $jobapplication)
    {
        
        if ($request->file('marksheet_path')) {
            $file = $request->file('marksheet_path');
            GraduationEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/graduation', $request->file('marksheet_path'), $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            GraduationEducationDetail::create($request->validated());
        }
        return redirect()->route('jobapplication.graduationeducationdetails.index');
    }


    public function show(GraduationEducationDetail $graduationeducationdetail)
    {
    }


    public function edit(ApplicationReferenceNumber $jobapplication,GraduationEducationDetail $graduationeducationdetail)
    {
        return view('applicants.next-steps.graduation-details',  compact('jobapplication', 'graduationeducationdetail'));
    }


    public function update(GraduationEducationFormRequest $request, ApplicationReferenceNumber $jobapplication, GraduationEducationDetail $graduationeducationdetail)
    {

        if ($request->file('filepond')) {
            $file = $request->file('filepond');
            $graduationeducationdetail->marksheet_path = Storage::putFileAs('documents/' . $request->candidate_id . '/graduation', $file, $file->getClientOriginalName());
            $graduationeducationdetail->file_name = $file->getClientOriginalName();
            $graduationeducationdetail->file_size = $file->getSize();
            $graduationeducationdetail->file_type = $file->getClientOriginalExtension();
        }

        $graduationeducationdetail->fill($request->validated());

        $graduationeducationdetail->save();
        return redirect()->route('jobapplication.edit', $jobapplication);
    }


    public function destroy(GraduationEducationDetail $graduationeducationdetail)
    {
    }
}
