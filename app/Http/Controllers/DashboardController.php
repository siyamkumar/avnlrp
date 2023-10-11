<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Candidate;
use App\Models\JobPosting;
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

    //chart.js 
    //Reservation category chart

    $names = ApplicationReferenceNumber::all()->map(function (ApplicationReferenceNumber $arn) {
      return $arn->candidates->personaldetails  ? $arn->candidates->personaldetails->reservationcategory :  '';
    })->groupBy('name');

    $labels = $names->keys();
    $data = $names->values();
    $count1 = [];
    foreach ($labels as $d) {
      array_push($count1, $d);
    }

    $count = [];
    foreach ($data as $d) {
      array_push($count, count($d));
    }


    // Statewise chart
    $statenames = ApplicationReferenceNumber::all()->map(function (ApplicationReferenceNumber $arn) {
      return $arn->candidates->personaldetails  ? $arn->candidates->personaldetails->regionstate :  '';
    })->groupBy('state_name');

    $labels = $statenames->keys();
    $data = $statenames->values();

    $sname = [];
    $filtered=[];
    $filteredcount =[];

    foreach ($labels as $d) {
      array_push($sname, $d);
      $filtered = Arr::whereNotNull($sname);
    }

    $statecount = [];
    foreach ($data as $d) {
      array_push($statecount,   count($d));
      $filteredcount = Arr::whereNotNull($statecount);
    }

  

    return view('dashboard', 
    compact('count1', 'count', 'filtered', 'filteredcount', ))->with([
      'jobpostings_count' => JobPosting::count(),
      'arns_count' => ApplicationReferenceNumber::count(),
      'candidates_count' => Candidate::count(),
      'shortlisted_count' => ApplicationReferenceNumber::where('status', 'shortlisted')->count(),
      'arns' => ApplicationReferenceNumber::latest()->take(10)->get(),
    ]);
  }
}
