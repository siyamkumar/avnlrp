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
                    <div class="card bg-white border-0 rounded-3 mb-3">
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
                                    <h2>
                                        {{ $job->jobTitle }}
                                    </h2>
                                    <p>
                                        {{ $job->summary }}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-3">
                        <div class="card-body p-4">
                            <h5>
                                About AVNL
                            </h5>
                            <p>
                                Armoured Vehicles Nigam Limited (AVANI) (AVNL) is a new Defence PSU with its
                                headquarters at Avadi (Chennai). It
                                has five (05) constituent production units and has around 12,000 employees. AVNL
                                produces battle tanks i.e. T-72, T90, MBT Arjun and Infantry Combat Vehicles, support
                                vehicles (MPV, AERV etc.) and Defence mobility solutions (Stallion,
                                LPTA etc.) for the armed forces and homeland security agencies. It is the current market
                                leader in this segment. It is a
                                new Government Company with Great Future. It offers great work environment and
                                challenging opportunities for the
                                professionals to prove their mettle.
                            </p>
                        </div>
                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-3">
                        <div class="card-body p-4">
                            <h5>
                                Experience Required
                            </h5>
                            <p>
                                Minimum 05 years, having strong legal, commercial background and expertise in company
                                secretarial matter
                                of a Ratna Category PSU, preferably DPSU or listed companies.
                            </p>
                            <b>Desirable</b>
                            <ul>
                                <li>Degree in Law</li>
                                <li>Preference to candidates with PSU background.</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-3">
                        <div class="card-body p-4">
                            <h5>
                                Job Specification / Requirement
                            </h5>
                            <ul>
                                <li> Ensure compliance with Companies Act and all other applicable Statutory and
                                    constitutional
                                    requirements.
                                </li>
                                <li>Maintenance of all Registers and Records as are statutorily required.
                                </li>
                                <li>Preparation and filing of all returns and reports as required by the Companies Act
                                    or any applicable statute to
                                    the ROC/NOC or to any Government authority.
                                </li>
                                <li>Ensure compliance with Government Instructions/guidelines on Corporate Governance
                                    issued by DPE or any
                                    other government Authority</li>
                                <li>Preparation of Agenda for Board Meetings and conduct Board meetings in a proper
                                    manner and preparation of
                                    minutes of the Board meetings.
                                </li>
                                <li>Preparation of Agenda for Annual General Meetings etc. and conduct such meetings in
                                    a proper manner and
                                    preparation of minutes of such meetings.
                                </li>
                                <li>Preparation of proper Annual Report of the Company in accordance with legal and
                                    constitutional requirements.
                                </li>
                                <li>Advising the CMD and the Board on important issues
                                </li>
                                <li>Maintain all Registers and Records as are statutorily required.</li>
                                <li>Reporting to Company Secretary </li>
                            </ul>

                        </div>
                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-3">
                        <div class="card-body p-4">
                            <h5>
                                Knowledge
                            </h5>
                            <ul>
                                <li> Of Companies Act and other applicable Statutes</li>
                                <li>Of Government/DPE guidelines on Corporate Governance</li>
                                <li>Of Company Secretarial Standards issued by ICSI</li>
                                <li>Of Procedure of conducting Board Meetings and annual general Meetings of the Company
                                </li>
                                <li>Of preparing Minutes of Board Meetings and Annual General Meetings etc.</li>
                                <li>Of Preparing Annual Report of the Company</li>
                                <li>Of Coordination and Liaisoning with Regulatory Authorities</li>

                            </ul>

                        </div>
                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-3">
                        <div class="card-body p-4">
                            <h5>
                                Skill Competency
                            </h5>
                            <ol>
                                <li>To ensure compliance with Companies Act and all other applicable Statutory and
                                    constitutional
                                    requirements.</li>
                                <li>To maintenance all Registers and Records as are statutorily required.</li>
                                <li>To prepare and file all returns and reports as required by the Companies Act or any
                                    applicable statute
                                    to the ROC/NOC or to any Government authority.
                                </li>
                                <li>To ensure compliance with Government Instructions/guidelines on Corporate Governance
                                    issued by
                                    DPE or any other government Authority.</li>
                                <li>To prepare Agenda for Board and Annual Meetings and conduct meetings in a proper
                                    manner and
                                    prepare minutes.</li>
                                <li> To draft, prepare and print proper Annual Report of the Company.</li>
                                <li>To advise the CMD and the Board on important issues</li>
                                <li>
                                    To maintain all Registers and Records as are statutorily required.
                                </li>
                                <li>For Office Automation</li>

                            </ol>

                        </div>
                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-3">
                        <div class="card-body p-4">
                            <h5>
                                Terms & Condition
                            </h5>


                        </div>
                    </div>


                </div>

                <div class="col-md-4">
                    <div class="position-sticky" style="top: 2rem;">
                        <div class="card card bg-white border-0 rounded-3 mb-3">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center 
                                         justify-content-between" >
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
                                                @elseif ($job->agecriteria->minAge)
                                                    <div>more than <span class="fw-bold">{{ $job->agecriteria->minAge }}</span></div>
                                                @else
                                                    <div>less than <span class="fw-bold">{{ $job->agecriteria->maxAge }} Years </span></div>@endif
                                                      
                                                @endif
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex align-items-center  justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <x-icons.vacancy />
                                                No of Vacancies
                                            </div>
                                            <div>
                                                <span class="fw-bold">{{ $job->vacancy }} </span>

                                                @if (count($job->reservationvacancyrelaxations) > 0)
                                                    @foreach ($job->reservationvacancyrelaxations as $res)
                                                        [ {{ $res->reservationcategories->code }} - {{ $res->vacancy }}
                                                        ]
                                                    @endforeach

                                                @endif

                                            </div>



                                        </div>
                                    </div>

                                    <div class="col-12 mb-3">
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
