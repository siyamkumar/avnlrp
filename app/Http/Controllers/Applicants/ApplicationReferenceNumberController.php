<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Http\Requests\ApplicationReferenceFormRequest;
use Illuminate\Support\Facades\Storage;
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
    public function store(ApplicationReferenceFormRequest $request)
     {
    //     if ($request->file('payment_proof')) {
    //         $file = $request->file('payment_proof');
    //         ApplicationReferenceNumber::create(
    //             array_merge(
    //                 $request->validated(),
    //                 [
    //                     'application_reference_number_id' => $applicationReferenceNumber->id,
    //                     'payment_proof' => Storage::putFileAs('documents/' . $request->candidate_id . '/payments', $request->file('payment_proof'), $file->getClientOriginalName()),
    //                     'file_name' => $file->getClientOriginalName(),
    //                     'file_size' => $file->getSize(),
    //                     'file_type' => $file->getClientOriginalExtension(),
    //                 ]
    //             )
    //         );
    //     } else {
    //         ApplicationReferenceNumber::create($request->validated());
    //     }
    //     return redirect()->route('payments.index');
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
