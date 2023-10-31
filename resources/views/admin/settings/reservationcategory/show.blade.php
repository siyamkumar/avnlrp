<x-app-layout>
    <div class="container mt-6">
    <x-card>
   
    <div >
   <h3 style= "text-align:center">Reservation category </h3>
</div>

                <div class="float-end">
                    <a href="{{ route('reservationcategory.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
          
                    <div class="row">
                        <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong> Code:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservationcategory->code }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $reservationcategory->name }}
                        </div>
                    </div>

                    
                    </div>

                    
    </x-card>
    </div>

</x-app-layout>