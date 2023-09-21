<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Jobs') }}
        </h2>
    </x-slot> --}}

    @include('admin.jobs.jobs-menu')

    @if (count($jobpostings) > 0)

        <div class="container">
            <div class="row mt-3 mb-3">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Date</th>
                                <th>Job Adv. #</th>
                                <th>Job Title</th>
                                <th>Unit</th>
                                <th>Vacancy</th>
                                <th>Last Date</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Actions</th>
                            </thead>

                            <tbody>
                                @foreach ($jobpostings as $key => $jobposting)
                                    <tr id="{{ $key }}">
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $jobposting->jobPostingDate->format('d/M/Y') }}</td>
                                        <td>{{ $jobposting->jobAdvertismentNo }}</td>
                                        <td>{{ $jobposting->jobTitle }}</td>
                                        <td>{{ $jobposting->locationunit->unit_code }}</td>
                                        <td>{{ $jobposting->vacancy }}</td>
                                        <td>{{ $jobposting->jobPostingLastDate->format('d/M/Y') }} </td>
                                        <td><x-job-status :status="$jobposting->status" /></td>
                                        <td>{{ $jobposting->user->name ?? '' }}</td>
                                        <td>
                                            <x-icons.open href="" />
                                            <x-icons.edit href="{{ route('jobpostings.edit', $jobposting) }}" />
                                            <x-icons.delete href="" />
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div>
                    {{ $jobpostings->links() }}
                </div>

            </div>
        </div>
    @else
        <div class="container mt-3">
            <x-card>
                There are no job postings to display
            </x-card>
        </div>

    @endif

</x-app-layout>
