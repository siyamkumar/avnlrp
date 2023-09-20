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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->highersecondaryeducationdetails)
            return redirect()->route('highersecondaryeducationdetails.edit', $candidate->highersecondaryeducationdetails);
        return redirect()->route('highersecondaryeducationdetails.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $candidate = auth()->guard('applicants')->user();
        // if ($candidate->highersecondaryeducationdetails)
        //     return redirect()->route('highersecondarydetails.edit', $candidate->highersecondaryeducationdetails);
        // else
        //     return view('applicants.next-steps.higher-secondary-school');

        return view('applicants.next-steps.partials.higher-secondary-education-details.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HigherSecondaryEducationFormRequest $request,ApplicationReferenceNumber $jobapplication)
    {
        if ($request->file('marksheet_path')) {
            $file = $request->file('marksheet_path');

            HigherSecondaryEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/highersecondary', $request->file('marksheet_path'), $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            HigherSecondaryEducationDetail::create($request->validated());
        }
        return redirect()->route('highersecondaryeducationdetails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApplicationReferenceNumber $jobapplication,HigherSecondaryEducationDetail $highersecondaryeducationdetail)
    {
        return view('applicants.next-steps.partials.higher-secondary-education-details.edit', compact('jobapplication','highersecondaryeducationdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HigherSecondaryEducationFormRequest $request, ApplicationReferenceNumber $jobapplication, 
    HigherSecondaryEducationDetail $highersecondaryeducationdetail)
    {
        if ($request->file('filepond')) {
            $file = $request->file('filepond');
            $highersecondaryeducationdetail->marksheet_path = Storage::putFileAs('documents/' . $request->candidate_id . '/highersecondary', $file, $file->getClientOriginalName());
            $highersecondaryeducationdetail->file_name = $file->getClientOriginalName();
            $highersecondaryeducationdetail->file_size = $file->getSize();
            $highersecondaryeducationdetail->file_type = $file->getClientOriginalExtension();
        }

        $highersecondaryeducationdetail->fill($request->validated());

        $highersecondaryeducationdetail->save();
        return redirect()->route('jobapplication.edit', $jobapplication);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
