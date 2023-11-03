<?php

namespace App\Http\Controllers\Admin\Reports;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosting;
use App\Models\LocationUnit;
use App\Models\Applicants\PersonalDetail;
use App\Models\ReservationCategory;
use App\Models\RegionState;


class StateWiseReportController extends Controller
{
    public function __invoke(Request $request)
    {

        $jobsbyPosting = JobPosting::where('status', '!=', 'draft' )->get()
        ->sortBy(function ($j, $key) {
            return $j->locationunit->unit_name;
        })
        ->values()
            ->map(function ($job) {

                $states = RegionState::all();
             
                return [
                    'Job Posting' => $job->jobTitle,
                    'Location' => $job->locationunit->unit_name,
                    'Total Application' => $job->arns->count(),
                    'Shortlisted' => $job->arns()->where('status', 'shortlisted')->get()->count(),
                    'Rejected' => $job->arns()->where('status', 'rejected')->get()->count(),
                    'Category' =>
                    $states->mapWithKeys(function ($r, $key) use ($job) {
                       
                        $totalcount = 0;
                        $slcount = 0;
                        $rjcount = 0;
                        foreach ($job->arns as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('region_state_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $totalcount++;
                        }
                        foreach ($job->arns()->where('status', 'shortlisted')->get() as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('region_state_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $slcount++;
                        }
                        foreach ($job->arns()->where('status', 'rejected')->get() as $j) {
                            $cand_cat = $j->candidates->personaldetails()->pluck('region_state_id');
                            foreach ($cand_cat as $c)
                                if ($c == $r->id)
                                    $rjcount++;
                        }

                        return [
                            $r->state_code => [

                                'TOTAL' => $totalcount,
                                'SL' => $slcount,
                                'RJ' => $rjcount,
                            ]
                        ];
                    }),
                ];
            });

        // $jobsbyStates = RegionState::all()
       
        // // ->orderBy('location_unit_id')
        // ->map(function ($job) {

        //         if($job->arns){}
        //         else{
        //     dd($job);
        //     }

                
        //         $reservations = ReservationCategory::all();
        //         return [
        //             'State' => $job->state_name,
        //             'Job Posting' => $job->jobTitle,
        //             'Total Application' => $job->arns->count(),
        //             'Shortlisted' => $job->arns()->where('status', 'shortlisted')->get()->count(),
        //             'Rejected' => $job->arns()->where('status', 'rejected')->get()->count(),
        //             'Category' =>
        //             $states->mapWithKeys(function ($r, $key) use ($job) {
        //                 // dd($r->code);
        //                 $totalcount = 0;
        //                 $slcount = 0;
        //                 $rjcount = 0;
        //                 foreach ($job->ar as $j) {
        //                     $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
        //                     foreach ($cand_cat as $c)
        //                         if ($c == $r->id)
        //                             $totalcount++;
        //                 }
        //                 foreach ($job->regionstate->arns()->where('status', 'shortlisted')->get() as $j) {
        //                     $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
        //                     foreach ($cand_cat as $c)
        //                         if ($c == $r->id)
        //                             $slcount++;
        //                 }
        //                 foreach ($job->regionstate->arns()->where('status', 'rejected')->get() as $j) {
        //                     $cand_cat = $j->candidates->personaldetails()->pluck('reservation_category_id');
        //                     foreach ($cand_cat as $c)
        //                         if ($c == $r->id)
        //                             $rjcount++;
        //                 }

        //                 return [
        //                     $r->code => [

        //                         'TOTAL' => $totalcount,
        //                         'SL' => $slcount,
        //                         'RJ' => $rjcount,
        //                     ]
        //                 ];
        //             }),
        //         ];
        //     });


            
        $locationunits = LocationUnit::all();
        return view('admin.reports.statewiseindex')->with(
            [
                'jobpostings' => $jobsbyPosting,
                'regionstates' => RegionState::all(),
                'locationunits' => $locationunits
            ]
        );
    }
}
