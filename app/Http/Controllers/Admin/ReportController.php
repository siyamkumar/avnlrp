<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicants\ApplicationReferenceNumber;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('admin.reports.index')->with([
            'applications' => ApplicationReferenceNumber::where('status', 'shortlisted')->get(),
        ]);
    }
}
