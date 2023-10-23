<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReservationCategory;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ReservationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.settings.reservationcategory.index',
            ['reservationcategories' => ReservationCategory::paginate(10)]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.reservationcategory.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        // validation convert to uppercase
        // $request['code'] = Str::upper($request['code']);
        // $request['name'] = Str::upper($request['name']);

        $request->validate(
            [
                'code' => ['required', 'unique:' . ReservationCategory::class],
                'name' => 'required',
            ],

            [
                'code' => 'reservaion code already exists',
                'name' => 'reservation name already exists',
            ]
        );

        Reservationcategory::create([
            'code' => strtoupper($request->code),
            'name' => $request->name
        ]);

        return view('admin.settings.reservationcategory.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $reservationcategory = ReservationCategory::where('id', $id)->first();

        return view('admin.settings.reservationcategory.show', [
            'reservationcategory' => $reservationcategory,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reservationcategory = ReservationCategory::where('id', $id)->first();

        return view('admin.settings.reservationcategory.edit', [
            'reservationcategory' => $reservationcategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request['code'] = Str::upper($request['code']);
        $request['name'] = Str::upper($request['name']);
        $request->validate([
            'code' => 'required',
            'name' => 'required',

        ]);

        ReservationCategory::where('id', $id)->update([
            'code' => $request->code,
            'name' => $request->name,

        ]);

        $reservationcategory = ReservationCategory::where('id', $id)->first();

        return view('admin.settings.reservationcategory.edit', [
            'reservationcategory' => $reservationcategory,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReservationCategory $reservationcategory)
    {
        $reservationcategory->delete();

        return redirect()->route('reservationcategory.index')->with('success', 'category deleted successfully');
    }
}
