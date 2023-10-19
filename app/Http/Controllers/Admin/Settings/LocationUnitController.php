<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
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
        return view('admin.settings.locationunit.index', ['locationunits' => LocationUnit::all()]);
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
    public function store(Request $request)
    {
        
   
        $request->validate([
            'unit_code' =>['required','unique:'.LocationUnit::class],
            'unit_name' =>'required',
            'address'=> 'required',
            'about'=> 'required|max:600',
        ],
       [
             'unit_code' => 'unit code already exists',
             
             ]
     );
                  
     LocationUnit::create([
        'unit_code' => strtoupper($request->unit_code),
        'unit_name'=> strtoupper($request->unit_code),
        'address'=>$request->address,
        'about'=>$request->about
     ]);
        return view('admin.settings.locationunit.create');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        
        $locationunit = LocationUnit::where('id', $id)->first();
       
        return view('admin.settings.locationunit.show', [
            'locationunit' => $locationunit,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $locationunit = LocationUnit::where('id', $id)->first();
       
        return view('admin.settings.locationunit.edit', [
            'locationunit' => $locationunit,
        ]);
    }

   /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'unit_code' =>['required','unique:'.LocationUnit::class],
            'unit_name' =>'required',
            'address' => 'required',
            'about'=> 'required|max:600'
            ] );  

        LocationUnit::where('id', $id)->update(['unit_code' => $request->unit_code,
            'unit_name' => $request->unit_name,
            'address' => $request->address,
            'about' => $request->about,
        ]);
        
        $locationunit = locationunit::where('id', $id)->first();
       
        return view('admin.settings.locationunit.edit', [
            'locationunit' => $locationunit,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LocationUnit $locationunit)
    {
        $locationunit->delete();

        return redirect()->route('locationunit.index')->with('success', 'category deleted successfully');
    }
}
