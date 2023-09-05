<x-guest-layout>
    <main class="p-5" style="height: 83vh;display: flex;align-items: center;background-color: #f5f5f5;">
        <div class="container mt-5 mb-3">




            <div class="" style=" width: 100%;max-width: 600px;padding: 15px;margin: auto;">

                <form method="POST" action="{{ route('otp.getlogin') }}">
                    @csrf
                    <input type="hidden" name="candidate_id" value="{{ $candidate_id }}" />
                    <div class="row mb-3">
                        <label for="mobile_no" class="col-md-4 col-form-label text-md-end">{{ __('OTP') }}</label>

                        <div class="col-md-6">
                            <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror"
                                name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus
                                placeholder="Enter OTP">


                        </div>
                    </div>



                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Verify') }}
                            </button>
                        </div>
                    </div>
                    @error('otp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </form>
            </div>
        </div>
    </main>
</x-guest-layout>
