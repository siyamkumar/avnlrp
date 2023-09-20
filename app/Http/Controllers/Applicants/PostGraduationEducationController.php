<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostGraduationEducationFormRequest;
use App\Models\Applicants\PostGraduationEducationDetail;
use Illuminate\Http\Request;
use App\Models\Applicants\ApplicationReferenceNumber;
use Illuminate\Support\Facades\Storage;


class PostGraduationEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->postgraduationeducationdetails)
            return redirect()->route('postgraduationeducationdetails.edit', $candidate->postgraduationeducationdetails);
        return redirect()->route('postgraduationeducationdetails.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applicants.next-steps.post-graduation-details');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostGraduationEducationFormRequest $request,ApplicationReferenceNumber $jobapplication)
    {
        if ($request->file('marksheet_path')) {
            $file = $request->file('marksheet_path');
            PostGraduationEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/postgraduation', $request->file('marksheet_path'), $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            PostGraduationEducationDetail::create($request->validated());
        }

        return redirect()->route('postgraduationeducationdetails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(PostGraduationEducationDetail $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApplicationReferenceNumber $jobapplication, PostGraduationEducationDetail $postgraduationeducationdetail)
    {
        return view('applicants.next-steps.post-graduation-details',  compact('jobapplication','postgraduationeducationdetail'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostGraduationEducationFormRequest $request, ApplicationReferenceNumber $jobapplication, PostGraduationEducationDetail $postgraduationeducationdetail)
    {
        if ($request->file('filepond')) {
            $file = $request->file('filepond');
            $postgraduationeducationdetail->marksheet_path = Storage::putFileAs('documents/' . $request->candidate_id . '/postgraduation', $file, $file->getClientOriginalName());
            $postgraduationeducationdetail->file_name = $file->getClientOriginalName();
            $postgraduationeducationdetail->file_size = $file->getSize();
            $postgraduationeducationdetail->file_type = $file->getClientOriginalExtension();
        }

        $postgraduationeducationdetail->fill($request->validated());

        $postgraduationeducationdetail->save();
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
