<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\HigherSecondaryEducationFormRequest;
use App\Models\Applicants\HigherSecondaryEducationDetail;
use Illuminate\Http\Request;

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
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->highersecondaryeducationdetails)
            return redirect()->route('highersecondarydetails.edit', $candidate->highersecondaryeducationdetails);
        else
            return view('applicants.next-steps.higher-secondary-school');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HigherSecondaryEducationFormRequest $request)
    {
        HigherSecondaryEducationDetail::create($request->validated());
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
    public function edit(HigherSecondaryEducationDetail $highersecondaryeducationdetail)
    {
        return view('applicants.next-steps.higher-secondary-school', compact('highersecondaryeducationdetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HigherSecondaryEducationFormRequest $request, HigherSecondaryEducationDetail $highersecondaryeducationdetail)
    {
        $highersecondaryeducationdetail->fill($request->validated());
        $highersecondaryeducationdetail->save();
        return redirect()->route('highersecondaryeducationdetails.index')->with('success', 'Details Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
