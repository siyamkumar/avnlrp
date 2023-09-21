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
            <th></th>

        </tr>

        @foreach ($jobapplications as $key => $ja)
            <tr>
                <td>
                    <span class="fw-bold">{{ $ja->arn }} </span>

                    <small class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
                        style="color: #8228CF; background-color:#F2E6FF">{{ $ja->status ?? '' }}</small>


                </td>
                <td>{{ $ja->jobpostings->jobTitle }}</td>
                <td>{{ $ja->jobpostings->jobPostingLastDate ? $ja->jobpostings->jobPostingLastDate->format('d/M/Y') :'' }}</td>
                <td>
                    <a href="{{ route('jobapplication.edit', $ja) }}">Edit</a>
                </td>

            </tr>
        @endforeach
    </table>



</x-candidate-layout>
