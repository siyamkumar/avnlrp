<x-app-layout>
    <div class="container">
        <div class="row pt-3 ">
            <div class="col-auto me-auto">
                <small>Edit Job</small>
                <h2>{{ $jobposting->jobTitle }}</h2>
                <small class="text-body-secondary">{{ $jobposting->jobAdvertismentNo }}</small> <x-job-status
                    :status="$jobposting->status" />
            </div>

            <div class="col-auto align-self-end">

                @php
                    $disabled = true;
                    if ($jobposting->summary && $jobposting->educationcriteria && $jobposting->experiencecriteria && $jobposting->agecriteria) {
                        $disabled = false;
                    }

                @endphp


                @if ($jobposting->status == 'draft')
                    <form action="{{route('jobpostings.update', $jobposting)}}" method="POST">
                    @csrf @method('patch')
                        <button type="submit" class="btn btn-primary " name="publish" @if ($disabled) disabled @endif value=true>
                             Publish Job Posting </button>
                    </form>
                @endif
            </div>



        </div>


        <div class="row mt-2">
            <div class="col-md-3">
                <div class="position-sticky" style="top: 10vh;">

                    <ul class="card-body list-group">
                        <li class="list-group-item">
                            <small>Job Posting Date</small>
                            <h6> {{ $jobposting->jobPostingDate->format('d/M/Y') }} </h6>
                        </li>
                        <li class="list-group-item"> <small>Last Date for Application</small>
                            <h6> {{ $jobposting->jobPostingLastDate->format('d/M/Y') }} </h6>
                        </li>

                        <li class="list-group-item"> <small>Unit & Location</small>
                            <h6> {{ $jobposting->locationunit->unit_code }} </h6>

                        </li>

                        <li class="list-group-item">
                            <small>Vacancy</small>
                            <h6> {{ $jobposting->vacancy }} </h6>
                        </li>
                        <li class="list-group-item"> <small>Tenure</small>
                            <h6> {{ $jobposting->tenure }} Year(s)</h6>
                        </li>
                        <li class="list-group-item"><small>Renumeration</small>

                            <h6> <x-currency-format :amount="$jobposting->renumeration" /></h6>
                        </li>
                    </ul>




                </div>


            </div>

            <livewire:admin.jobs.edit :jobposting="$jobposting" />

            {{-- @if ($jobposting->vacancy > 1)
                            @include('admin.jobs.partials.vacancy')
                        @endif
                        --}}

        </div>
    </div>
    
</x-app-layout>
