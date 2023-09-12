<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class JobApplyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(JobPosting $job)
    {

        
        $count = ApplicationReferenceNumber::count();
        $count= $count+1;

        $candidate =  auth()->guard('applicants')->user();
       
        $hasArn = $candidate->jobapplications()->where('job_posting_id', $job->id)->exists();
        if(!$hasArn){
            $arn_code = $job->locationunit->unit_code .  date("Y") . date("m") . $job->id . $candidate->id . str_pad($count,3,'0',STR_PAD_LEFT);
       
            $arn=ApplicationReferenceNumber::create([
    
                'candidate_id' => auth()->guard('applicants')->user()->id,
                'job_posting_id'=> $job->id,
                'arn' => $arn_code,
                'status'=>'draft',
            ]);
            return view('applicants.successful', compact('arn'));
        }
        else{
            
           
            return redirect()->route('jobapplication.index');
        }
        
        
    }
}
