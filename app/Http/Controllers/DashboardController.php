<?php

namespace App\Http\Controllers;

use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Applicants\PersonalDetail;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       
        
$population = PersonalDetail::select(
    DB::raw("gender as year"),
    DB::raw("count(gender) as count")
   
  ) 
  
->orderBy(DB::raw("YEAR(created_at)"))
->groupBy(DB::raw("gender"))
->get();
// dd($population);
$res[] = [ 'year','count'];
foreach ($population as $key => $val) {
$res[++$key] = [ $val->year, (int)$val->count];
}

return view('dashboard')
->with('population', json_encode($res));


   }

    }

   








