<x-candidate-layout>
    <x-slot name="candidateheader">
        <div class="d-flex align-items-center">
            <h2 class="me-3">
                {{ __('ARN') }} | {{ $jobapplication->arn }}
            </h2><x-job-status :status="$jobapplication->status" />
        </div>

        @if ($jobapplication->isSubmitted)
            <div class="">
                <button type="submit" class="btn btn-sm btn-outline-secondary btn-action rounded-3" onclick="printForm()">
                    <x-icons.print /> Print
                </button>

                <button type="submit" class="btn btn-sm btn-outline-secondary btn-action rounded-3">
                    <x-icons.download />Download</button>
            </div>
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



    <script>
        function printForm() {

            var printContents = document.getElementById("application").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

            // var divContents = document.getElementById("page").innerHTML;
            // var a = window.open('', '', 'height=500, width=500');
            // a.document.write('<html>');
            // a.document.write('<body>');
            // a.document.write(divContents);
            // // a.document.write('</body></html>');
            // // a.document.close();
            // a.print();
        }
    </script>



</x-candidate-layout>
