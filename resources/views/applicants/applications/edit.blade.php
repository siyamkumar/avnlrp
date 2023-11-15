<x-candidate-layout>
    <x-slot name="candidateheader">
        <div class="d-flex align-items-center">
            <h2 class="me-3">
                {{ __('ARN') }} | {{ $jobapplication->arn }}
            </h2><x-job-status :status="$jobapplication->status" />
        </div>

        @if ($jobapplication->isSubmitted)
            {{-- <div class="">
                <button id="printTable" type="button" class="ms-3 btn btn-sm btn-outline-secondary btn-action rounded-3">
                    <x-icons.print /> Print
                </button>

                <button type="submit" class="btn btn-sm btn-outline-secondary btn-action rounded-3">
                    <x-icons.download />Download</button>
            </div> --}}
        @endif

    </x-slot>


    {{-- @foreach ($jobapplication->getAttributes() as $key => $value) 
         @empty($value)
           {{$key}}     empty
         @endempty --}}

    {{-- @endforeach --}}
    
    
    <div class="container px-0" id="application">

        @if ($jobapplication->isSubmitted)
            <div class="alert alert-success border-0" role="alert">
                You have submitted the application on . Please wait for further updates
            </div>
        @elseif($jobapplication->jobpostings->jobPostingLastDate->isPast())
            <div class="alert alert-warning border-0 fw-bold" role="alert">
                You cannot submit this application after the last date of submission.
            </div>
        @endif

        @include('applicants.applications.partials.details')

        @include('applicants.applications.partials.education')

        @include('applicants.applications.partials.experience')

        @include('applicants.applications.partials.declaration')


    </div>


<iframe id="print_frame" name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>




</x-candidate-layout>
