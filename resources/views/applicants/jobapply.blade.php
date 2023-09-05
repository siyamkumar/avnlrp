<x-guest-layout>

    <x-slot name="header">
        <div class="text-center">
            <h2 class="">Candidate Register</h2>
        </div>
    </x-slot>

    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                <x-card class="border-0 rounded-0 p-3">

                    <form action={{ route('applicantregister') }} method="POST">

                        @csrf


                        <div class="form-group mb-3">

                            <label for="fullname" class="form-label">Full Name*</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="fullname"
                                type="text" name="fullname" placeholder="Full Name" value="{{ old('fullname') }}">
                            @error('fullname')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror

                        </div>




                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email address*</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="email"
                                type="email" name="email" placeholder="yourname@email.com"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>

                        
                        <div class="form-group mb-3">
                            <label for="phone_no" class="form-label">Phone No*</label>
                            <input class="form-control @error('phone_no') is-invalid @enderror" id="phone_no"
                                type="text" name="phone_no" placeholder="+91 99999 99999"
                                value="{{ old('phone_no') }}">
                            @error('phone_no')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>




                     
                        <button class="btn btn-primary btn-login w-100 mb-3" type="submit">Next</button>
                        <div class="text-muted text-center">Already registered? <a href="/candidate-login" class="text-decoration-none fw-bold text-dark">Login Now</a></div>

                    </form>
                </x-card>
            </div>
        </div>


    </div>

    </main>
</x-guest-layout>
