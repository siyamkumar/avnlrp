<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Applicants\ApplicationReferenceNumber;


use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    //google chart   
        
// $population = PersonalDetail::select(
//     DB::raw("gender as year"),
//     DB::raw("count(gender) as count")
   
//   ) 
  
// ->orderBy(DB::raw("YEAR(created_at)"))
// ->groupBy(DB::raw("gender"))
// ->get();
// // dd($population);
// $res[] = [ 'year','count'];
// foreach ($population as $key => $val) {
// $res[++$key] = [ $val->year, (int)$val->count];
// }

// return view('dashboard')
// ->with('population', json_encode($res));





//chart.js 
//Reservation category chart

$names=ApplicationReferenceNumber::all()->map(function (ApplicationReferenceNumber $arn)
{
  return $arn->candidates->personaldetails  ? $arn->candidates->personaldetails->reservationcategory :  '';
})->groupBy('name');



$labels = $names->keys();
$data = $names->values();

$count1=[];

foreach($labels as $d)
{

  array_push($count1,$d);
  
}




$count=[];
foreach($data as $d)
{
  array_push($count,count($d));
}


// Statewise chart


$statenames=ApplicationReferenceNumber::all()->map(function (ApplicationReferenceNumber $arn)
{
  return $arn->candidates->personaldetails  ? $arn->candidates->personaldetails->regionstate :  '';
})
// ;
->groupBy('state_name');

// dd($statenames);

$labels = $statenames->keys();
$data = $statenames->values();

$sname=[];

foreach($labels as $d)
{

  array_push($sname,$d);
  $filtered = Arr::whereNotNull($sname);
}

//dd($filtered);


$statecount=[];
foreach($data as $d)
{
  array_push($statecount,count($d));
  $filteredcount = Arr::whereNotNull($statecount);
}


return view('dashboard', compact('count1', 'count','filtered','filteredcount'));


   }

    }

   








