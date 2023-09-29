<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\HigherSecondaryEducationFormRequest;
use App\Models\Applicants\HigherSecondaryEducationDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Applicants\ApplicationReferenceNumber;


class HigherSecondaryEducationController extends Controller
{
    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->highersecondaryeducationdetails)
            return redirect()->route('highersecondaryeducationdetails.edit', $candidate->highersecondaryeducationdetails);
        return redirect()->route('highersecondaryeducationdetails.create');
    }

    public function create(ApplicationReferenceNumber $jobapplication)
    {
        return view('applicants.next-steps.partials.higher-secondary-education-details.create', compact('jobapplication'));
    }
    public function store(HigherSecondaryEducationFormRequest $request,ApplicationReferenceNumber $jobapplication)
    {
       
       
        if ($request->file('highersecondaryMarksheet')) {
            $file = $request->file('highersecondaryMarksheet');
          
            HigherSecondaryEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/highersecondary', $file, $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            HigherSecondaryEducationDetail::create(
                array_merge(
                    [ 'application_reference_number_id' => $jobapplication->id],
                    $request->validated()
                )
            );
        }
        return redirect()->route('jobapplication.edit', $jobapplication);
    }

    public function show(string $id)
    {
        
    }

    public function edit(ApplicationReferenceNumber $jobapplication,HigherSecondaryEducationDetail $highersecondaryeducationdetail)
    {
        return view('applicants.next-steps.partials.higher-secondary-education-details.edit', compact('jobapplication','highersecondaryeducationdetail'));
    }

    public function update(HigherSecondaryEducationFormRequest $request, ApplicationReferenceNumber $jobapplication, 
    HigherSecondaryEducationDetail $highersecondaryeducationdetail)
    {
        if ($request->file('highersecondaryMarksheet')) {
            $file = $request->file('highersecondaryMarksheet');
            $highersecondaryeducationdetail->marksheet_path = Storage::putFileAs('documents/' . $request->candidate_id . '/highersecondary', $file, $file->getClientOriginalName());
            $highersecondaryeducationdetail->file_name = $file->getClientOriginalName();
            $highersecondaryeducationdetail->file_size = $file->getSize();
            $highersecondaryeducationdetail->file_type = $file->getClientOriginalExtension();
        }
        
        $highersecondaryeducationdetail->fill($request->validated());
        $highersecondaryeducationdetail->save();
        return redirect()->route('jobapplication.edit', $jobapplication);
    }

    public function destroy(string $id)
    {

    }
}
