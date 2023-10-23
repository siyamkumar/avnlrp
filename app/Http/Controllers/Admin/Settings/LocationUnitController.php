<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\LocationUnitFormRequest;
use Illuminate\Http\Request;
use App\Models\LocationUnit;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;


class LocationUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.settings.locationunit.index',
            ['locationunits' => LocationUnit::paginate(10)]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.locationunit.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(LocationUnitFormRequest $request)
    {

        $LocationUnit = LocationUnit::create([
            'unit_code' => strtoupper($request->unit_code),
            'unit_name' => strtoupper($request->unit_code),
            'address' => $request->address,
            'about' => $request->about
        ]);

        return redirect()->route('locationunit.index')->with([
            'status' => 'success',
            'message' => 'Location Unit - <b>' . $LocationUnit->unit_name .  '</b> has been added Successfully',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(LocationUnit $locationunit)
    {
        return view('admin.settings.locationunit.show', [
            'locationunit' => $locationunit,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LocationUnit $locationunit)
    {
        return view('admin.settings.locationunit.edit', [
            'locationunit' => $locationunit,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(LocationUnitFormRequest $request, LocationUnit $locationunit)
    {
        
        $locationunit->update($request->validated());
        return redirect()->route('locationunit.index')->with([
            'status' => 'success',
            'message' => 'Location Unit - <b>' . $locationunit->unit_name .  '</b> has been updated Successfully',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocationUnit $locationunit)
    {
        $locationunit->delete();
        return redirect()->route('locationunit.index')->with([
            'status' => 'success',
            'message' => 'Location Unit - <b>' . $locationunit->unit_name .  '</b> has been deleted Successfully',
        ]);
    }
}
