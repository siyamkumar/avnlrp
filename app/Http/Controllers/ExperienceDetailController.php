<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\ExperienceDetail;
use App\Http\Requests\ExperienceDetailFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ExperienceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    $expdetails= ExperienceDetail::where('candidate_id',auth()->guard('applicants')->user()->id)->get();
    //dd($expdetails);

        return view('applicants.next-steps.experience.index')->with(['expdetails'=>$expdetails]);
    }
       
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $expdetails= ExperienceDetail::where('candidate_id',auth()->guard('applicants')->user()->id)->get();
        //dd($expdetails);
    
            return view('applicants.next-steps.experience.create')->with(['expdetails'=>$expdetails]);
            //return view('applicants.next-steps.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExperienceDetailFormRequest $request)
    {

        $file = $request->file('experience_path');

        $fileName = $file->getClientOriginalName();
       // dd($fileName);
        $upload = Storage::putFileAs("certificate", $file, $fileName);

        // ExperienceDetail::create([
           

           
        // 'candidate_id'=>$request->candidate_id,
        // 'companyName'=>$request->companyName,
        // 'postName'=>$request->postName,
        // 'periodFrom'=>$request->periodFrom,
        // 'periodTo'=>$request->periodTo,
        // 'payScale' =>$request->payScale,
        // 'ctc'=>$request->ctc,
        // 'experience_path' => $upload,
        // 'jobsSummary' =>$request->jobsSummary,
           
           
        // ])->validated();

       
        ExperienceDetail::create (array_merge($request->all(), ['experience_path' => $fileName]));
        //ExperienceDetail::create($request->validated());
        return redirect()->route('experiencedetails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data=DB::table('experience_details')->where('id',$id)->first();
        $filepath=storage_path("app/public/certificate/{$data->experience_path}");
        return \Response::download($filepath);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExperienceDetail $experiencedetail)
    {
       // dd($experiencedetail);
      //  $experienceDetail= ExperienceDetail::where('candidate_id', $experienceDetail->candidate_id)->get();
//$experienceDetail=ExperienceDetail::where('candidate_id',$experienceDetail->candidate_id)->get();
        return view('applicants.next-steps.experience.edit', compact('experiencedetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExperienceDetailFormRequest $request, ExperienceDetail $experiencedetail)
    {
        $experiencedetail->fill($request->validated());
        $experiencedetail->save();
        return redirect()->route('experiencedetails.index')->with('success', 'Details Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExperienceDetail $experiencedetail)
    {
        //
       dd($experiencedetail);
        $experiencedetail=ExperienceDetail::where('id',$experiencedetail->id)->delete();
    }

    public function download($id)
    {

        $data=DB::table('experience_details')->where('id',$id)->first();
        $filepath=storage_path("app/public/certificate/{$data->experience_path}");
        return \Response::download($filepath);
    }
}
