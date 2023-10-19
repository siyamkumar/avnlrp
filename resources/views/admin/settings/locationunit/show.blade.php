<x-app-layout>
    <div class="container mt-6">
    <x-card>
    <div >
   <h3 style= "text-align:center"> Location Unit </h3>
</div>
                <div class="float-end">
                    <a href="{{ route('locationunit.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
          
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Unit Code:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $locationunit->unit_code }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Unit Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $locationunit->unit_name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Address:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $locationunit->address }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>About:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $locationunit->about }}
                        </div>
                    </div>

                    
    </x-card>
    </div>

</x-app-layout>