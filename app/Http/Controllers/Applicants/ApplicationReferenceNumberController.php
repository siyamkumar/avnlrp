<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Http\Requests\ApplicationReferenceFormRequest;
use Illuminate\Http\Request;

class ApplicationReferenceNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->paymentdetails)
            return redirect()->route('paymentdetails.edit', $candidate->paymentdetails);
        return redirect()->route('paymentdetails.create');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applicants.next-steps.payment-details');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ApplicationReferenceFormRequest $request,ApplicationReferenceNumber $applicationReferenceNumber)
    {
        if ($request->file('marksheet_path')) {
            $file = $request->file('marksheet_path');
            ApplicationReferenceNumber::create(
                array_merge(
                    $request->validated(),
                    [
                        'application_reference_number_id' => $applicationReferenceNumber->id,
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/graduation', $request->file('marksheet_path'), $file->getClientOriginalName()),
                        'file_name' => $file->getClientOriginalName(),
                        'file_size' => $file->getSize(),
                        'file_type' => $file->getClientOriginalExtension(),
                    ]
                )
            );
        } else {
            ApplicationReferenceNumber::create($request->validated());
        }
        return redirect()->route('graduationeducationdetails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ApplicationReferenceNumber $applicationReferenceNumber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApplicationReferenceNumber $applicationReferenceNumber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ApplicationReferenceNumber $applicationReferenceNumber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApplicationReferenceNumber $applicationReferenceNumber)
    {
        //
    }
}
