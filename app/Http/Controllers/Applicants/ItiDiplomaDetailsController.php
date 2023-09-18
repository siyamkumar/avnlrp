<?php

namespace App\Http\Controllers\Applicants;
use App\Http\Controllers\Controller;

use App\Models\Candidate;
use App\Http\Requests\ItiDiplomaFormRequest;
use App\Models\Applicants\ItiDiplomaDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItiDiplomaDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
       
        if ($candidate->ItiDiplomaDetails)
            return redirect()->route('itidiplomadetails.edit',$candidate->ItiDiplomaDetails);

        return redirect()->route('itidiplomadetails.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // dd("A");
        // $candidate=auth()->guard('applicants')->user();
        // if($candidate->itidiplomadetail)
        // return redirect()->route('ItiDiplomaDetails.edit',$candidate->itidiplomadetail);
        // else
        return view('applicants.next-steps.itidiploma-details');
        
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItiDiplomaFormRequest $request)
    {
        //dd($request); 
        $file = $request->file('marksheet_path');
//dd($file);
        $fileName = $file->getClientOriginalName();
      // dd($fileName);
        $upload = Storage::putFileAs("certificate", $file, $fileName);

        ItiDiplomaDetail::create (array_merge($request->all(),['marksheet_path'=>$fileName]));
        return redirect()->route('itidiplomadetails.index');
        
    }
    /**
     * Display the specified resource.
     */
    public function show(ItiDiplomaDetail $itidiplomadetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItiDiplomaDetail $itidiplomadetail)
    {
        
        return view('applicants.next-steps.itidiploma-details', compact('itidiplomadetail'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItiDiplomaFormRequest $request, ItiDiplomaDetail $itidiplomadetail)
    {
         $itidiplomadetail->fill($request->validated());
            $itidiplomadetail->save();
        return redirect()->route('itidiplomadetails.index')->with('success',' Details Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItiDiplomaDetail $itidiplomadetail)
    {
        //
    }
}
