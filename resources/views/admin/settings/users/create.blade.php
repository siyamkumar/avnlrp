<x-app-layout>
    <div class="container pt-3">
        <x-card>
            <h3 style= "text-align:center">Add new User</h3>
            <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>


            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                            <input type="password" step="0.01"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                name="password" value="{{ old('password') }}"  required autocomplete="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                    <label for="password_confirmation"  class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                    <div class="col-md-6">
                    <input type="password"  :value="__('Confirm Password')" step="0.01"
                                class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation"
                                name="password_confirmation" value="{{ old('password_confirmation') }}"  required autocomplete="password" />
                                @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
        </div>
                   
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add New User">
                    </div>

                </form>
            </div>

        </x-card>
    </div>

</x-app-layout>

   
