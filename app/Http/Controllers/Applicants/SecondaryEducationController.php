<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\SecondaryEducationFormRequest;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Applicants\SecondaryEducationDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SecondaryEducationController extends Controller
{
    public function index()
    {
       
        $candidate = auth()->guard('applicants')->user();
      
        $jobapplication=ApplicationReferenceNumber::where(['candidate_id' => $candidate->id])->first() ;
        if ($candidate->secondaryeducationdetails)
       
            return redirect()->route('jobapplication.secondaryeducationdetails.edit', $candidate->secondaryeducationdetails);
        return redirect()->route('jobapplication.secondaryeducationdetails.create');
    }

    public function create(ApplicationReferenceNumber $jobapplication)
    {
        return view('applicants.next-steps.partials.secondary-education-details.create', compact('jobapplication'));
    }
    public function store(SecondaryEducationFormRequest $request, ApplicationReferenceNumber $jobapplication)
    {

        
        if ($request->file('secondaryMarksheet')) {
            $file = $request->file('secondaryMarksheet');
            SecondaryEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/secondary', $file, $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            SecondaryEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                    ]
                )

            );
        }

        return redirect()->route('jobapplication.edit', $jobapplication);
    }
    public function show(string $id)
    {
    }

    public function edit(ApplicationReferenceNumber $jobapplication, SecondaryEducationDetail $secondaryeducationdetail)
    {
        return view('applicants.next-steps.partials.secondary-education-details.edit', compact('jobapplication', 'secondaryeducationdetail'));

        // return view('applicants.next-steps.secondary-education', compact('jobapplication', 'secondaryeducationdetail'));
    }

    public function update(SecondaryEducationFormRequest $request, ApplicationReferenceNumber $jobapplication, SecondaryEducationDetail $secondaryeducationdetail)
    {
        if ($request->file('secondaryMarksheet')) {
            $file = $request->file('secondaryMarksheet');
            $secondaryeducationdetail->marksheet_path = Storage::putFileAs('documents/' . $request->candidate_id . '/secondary', $file, $file->getClientOriginalName());
            $secondaryeducationdetail->file_name = $file->getClientOriginalName();
            $secondaryeducationdetail->file_size = $file->getSize();
            $secondaryeducationdetail->file_type = $file->getClientOriginalExtension();
        }
        $secondaryeducationdetail->fill($request->validated());
        $secondaryeducationdetail->save();
        return redirect()->route('jobapplication.edit', $jobapplication);
    }


    public function destroy(string $id)
    {
    }
}
