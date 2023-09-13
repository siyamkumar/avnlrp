<?php

namespace App\Http\Controllers\JobPosting;

use App\Http\Controllers\Controller;
use App\Models\JobPosting;
use App\Models\JobPosting\ReservationVacancyRelaxation;
use Illuminate\Http\Request;

class ReservationVacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, JobPosting $jobposting)
    {
        ReservationVacancyRelaxation::create([
            'job_posting_id' => $jobposting->id,
            'reservation_category_id' => $request->reservation_category_id,
            'vacancy' => $request->vacancy
        ]);

        return redirect()->back()->with([
            'status' => 'success',
            'message' => 'Vacancy Added Successfully'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
