<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobPostingFormRequest;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\JobPosting;
use App\Models\LocationUnit;
use App\Models\ReservationCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
                    'isContract' => true,
                    'jobPostingLastDate' => $lastDate->format('Y-m-d'),
                    'slug' => str()->slug(LocationUnit::whereId($request->location_unit_id)->pluck('unit_code')->first() . ' ' . $request->jobAdvertismentNo . ' ' . $request->jobTitle)
                ]
            )
        );
        return redirect()->route('jobpostings.edit', $jobposting)->with(['message' => 'Job Posting created!']);
    }

    public function show(JobPosting $jobposting)
    {
        $filtered = '';
        $filteredcount = '';

        // Statewise chart
        $statenames = $jobposting->arns->map(function (ApplicationReferenceNumber $arn) {
            return $arn->candidates->personaldetails  ? $arn->candidates->personaldetails->regionstate :  '';
        })->groupBy('state_name');

        $labels = $statenames->keys();
        $data = $statenames->values();

        $sname = [];

        foreach ($labels as $d) {
            array_push($sname, $d);
            $filtered = Arr::whereNotNull($sname);
        }

        $statecount = [];
        foreach ($data as $d) {
            array_push($statecount,   count($d));
            $filteredcount = Arr::whereNotNull($statecount);
        }


        if ($jobposting->status == 'draft')
            return redirect()->route('jobpostings.edit', compact('jobposting'));

        return view('admin.jobs.show')->with([
            'jobposting' => $jobposting,
            'filtered' => $filtered,
            'filteredcount' => $filteredcount,
            'shortlistedArn' => ApplicationReferenceNumber::where([
                'status' => 'shortlisted',
                'job_posting_id' => $jobposting->id
            ])->count(),

            'rejectedArn' => ApplicationReferenceNumber::where([
                'status' => 'rejected',
                'job_posting_id' => $jobposting->id
            ])->count(),
        ]);
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

        if ($request->publish) {
            $jobposting->update([
                'status' => 'active'
            ]);
            return redirect()->route('jobpostings.index')->with([
                'status' => 'success',
                'message' => 'Job Posting - <b>' . $jobposting->jobAdvertismentNo .  '</b> has been published Successfully and its ready to receive job applications.'
            ]);
        }
        $jobposting->update($request->validated());
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Job Posting Updated Successfully'
        ]);
    }

    public function destroy(JobPosting $jobposting)
    {
        $jobposting->delete();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Job Posting Updated Successfully'
        ]);
    }
}
