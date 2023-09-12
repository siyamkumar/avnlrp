<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $loggedInId = auth()->guard('applicants')->user();

        if ($loggedInId) {
            $candidate = Candidate::find($loggedInId->id);
        
            return view('applicants.next-steps.education-details')->with([
                'secondaryeducationdetails' => $candidate->secondaryeducationdetails,
                'highersecondaryeducationdetails' => $candidate->highersecondaryeducationdetails,
                'graduationeducationdetails' => $candidate->graduationeducationdetails,
                'postgraduationeducationdetails' => $candidate->graduationeducationdetails,
            ]);
        }
        return response('not allowed', 403);
    }
}
