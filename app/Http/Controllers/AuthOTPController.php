<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthOTPController extends Controller
{

    public function login()
    {
        return view('applicants.otp-login');
    }

    public function verification($candidate_id)
    {
        return view('applicants.verification')->with([
            'candidate_id' => $candidate_id
        ]);
    }

    public function loginWithOtp(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required|exists:candidates,id',
            'otp' => 'required'
        ]);

        #Validation Logic
        $verificationCode = VerificationCode::where('candidate_id', $request->candidate_id)->where('otp', $request->otp)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Your OTP is not correct');
        } elseif ($verificationCode && $now->isAfter($verificationCode->expire_at)) {
            return redirect()->route('otp.login')->with('error', 'Your OTP has been expired');
        }

        $candidate = Candidate::whereId($request->candidate_id)->first();

        if ($candidate) {
            // Expire The OTP
            $verificationCode->update([
                'expire_at' => Carbon::now()
            ]);

            Auth::guard('applicants')->login($candidate);

            return redirect('/next-step');
        }

        return redirect()->route('otp.login')->with('error', 'Your Otp is not correct');
    }

}