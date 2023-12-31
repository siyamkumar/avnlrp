<x-guest-layout>

    <x-slot name="header">
        <div class="text-center">
            <h2 class="">OTP Verification</h2>
        </div>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-3 cold-sm-12 mx-auto">
                <x-card class="border-0 rounded-0 p-3">

                    <form method="POST" action="{{ route('otp.getlogin') }}">
                        @csrf

                        @error('otpincorrect')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        @error('otpexpired')
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror

                        <div class="form-group mb-3">
{{$otp_code ?? ''}}
                                {{ $login_otp ? $login_otp->otp : ''}}
                            <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror"
                                name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus
                                placeholder="Enter OTP">
                        </div>
                        <input type="hidden" name="candidate_id" value="{{ $candidate_id }}" />

                        <button class="btn btn-primary btn-login w-100" type="submit">Next</button>









                    </form>
                </x-card>
            </div>
        </div>
    </div>


</x-guest-layout>
