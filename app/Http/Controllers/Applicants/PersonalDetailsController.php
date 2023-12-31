<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalDetailsFormRequest;
use App\Models\Applicants\PersonalDetail;
use App\Models\Candidate;
use App\Models\RegionState;
use App\Models\ReservationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonalDetailsController extends Controller
{

    public function index()
    {
    }


    public function create()
    {

        $candidate = auth()->guard('applicants')->user();
        if ($candidate->personaldetails)
            return redirect()->route('personaldetails.edit', $candidate->personaldetails);
        return view('applicants.next-steps.personal-details')->with([
            'region_states' => RegionState::all(),
            'reservation_categories' => ReservationCategory::all(),
            'personaldetail' => ''
        ]);
    }

    public function store(PersonalDetailsFormRequest $request)
    {
        $candidate = auth()->guard('applicants')->user();
        if($request->file('candidatePhoto')){
            $file = $request->file('candidatePhoto');
            $fileName = $file->getClientOriginalName();
            $upload = Storage::putFileAs("documents/" . $candidate->id . '/profile', $file, $fileName);
            PersonalDetail::create(array_merge($request->all(), ['photo_path' => $upload]));
        }
        else{
            PersonalDetail::create(array_merge($request->all()));
        }
        
        // $file1 = $request->file('sign_path');    
        // $fileName1 = $file1->getClientOriginalName();      
        // $upload1 = Storage::putFileAs("sign", $file1, $fileName1);
        
        return redirect()->route('jobs.index')->with([
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
        $reservation_categories = ReservationCategory::all();
        return view('applicants.next-steps.personal-details', compact(['region_states', 'personaldetail', 'reservation_categories']));
    }


    public function update(PersonalDetailsFormRequest $request, PersonalDetail $personaldetail)
    {
        $candidate = auth()->guard('applicants')->user();
        if($request->file('candidatePhoto')){
            $file = $request->file('candidatePhoto');
            $fileName = $file->getClientOriginalName();
            $upload = Storage::putFileAs("documents/" . $candidate->id . '/profile', $file, $fileName);
           
            $personaldetail->fill(array_merge($request->all(), ['photo_path' => $upload]));
        }
        else{
            $personaldetail->fill($request->validated());
           
        }

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
