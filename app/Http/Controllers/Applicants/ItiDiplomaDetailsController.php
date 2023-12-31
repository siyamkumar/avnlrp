<?php

namespace App\Http\Controllers\Applicants;
use App\Http\Controllers\Controller;

use App\Models\Candidate;
use App\Http\Requests\ItiDiplomaFormRequest;
use App\Models\Applicants\ItiDiplomaDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Applicants\ApplicationReferenceNumber;

class ItiDiplomaDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
       
        if ($candidate->ItiDiplomaDetails)
            return redirect()->route('itidiplomadetails.edit',$candidate->ItiDiplomaDetails);

        return redirect()->route('itidiplomadetails.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // dd("A");
        // $candidate=auth()->guard('applicants')->user();
        // if($candidate->itidiplomadetail)
        // return redirect()->route('ItiDiplomaDetails.edit',$candidate->itidiplomadetail);
        // else
        return view('applicants.next-steps.itidiploma-details');
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItiDiplomaFormRequest $request, ApplicationReferenceNumber $jobapplication)
    {
        if ($request->file('marksheet_path')) {
            $file = $request->file('marksheet_path');
            ItiDiplomaDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $jobapplication->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/itidiploma', $request->file('marksheet_path'), $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            ItiDiplomaDetail::create($request->validated());
        }

        return redirect()->route('itidiplomadetails.index');
        
    }
    /**
     * Display the specified resource.
     */
    public function show(ItiDiplomaDetail $itidiplomadetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApplicationReferenceNumber $jobapplication,ItiDiplomaDetail $itidiplomadetail)
    {
        
        return view('applicants.next-steps.itidiploma-details', compact('jobapplication','itidiplomadetail'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItiDiplomaFormRequest $request, ApplicationReferenceNumber $jobapplication, ItiDiplomaDetail $itidiplomadetail)
    {
        if ($request->file('filepond')) {
            $file = $request->file('filepond');
            $itidiplomadetail->marksheet_path = Storage::putFileAs('documents/' . $request->candidate_id . '/itidiploma', $file, $file->getClientOriginalName());
            $itidiplomadetail->file_name = $file->getClientOriginalName();
            $itidiplomadetail->file_size = $file->getSize();
            $itidiplomadetail->file_type = $file->getClientOriginalExtension();
        }

        $itidiplomadetail->fill($request->validated());

        $itidiplomadetail->save();
        return redirect()->route('jobapplication.edit', $jobapplication);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItiDiplomaDetail $itidiplomadetail)
    {
        //
    }
}
