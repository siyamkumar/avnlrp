<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('My Applications') }}

        </h2>




    </x-slot>


    <table class="table">
        <tr>
            <th>ARN</th>
            <th>Job Title</th>
            <th>Last Date to Apply</th>
            <th>Status</th>
            <th></th>

        </tr>

        @foreach ($jobapplications as $key => $ja)
            <tr>
                <td>
                    <span class="fw-bold">{{ $ja->arn }} </span>
                    


                </td>
                <td>{{ $ja->jobpostings->jobTitle }}</td>
                <td>{{ $ja->jobpostings->jobPostingLastDate ? $ja->jobpostings->jobPostingLastDate->format('d/M/Y') : '' }}
                </td>
                <td><x-arnstatus-regular :status="$ja->status" />
                </td>
                <td>
                    @if(!$ja->isSubmitted)
                    <a href="{{ route('jobapplication.edit', $ja) }}">Edit</a>
                    @else
                    <a href="{{ route('jobapplication.edit', $ja) }}">View Application</a>
                    @endif
                </td>

            </tr>
        @endforeach
    </table>



</x-candidate-layout>
