<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Recruitment Portal Admin Login</h1>


            @error('loginFailed')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@avnl.co.in"
                    value="{{ old('email') }}" name="email">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" id="password"
                    name="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    <span>{{ $message }}</span>
                </div>
            @enderror
            </div>


            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p>
        </form>

    </div>

</x-guest-layout>
