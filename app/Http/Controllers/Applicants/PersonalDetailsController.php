<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalDetailsFormRequest;
use App\Models\Applicants\PersonalDetail;
use App\Models\Candidate;
use App\Models\RegionState;
use App\Models\ReservationCategory;
use Illuminate\Http\Request;

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
        return view('applicants.next-steps.personal-details')->with([
            'region_states' => RegionState::all(),
            'reservation_categories' => ReservationCategory::all(),
            'personaldetail' => ''
        ]);
    }

    public function store(PersonalDetailsFormRequest $request)
    {

        PersonalDetail::create($request->validated());
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
        $reservation_categories = ReservationCategory::all();
        return view('applicants.next-steps.personal-details', compact(['region_states', 'personaldetail', 'reservation_categories']));
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
