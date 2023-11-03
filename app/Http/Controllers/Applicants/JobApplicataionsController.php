<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Applicants\ExperienceDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
                'totalexperience' => round($expyears / 365, 1),
                'lastDate' => $jobapplication->experiencedetails()->orderBy('periodTo', 'DESC')->first()
            ]);
        } else
            return redirect()->route('personaldetails.create')->with('jobapplication', $jobapplication);
    }
    public function update(Request $request, ApplicationReferenceNumber $jobapplication)
    {
        $candidate = auth()->guard('applicants')->user();
        if ($request->isSubmitted) {
            $jobapplication->declaration_date = $request->declaration_date;
            $jobapplication->fee_details = $request->fee_details;
            $jobapplication->fees_paid = $request->fees_paid;
            $jobapplication->place = $request->place;
            if ($request->file('declarationSignature')) {
                $file = $request->file('declarationSignature');
                $jobapplication->signature_path = Storage::putFileAs('documents/' . $candidate->id . '/declaration', $file, $file->getClientOriginalName());
            }
            if ($request->file('payment_proof')) {
                $file = $request->file('payment_proof');
                $jobapplication->payment_proof = Storage::putFileAs('documents/' . $candidate->id . '/payment', $file, $file->getClientOriginalName());
            }
            $jobapplication->isSubmitted = true;
            $jobapplication->status = 'submitted';
            $jobapplication->save();
            return redirect()->route('jobapplication.edit', $jobapplication)->with([
                'status' => 'success',
                'message' => 'Congratulations! Your application has been submitted successfuly.'
            ]);
        }
    }

    public function destroy(string $id)
    {
    }
}
