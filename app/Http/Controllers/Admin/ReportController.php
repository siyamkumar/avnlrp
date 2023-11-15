<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\JobPosting;
use App\Models\RegionState;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $applications =  ApplicationReferenceNumber::where('status', 'shortlisted')->get();

        if ($request->dateRange) {
            $range = explode('to', $request->dateRange);
          
            $startDate =  Carbon::createFromFormat('Y-m-d', trim($range[0]))->startOfDay();
            $endDate = Carbon::createFromFormat('Y-m-d', trim($range[1]))->endOfDay();
            $applications =  ApplicationReferenceNumber::where('status', 'shortlisted')->whereBetween('sl_rj_date', [$startDate, $endDate])->get();
        }



        return view('admin.reports.index')->with([
            'fromDate' => $startDate ?? null,
            'endDate' => $endDate ?? null,
            'applications' => $applications,
        ]);
    }
}
