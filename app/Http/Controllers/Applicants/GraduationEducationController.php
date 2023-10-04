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

    public function create(ApplicationReferenceNumber $jobapplication)
    {
        return view('applicants.next-steps.partials.undergraduate-education-details.create', compact('jobapplication'));
    }


    public function store(GraduationEducationFormRequest $request, ApplicationReferenceNumber $jobapplication)
    {


        if ($request->file('graduateMarksheet')) {
            $file = $request->file('graduateMarksheet');
            GraduationEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/graduation', $file, $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            GraduationEducationDetail::create(
                array_merge(
                    ['application_reference_number_id' => $jobapplication->id],
                    $request->validated()
                )

            );
        }
        return redirect()->route('jobapplication.edit', $jobapplication);
    }


    public function show(GraduationEducationDetail $graduationeducationdetail)
    {
    }


    public function edit(ApplicationReferenceNumber $jobapplication, GraduationEducationDetail $graduationeducationdetail)
    {
        return view('applicants.next-steps.partials.undergraduate-education-details.edit',  compact('jobapplication', 'graduationeducationdetail'));
    }


    public function update(GraduationEducationFormRequest $request, ApplicationReferenceNumber $jobapplication, GraduationEducationDetail $graduationeducationdetail)
    {

        if ($request->file('graduateMarksheet')) {
            $file = $request->file('graduateMarksheet');
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
