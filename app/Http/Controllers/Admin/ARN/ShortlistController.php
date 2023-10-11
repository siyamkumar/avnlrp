<?php

namespace App\Http\Controllers\Admin\ARN;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use Illuminate\Http\Request;

class ShortlistController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ApplicationReferenceNumber $arn)
    {
        $arn->isShortlisted = $request->isShortlisted;
        if ($request->isShortlisted === 1)
            $arn->status = 'shortlisted';
        else
            $arn->status = 'rejected';
        $arn->save();
        return back()->with([
            'status' => 'success',
            'message' => 'Candidate has been ' . $arn->status
        ]);
    }
}
