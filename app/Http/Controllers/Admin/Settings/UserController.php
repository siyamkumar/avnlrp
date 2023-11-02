<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
// use App\Models\Division;
// use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    // public function __construct(){
    //     $this->authorizeResource(User::class, 'user');
    // }fsfshfsuifhs fgdfgedgd fgdggfgffghgv  fdbsjkdsjdhskdjnxcmzn

    public function index()
    {
     $user = User::orderBy('name', 'ASC');
        return view('admin.settings.users.index',
         ['users'=> User::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $divisions = Division::all();
         
        return view('admin.settings.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // ]);
         $request->validate(
            [
                'email' => ['required', 'unique:' . User::class],
                'name' => ['required','unique:' . User::class],
            ]

        );
         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
           
        ]);
       
        return redirect()->route('user.index')->with('success', 'User ' . $user->name . ' has been created succesfully');
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
    public function edit(User $user)
    {
        return view('admin.settings.users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        User::where('id',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);
        $user= User::where('id',$id)->first();
               return redirect()->route('user.index')->with('success', 'User ' . $user->name . ' has been modified succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with([
            'status' => 'success',
            'message' => 'User - <b>' . $user->name .  '</b> has been deleted Successfully',
        ]);
    }
}
