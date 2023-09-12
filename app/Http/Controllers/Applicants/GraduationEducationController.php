<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\GraduationEducationFormRequest;
use App\Models\Applicants\GraduationEducationDetail;


class GraduationEducationController extends Controller
{

    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->graduationeducationdetails)
            return redirect()->route('graduationeducationdetails.edit', $candidate->graduationeducationdetails);
        return redirect()->route('graduationeducationdetails.create');
    }

    public function create()
    {
        return view('applicants.next-steps.graduation-details');
    }


    public function store(GraduationEducationFormRequest $request)
    {
        GraduationEducationDetail::create($request->validated());
        return redirect()->route('graduationeducationdetails.index');
    }


    public function show(GraduationEducationDetail $graduationeducationdetail)
    {
    }


    public function edit(GraduationEducationDetail $graduationeducationdetail)
    {
        return view('applicants.next-steps.graduation-details',  compact('graduationeducationdetail'));
    }


    public function update(GraduationEducationFormRequest $request, GraduationEducationDetail $graduationeducationdetail)
    {

        $graduationeducationdetail->fill($request->validated());
        $graduationeducationdetail->save();
        return redirect()->route('graduationeducationdetails.index')->with('success', 'Graduation Details Update successfully');
    }


    public function destroy(GraduationEducationDetail $graduationeducationdetail)
    {
    }
}
