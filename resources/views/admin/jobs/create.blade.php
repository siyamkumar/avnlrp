<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Jobs') }}
        </h2>
    </x-slot> --}}

    @include('admin.jobs.jobs-menu')


    <div class="container">
        <h2 class="mt-3">
            Create New Job Posting
        </h2>

        <div id="job-basic-details" class="card shadow-sm border-0 my-3">
            <div class="card-body">
                @include('admin.jobs.partials.basic-details')
            </div>
        </div>
        
    </div>




</x-app-layout>
