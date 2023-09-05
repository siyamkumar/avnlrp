<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Jobs') }}
        </h2>
    </x-slot> --}}

    @include('admin.jobs.jobs-menu')

    <div class="container mt-3">
        

    </div>

    <div class="container">

        <div class="row mt-3">
           
            <div class="col-md-12">
                <div class="position-sticky" style="top: 16vh; z-index:999;">
                    <h2>
                        Create New Job Posting
                    </h2>
                    <ul id="navbar-example2" class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#job-basic-details">Basic Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#job-criteria">Criteria</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#job-specification">Specification</a>
                        </li>

                    </ul>
                </div>
                <div class="row my-3 new-job-container" data-bs-spy="scroll" data-bs-target="#navbar-example2"
                    data-bs-offset="0" class="scrollspy-example" tabindex="0">
                    <div id="job-basic-details" class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            @include('admin.jobs.partials.basic-details')
                        </div>
                    </div>

                    <div id="job-criteria" class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            @include('admin.jobs.partials.criteria')
                        </div>
                    </div>

                    <div id="job-specification" class="card shadow-sm border-0 mb-3">
                        <div class="card-body">
                            @include('admin.jobs.partials.specification')
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </div>




</x-app-layout>
