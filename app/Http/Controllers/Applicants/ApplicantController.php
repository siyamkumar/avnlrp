<?php

namespace App\Http\Controllers\Applicants;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class ApplicantController extends Controller
{
    public function create(): View
    {
        return view('applicants.jobapply');
    }

    public function store(Request $request): RedirectResponse
    {
       $request->validate([
        'fullname' => 'string',
        'email' => 'unique:candidates',
        'phone_no' => 'unique:candidates'
       ],
       ['email' => 'User with same email  has been registered. Try logging with email', 
       'phone_no' =>'User with same phone no has been registered. Try logging with phone']
    );
        $candidate = Candidate::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone_no' => $request->phone_no
        ]);
        
        // $now = Carbon::now();
        // if($verificationCode && $now->isBefore($verificationCode->expire_at)){
        //     return $verificationCode;
        // } 

        $verificationCode = VerificationCode::create([
            'candidate_id' => $candidate->id,
            'otp' => rand(123456, 999999),
            'expire_at' => Carbon::now()->addMinutes(10)
        ]);

        // event(new Registered($candidate));
       
        return redirect()->route('otp.verification', ['candidate_id' => $verificationCode->candidate_id]); 
        

    }
}