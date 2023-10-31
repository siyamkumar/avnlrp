<?php

namespace App\Http\Controllers;

use App\Models\JobPosting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('welcome')->with(
            ['jobpostings' => JobPosting::where('status', 'active')->where('jobPostingLastDate', '>=', Carbon::today())->take(3)->get()]
        );
    }
}
