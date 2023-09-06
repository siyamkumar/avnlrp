<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\SecondaryEducationFormRequest;
use App\Models\Applicants\SecondaryEducationDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SecondaryEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->secondaryeducationdetails)
            return redirect()->route('secondaryeducationdetails.edit', $candidate->secondaryeducationdetails);
        return redirect()->route('secondaryeducationdetails.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('applicants.next-steps.secondary-education');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SecondaryEducationFormRequest $request)
    {
        
        if ($request->file('marksheet_document')) {
            SecondaryEducationDetail::create(
                array_merge(
                    $request->validated(),
                    [
                        'marksheet_path' => Storage::putFileAs('documents/' . $request->candidate_id . '/secondary', $request->file('marksheet_document'), $request->file('marksheet_document')->getClientOriginalName())
                    ]
                )
            );
        }

        else{
            SecondaryEducationDetail::create($request->validated());
        }

        return redirect()->route('secondaryeducationdetails.index');
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
    public function edit(SecondaryEducationDetail $secondaryeducationdetail)
    {
        return view('applicants.next-steps.secondary-education', compact('secondaryeducationdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
