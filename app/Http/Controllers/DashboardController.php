<?php

namespace App\Http\Controllers;

use App\Models\Applicants\ApplicationReferenceNumber;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('dashboard')->with([
            'arns' => ApplicationReferenceNumber::take(10)->get(),
        ]);
    }
}
