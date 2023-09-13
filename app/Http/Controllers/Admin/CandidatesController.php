<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\Models\PersonalDetail;



class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $photopath= PersonalDetail::where('candidate_id',auth()->guard('applicants')->user()->id)->get();
        // //dd($expdetails);
    
        //     return view('applicants.next-steps.experience.index')->with(['expdetails'=>$photopath]);
     
        // return view('admin.candidates.index',['[photo_path]'=>$photopath]);
        return view('admin.candidates.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
// $data=DB::table('personal_details')->where('id',$id)->first();
//         $filepath=storage_path("app/public/photo/{$data->photo_path}");
//         return \Response::download($filepath);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}