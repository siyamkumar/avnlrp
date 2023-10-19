<x-app-layout>
    <div class="container mt-3">
    <x-card>
    <h3 style= "text-align:center"> Location Unit </h3>

                    <a href="{{ route('locationunit.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>



                  <form action="{{ route('locationunit.update', $locationunit->id) }}" method="POST">
                    @csrf @method("PUT")

                    <div class="mb-3 row">
                        <label for="unit_code" class="col-md-4 col-form-label text-md-end text-start">Unit Code</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('unit_code') is-invalid @enderror" id="unit_code" name="unit_code" value="{{ $locationunit->unit_code }}"  required >
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
                          <input type="text" class="form-control @error('unit_name') is-invalid @enderror" id="unit_name" name="unit_name" value="{{ $locationunit->unit_name}}"  required >
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
                          <input type="text" step="0.01" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{$locationunit->address }}"  required >
                          @error('adress')
                          <div class="invalid-feedback">
                             {{ $message }}
                         </div>
                         @enderror
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="about" class="col-md-4 col-form-label text-md-end text-start">About</label>
                        <div class="col-md-6">
                            <textarea  class="form-control" id="about" name="about" row="5"> {{$locationunit->about}} </textarea>
                            @error('about')
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
