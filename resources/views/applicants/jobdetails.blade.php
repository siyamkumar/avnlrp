<x-guest-layout>
    <main class="job-single pt-3 text-justify">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis ">
            <div class="">
                <h1 class="display-6 fw-bold text-center">Job Details</h1>

            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="card bg-white border-0 rounded-0 mb-3">
                        <div class="card-body p-4">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center">
                                        <x-icons.location />

                                        {{ $job->locationunit->unit_name }}


                                    </div>
                                </div>
                                <div class="col-md-4">
                                    Date : {{ $job->jobPostingDate->format('d, M/Y') }}
                                </div>
                                <div class="col-md-4">
                                    Last Date to Apply : {{ $job->jobPostingLastDate->format('d, M/Y') }}
                                </div>
                            </div>


                            <div class="row ">
                                <div class="col-12">
                                    <h2 class="job-posting-title">
                                        {{ ucwords(strtolower($job->jobTitle)) ?? '' }}
                                    </h2>
                                    <p>
                                        {{ $job->summary }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <x-jobs.details-card>
                        <x-slot:title>
                            About {{ $job->locationunit->unit_name ?? '' }}
                        </x-slot>

                        {{ $job->locationunit->about ?? '' }}
                        </x-jobs.details.card>

                        <x-jobs.details-card>
                            <x-slot:title>
                                Experience Required
                            </x-slot>

                            @if ($job->experiencecriteria)
                                {{ $job->experiencecriteria->desiredExperience }}
                            @else
                                <span class="text-muted">No experience mentioned</span>
                            @endif
                            </x-jobs.details.card>


                            <x-jobs.details-card>
                                <x-slot:title>
                                    Job Specification / Requirement
                                </x-slot>

                                @if ($job->jobrequirement)
                                    <div class="my-5">
                                        <h6 class="job-posting-heading">Specification</h6>
                                        <p class="job-posting-content"> {{ $job->jobrequirement->job_specification }}
                                        </p>
                                    </div>

                                    <div class="my-5">
                                        <h6 class="job-posting-heading">Knowledge</h6>
                                        <p> {{ $job->jobrequirement->knowledge }}</p>
                                    </div>
                                    <div class="mt-5">
                                        <h6 class="job-posting-heading">Skills</h6>
                                        <p> {{ $job->jobrequirement->skills }}</p>
                                    </div>
                                @else
                                    <span class="text-muted">No requirement mentioned</span>
                                @endif

                            </x-jobs.details-card>


                            <x-jobs.details-card>
                                <x-slot:title>
                                    Terms & Condition
                                </x-slot>
                                @if ($job->termscondition)
                                    <p> {{ $job->termscondition->job_terms }}</p>
                                @else
                                    <span class="text-muted">No requirement mentioned</span>
                                @endif
                            </x-jobs.details-card>





                </div>

                <div class="col-md-4">
                    <div class="position-sticky" style="top: 12%;">
                        <div class="card card bg-white border-0 rounded-3 mb-3">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 mb-3">
                                        <div
                                            class="d-flex align-items-center 
                                         justify-content-between">
                                            <div class="d-flex align-items-right">
                                                <x-icons.tenure /> Tenure
                                            </div>

                                            2 Years
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center  justify-content-between">

                                            <div class="d-flex align-items-center">
                                                <x-icons.experience />
                                                Experience
                                            </div>
                                            5+ Yrs
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center  justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <x-icons.tenure /> Age Limit
                                            </div>

                                            @if ($job->agecriteria)

                                                @if ($job->agecriteria->minAge && $job->agecriteria->maxAge)
                                                    {{ $job->agecriteria->minAge }} - {{ $job->agecriteria->maxAge }}
                                                    Years
                                                @elseif ($job->agecriteria->minAge)
                                                    <div>more than <span
                                                            class="fw-bold">{{ $job->agecriteria->minAge }}</span>
                                                    </div>
                                                @else
                                                    <div>less than <span
                                                            class="fw-bold">{{ $job->agecriteria->maxAge }} Years
                                                        </span></div>
                                                @endif

                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center  justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <x-icons.vacancy />
                                                No of Vacancies
                                            </div>
                                            <div class=" @if (count($job->reservationvacancyrelaxations) > 0) tooltip-container @endif">
                                                <span
                                                    @if (count($job->reservationvacancyrelaxations) > 0) data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="age-tooltip" data-bs-html="true"
                                                    data-bs-title="<ul class='list-unstyled text-start'>@foreach ($job->reservationvacancyrelaxations as $res)
                                                         <li>{{ $res->reservationcategories->code }} - {{ $res->vacancy }} </li>
                                                         @endforeach 
                                                         </ul>" @endif>{{ $job->vacancy }}
                                                </span>



                                            </div>



                                        </div>
                                    </div>

                                    <div class="col-12
                                                    mb-3">
                                        <div class="d-flex align-items-center justify-content-between">

                                            <div class="d-flex align-items-center">
                                                <x-icons.renumeration />
                                                Renumeration
                                            </div>
                                            <div>
                                                <x-currency-format :amount="$job->renumeration" />
                                            </div>


                                        </div>
                                    </div>

                                    <div class="col-12">

                                        @php
                                            $c = auth()
                                                ->guard('applicants')
                                                ->user();
                                            $applied = null;
                                        @endphp

                                        @php
                                            if ($c) {
                                                $applied = $c
                                                    ->jobapplications()
                                                    ->where('job_posting_id', $job->id)
                                                    ->exists();
                                            }
                                        @endphp



                                        @if ($applied)
                                            <div class="alert alert-warning" role="alert">
                                                You have already applied to this job.
                                            </div>
                                        @else
                                            <form action="{{ route('jobapply', $job) }}" method="POST">
                                                @csrf
                                                <button name="jobposting" class="btn btn-primary w-100">Apply
                                                    Now</button>

                                            </form>
                                        @endif



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </div>
        </div>

    </main>


</x-guest-layout>
