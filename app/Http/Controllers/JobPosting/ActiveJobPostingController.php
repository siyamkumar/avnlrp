<?php

namespace App\Http\Controllers\JobPosting;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class ActiveJobPostingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('admin.jobs.index')->with([
            'jobpostings' => JobPosting::where('status', 'active')->paginate(15),

        ]);
    }
}
