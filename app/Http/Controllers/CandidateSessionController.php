<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CandidateSessionController extends Controller
{

    public function create(): View
    {
        return view('applicants.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $candidate = Candidate::where(
            'email',
            $request->email,
        )->first();

        if ($candidate) {
            $verificationCode = VerificationCode::create([
                'candidate_id' => $candidate->id,
                'otp' => rand(123456, 999999),
                'expire_at' => Carbon::now()->addMinutes(10)
            ]);
            return redirect()->route('otp.verification', ['candidate_id' => $verificationCode->candidate_id]);
        } else {
            return redirect()->back()->withErrors(['EmailNotFound' => 'Email Not Found']);
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('applicants')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
