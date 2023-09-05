<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Jobs') }}
        </h2>
    </x-slot> --}}
    
    @include('admin.jobs.jobs-menu')

    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="card shadow-sm border-0">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row mt-3">
            <div class="col-md-3">
                <div class="position-sticky" style="top: 30vh;">
                    
                </div>
            </div>
            <div class="col-md-8">
                
            </div>


        </div>
    </div>




</x-app-layout>
