<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use App\Models\LocationUnit;
use App\Models\ReservationCategory;
use Illuminate\Http\Request;

class UnitWiseReportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $jobsbyPosting = JobPosting::where('status', '!=', 'draft')
            ->orderBy('jobTitle')
            // ->orderBy('location_unit_id')
            ->get()->map(function ($job) {

                $reservations = ReservationCategory::all();
                return [
                    'Job Posting' => $job->jobTitle,
                    'Location' => $job->locationunit->unit_name,
                    'Total Application' => $job->arns->count(),
                    'Shortlisted' => $job->arns()->where('status', 'shortlisted')->get()->count(),
                    'Rejected' => $job->arns()->where('status', 'rejected')->get()->count(),
                    'Category' =>
                    $reservations->mapWithKeys(function ($r, $key) use ($job) {
                        // dd($r->code);
                        $totalcount = 0;
                        $slcount = 0;
                        $rjcount = 0;
                        foreach ($job->arns as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $totalcount++;
                        }
                        foreach ($job->arns()->where('status', 'shortlisted')->get() as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $slcount++;
                        }
                        foreach ($job->arns()->where('status', 'rejected')->get() as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $rjcount++;
                        }

                        return [
                            $r->code => [

                                'TOTAL' => $totalcount,
                                'SL' => $slcount,
                                'RJ' => $rjcount,
                            ]
                        ];
                    }),
                ];
            });


        $jobsbyLocation = JobPosting::where('status', '!=', 'draft')
        ->paginate(25)
            ->sortBy(function ($j, $key) {
                return $j->locationunit->unit_name;
            })
            ->values()
            ->map(function ($job) {
                $reservations = ReservationCategory::all();
                return [
                    'Location' => $job->locationunit->unit_name,
                    'Job Posting' => $job->jobTitle,
                    'Total Application' => $job->arns->count(),
                    'Shortlisted' => $job->arns()->where('status', 'shortlisted')->get()->count(),
                    'Rejected' => $job->arns()->where('status', 'rejected')->get()->count(),
                    'Category' =>
                    $reservations->mapWithKeys(function ($r, $key) use ($job) {
                        // dd($r->code);
                        $totalcount = 0;
                        $slcount = 0;
                        $rjcount = 0;
                        foreach ($job->arns as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $totalcount++;
                        }
                        foreach ($job->arns()->where('status', 'shortlisted')->get() as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $slcount++;
                        }
                        foreach ($job->arns()->where('status', 'rejected')->get() as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $rjcount++;
                        }

                        return [
                            $r->code => [

                                'TOTAL' => $totalcount,
                                'SL' => $slcount,
                                'RJ' => $rjcount,
                            ]
                        ];
                    }),
                ];
            });

            
        $locationunits = LocationUnit::all();
        return view('admin.reports.unitwise-index')->with(
            [
                'jobpostings' => $jobsbyPosting,
                'locationunits' => $locationunits
            ]
        );
    }
}
