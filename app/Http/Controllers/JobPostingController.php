<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobPostingFormRequest;
use App\Models\JobPosting;
use App\Models\LocationUnit;
use App\Models\ReservationCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.jobs.index')->with([
            'jobpostings' => JobPosting::paginate(15),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobs.create')->with([
            'locationunits' => LocationUnit::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobPostingFormRequest $request)
    {
        $lastDate = Carbon::createFromFormat('Y-m-d', $request->jobPostingDate);
        $lastDate = $lastDate->addDays(21);
        $jobposting = JobPosting::create(
            array_merge(
                $request->validated(),
                [
                    'jobPostingLastDate' => $lastDate->format('Y-m-d')
                ]
            )
        );
        return redirect()->route('jobpostings.edit', $jobposting)->with(['message' => 'Job Posting created!']);
    }

    public function show(JobPosting $jobposting)
    {
        if ($jobposting->status == 'draft')
            return redirect()->route('jobpostings.edit', compact('jobposting'));
        return view('admin.jobs.show', compact('jobposting'));
    }

    public function edit(JobPosting $jobposting)
    {
        if ($jobposting->status == 'draft')
            return view('admin.jobs.edit')
                ->with([
                    'jobposting' => $jobposting,
                    'reservationcategories' => ReservationCategory::all(),

                ]);
        return redirect()->route('jobpostings.show', $jobposting);
    }


    public function update(JobPostingFormRequest $request, JobPosting $jobposting)
    {

        $jobposting->update($request->validated());
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Job Posting Updated Successfully'
        ]);
    }

    public function destroy(JobPosting $jobPosting)
    {
    }
}
