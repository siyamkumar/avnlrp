<x-app-layout>
    <div class="container mt-3">
    <x-card>
               
    <h3 style= "text-align:center"> Reservation Category </h3>
            <a  href="{{ route('reservationcategory.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
    
            <div class="card-body">

<form  action="{{ route('reservationcategory.store') }}" method="POST">
    @csrf
     
                    <div class="mb-3 row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start">Code</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}">
                          @error('code')
                         <div class="invalid-feedback">
                             {{ $message }}
                         </div>
                          @enderror
                        </div>
                    </div>
                    <br>

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                          @error('name')
                         <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                             @enderror
                        </div>
                    </div>
       <br>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>

   
</form>

    </x-card>
    </div>

</x-app-layout>