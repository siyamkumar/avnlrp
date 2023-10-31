<x-app-layout>
    <div class="container mt-3">
    <x-card>
    <h3 style= "text-align:center"> User Details </h3>

                    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>



                  <form action="{{ route('user.update', $user) }}" method="POST">
                    @csrf @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}"  required >
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
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email}}"  required >
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
                          <input type="password" step="0.01" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{$user->password }}"  required >
                          @error('password')
                          <div class="invalid-feedback">
                             {{ $message }}
                         </div>
                         @enderror
                        </div>
                    </div>

                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>

                </form>
            </div>
    </x-card>
    </div>

</x-app-layout>
