
<x-app-layout>
    <div class="container mt-3">
    <x-card>
    <h3 style= "text-align:center"> Reservation Category </h3>
                    <a href="{{ route('reservationcategory.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>

              
          
                  <form action="{{ route('reservationcategory.update', $reservationcategory->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"> Code</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ $reservationcategory->code }}"  required >
                          @error('code')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"> Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $reservationcategory->name}}"  required >
                          @error('name')
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