<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalDetailsFormRequest;
use App\Models\Applicants\PersonalDetail;
use App\Models\Candidate;
use App\Models\RegionState;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonalDetailsController extends Controller
{

    public function index()
    {
        $candidate = auth()->guard('applicants')->user();
        if ($candidate->personaldetails)
            return redirect()->route('personaldetails.edit', $candidate->personaldetails);
        return redirect()->route('personaldetails.create');
    }


    public function create()
    {
        $region_states = RegionState::all();
        return view('applicants.next-steps.personal-details', compact('region_states'));
    }

    public function store(PersonalDetailsFormRequest $request)
    {

        $file = $request->file('photo_path');
    
        $fileName = $file->getClientOriginalName();
  
        $upload = Storage::putFileAs("photo", $file, $fileName);
        // dd($upload);
        $file1 = $request->file('sign_path');
    
        $fileName1 = $file1->getClientOriginalName();
      
        $upload1 = Storage::putFileAs("sign", $file1, $fileName1);

        PersonalDetail::create (array_merge($request->all(),['photo_path'=> $fileName],['sign_path'=> $fileName1]));
        return redirect()->route('personaldetails.index')->with([
            'status' => 'success',
            'message' => 'Personal Details Updated Successfully'
        ]);

       
    }


    public function show(string $id)
    {
    }


    public function edit(PersonalDetail $personaldetail)
    {
        $region_states = RegionState::all();
        return view('applicants.next-steps.personal-details', compact(['region_states', 'personaldetail']));
    }


    public function update(PersonalDetailsFormRequest $request, PersonalDetail $personaldetail)
    {
        $personaldetail->fill($request->validated());
        $personaldetail->save();
        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Personal Details Updated Successfully'
        ]);
    }


    public function destroy(string $id)
    {
    }
}
