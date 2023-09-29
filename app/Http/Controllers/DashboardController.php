<?php

namespace App\Http\Controllers;

use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Candidate;
use App\Models\RegionState;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       
        // $names = ApplicationReferenceNumber::all()->map(function (ApplicationReferenceNumber $arn) {
        //     return $arn->candidates->personaldetails->reservationcategory;
        // })->groupBy('id');

        // $gnames = collect($names);

        
        
        
        // dd($names);
      
        return view('dashboard')->with([
            'arns' => ApplicationReferenceNumber::take(10)->get(),
            'states' => RegionState::take(6)->pluck('state_code')->toJson()
        ]);
    }
}
