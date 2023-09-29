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
    public function create(ApplicationReferenceNumber $jobapplication)
    {
        return view('applicants.next-steps.partials.postgraduate-education-details.create', compact('jobapplication'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostGraduationEducationFormRequest $request,ApplicationReferenceNumber $jobapplication)
    {
        
        if ($request->file('postgraduateMarksheet')) {
            $file = $request->file('postgraduateMarksheet');
            
            PostGraduationEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/postgraduation', $file, $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            PostGraduationEducationDetail::create(
                array_merge(
                    ['application_reference_number_id' => $jobapplication->id],
                    $request->validated()
                )

            );
        }
        return redirect()->route('jobapplication.edit', $jobapplication);
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
        return view('applicants.next-steps.partials.postgraduate-education-details.edit',  compact('jobapplication', 'postgraduationeducationdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostGraduationEducationFormRequest $request, ApplicationReferenceNumber $jobapplication, PostGraduationEducationDetail $postgraduationeducationdetail)
    {
        if ($request->file('postgraduateMarksheet')) {
            $file = $request->file('postgraduateMarksheet');
            $postgraduationeducationdetail->marksheet_path = Storage::putFileAs('documents/' . $request->candidate_id . '/postgraduate', $file, $file->getClientOriginalName());
            $postgraduationeducationdetail->file_name = $file->getClientOriginalName();
            $postgraduationeducationdetail->file_size = $file->getSize();
            $postgraduationeducationdetail->file_type = $file->getClientOriginalExtension();
        }
        $postgraduationeducationdetail->fill($request->validated());
        $postgraduationeducationdetail->save();
        return redirect()->route('jobapplication.edit', $jobapplication);

    }

    public function destroy(string $id)
    {
    }
}
