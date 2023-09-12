<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostGraduationEducationFormRequest;
use App\Models\Applicants\PostGraduationEducationDetail;
use Illuminate\Http\Request;

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
    public function store(PostGraduationEducationFormRequest $request)
    {
        PostGraduationEducationDetail::create($request->validated());
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
    public function edit(PostGraduationEducationDetail $postgraduationeducationdetail)
    {
        return view('applicants.next-steps.post-graduation-details',  compact('postgraduationeducationdetail'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostGraduationEducationFormRequest $request, PostGraduationEducationDetail $postgraduationeducationdetail)
    {
        $postgraduationeducationdetail->fill($request->validated());
        $postgraduationeducationdetail->save();
        return redirect()->route('postgraduationeducationdetails.index')->with('success', 'Post Graduation Details Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
