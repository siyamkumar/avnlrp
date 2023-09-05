<x-guest-layout>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <x-slot name="header">
        <div class="text-center">

            <h2 class="">Admin Login</h2>

        </div>
    </x-slot>
    <div class="container">


        <div class="row login-register-cover">
            <div class="col-lg-4 col-md-6 col-sm-12 mx-auto">




                <x-card class="border-0 rounded-0 p-3">

                    @error('loginFailed')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label class="form-label" for="input-1">Email address*</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="email"
                                type="text" required="" name="email" placeholder="hradmin@avnl.co.in"
                                value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror

                        </div>
                        <div class="form-group mb-3"><label class="form-label " for="input-4">Password *</label>
                            <input class="form-control  @error('password') is-invalid @enderror" id="password"
                                type="password" required="" name="password" placeholder="************">
                            @error('password')
                                <div class="invalid-feedback">
                                    <span>{{ $message }}</span>
                                </div>
                            @enderror
                        </div>


                        <div class="form-group"><button class="btn btn-primary btn-login w-100 " type="submit"
                                name="login">Login</button></div>

                    </form>
                </x-card>
            </div>


        </div>


    </div>
</x-guest-layout>
