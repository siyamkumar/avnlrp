<x-guest-layout>
    <x-slot name="header">
        <div class="text-center">
            <h2 class="">Candidate Login</h2>
        </div>
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">
                <x-card class="border-0 rounded-0 p-3">
                    <form method="POST" action="{{ route('candidatelogin') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Enter your registered Email address
                            <span class="text-danger">*</span>
                            </label>
                            <input
                                class="form-control @error('email') is-invalid @enderror @error('EmailNotFound') is-invalid @enderror "
                                id="email" type="email" name="email" placeholder="yourname@email.com"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                            @error('EmailNotFound')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-login w-100 mb-3" type="submit">Next</button>

                        <div class="text-muted text-center">Click here for <a href="{{ route('candidateregister') }}"
                                class="text-decoration-none fw-bold text-dark">New Registration</a></div>
                    </form>
                </x-card>
            </div>
        </div>
    </div>



</x-guest-layout>
