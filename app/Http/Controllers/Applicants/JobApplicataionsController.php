<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Applicants\ExperienceDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobApplicataionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $candidate = auth()->guard('applicants')->user();
        $jobapplications = $candidate->jobapplications;
        return view('applicants.myapplications', compact('jobapplications'));
    }

    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function show(string $id)
    {
    }
    public function edit(ApplicationReferenceNumber $jobapplication)
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->personaldetails) {
            $exp = ExperienceDetail::where('application_reference_number_id', $jobapplication->id)->get();
            $expyears = 0;
            foreach ($exp as $ex) {
                $date = Carbon::parse($ex->periodFrom);
                $now = Carbon::parse($ex->periodTo);
                $expyears += $date->diffInDays($now);
            }

            return view('applicants.applications.edit')->with([
                'jobapplication' => $jobapplication,
                'totalexperience' => round($expyears / 365, 1)
            ]);
        } else
            return redirect()->route('personaldetails.create')->with('jobapplication', $jobapplication);
    }
    public function update(Request $request, ApplicationReferenceNumber $jobapplication)
    {
      
        if ($request->isSubmitted){
            $jobapplication->isSubmitted = true;
            $jobapplication->status = 'submitted';
        }
            
        $jobapplication->save();
        return redirect()->route('jobapplication.edit', $jobapplication)->with([
            'status'=>'success',
            'message' => 'Congratulations! Your application has been submitted successfuly.'
        ]);
    }

    public function destroy(string $id)
    {
    }
}
