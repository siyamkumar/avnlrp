<x-app-layout>
    <div class="container mt-3">
    <x-card>
   <h3 style= "text-align:center"> Location Unit </h3>
    <a href="{{ route('locationunit.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>


    <div class="card-body">
                <form action="{{ route('locationunit.store') }}" method="post">
                    @csrf
                   
                    <div class="mb-3 row">
                        <label for="unit_code" class="col-md-4 col-form-label text-md-end text-start">Unit Code</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('unit_code') is-invalid @enderror" id="unit_code" name="unit_code" value="{{ old('unit_code') }}"  required >
                          @error('unit_code')
                        <div class="invalid-feedback">
                          {{ $message }}
                         </div>
                         @enderror
                     </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="unit_name" class="col-md-4 col-form-label text-md-end text-start">Unit Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('unit_name') is-invalid @enderror" id="unit_name" name="unit_name"  value="{{ old('unit_name')}}" required >
                          @error('unit_name')
                            <div class="invalid-feedback">
                                  {{ $message }}
                            </div>
                                @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="address" class="col-md-4 col-form-label text-md-end text-start">Address</label>
                        <div class="col-md-6">
                          <input type="text" step="0.01" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address') }}"  required >
                          @error('address')
                         <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                             @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="about" class="col-md-4 col-form-label text-md-end text-start">About</label>
                        <div class="col-md-6">
                            <textarea  class="form-control"  id="about" name="about"> {{ old('about') }}  </textarea>
                          @error('about')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                          @enderror
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add location">
                    </div>
                    
                </form>
            </div>
            
    </x-card>
    </div>

</x-app-layout>