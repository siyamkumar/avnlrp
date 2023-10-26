<?php

namespace App\Http\Controllers\Admin\Arn;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use Illuminate\Http\Request;

class ShortlistedArnController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, JobPosting $jobposting)
    {
        dd($jobposting);
    }
}
