<x-card>

    <div class="d-flex align-items-center mb-3">
        <x-icons.app-details />
        <h3>Application Details</h3>
    </div>


    <div class="row g-3 row-cols-4">
        <div class="">
            <div class="arn-label">Application Reference Number </div>
            <div class="fw-bold"> {{ $jobapplication->arn }}</div>
        </div>

        <div class="">
            <div class="arn-label">Advertisement No</div>
            <div class="fw-bold">{{ $jobapplication->jobPostings->jobAdvertismentNo }}</div>
        </div>

        <div class="">
            <div class="arn-label">Advertisement Date </div>
            <div class="fw-bold">{{ $jobapplication->jobPostings->jobPostingDate->format('d, M/Y') }}</div>
        </div>

        <div class="">
            <div class="arn-label">Application For</div>
            <div class="fw-bold">{{ $jobapplication->jobPostings->jobTitle }}</div>
        </div>
    </div>
</x-card>

<x-card>

    <div class="d-flex align-items-center mb-3">
        <x-icons.personal-details />
        <h3>Personal Details</h3>
        <div class="ms-3">
            <x-required-label />
        </div>
    </div>

    <div class="row">
        <div class="col-10">
            <div class="row mb-3">
                <div class="col-5 ">Full Name</div>
                <div class="col-6 fw-bold text-uppercase"> {{ $jobapplication->candidates->fullname ?? '' }}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-5">Father's/Mother's/Husband's NAME </div>
                <div class="col-6 fw-bold text-uppercase">
                    {{ $jobapplication->candidates->personaldetails->fatherName ?? '' }} </div>
            </div>
            <div class="row mb-3">
                <div class="col-5">Gender </div>
                <div class="col-6 fw-bold text-uppercase">
                    {{ $jobapplication->candidates->personaldetails->gender ?? '' }} </div>
            </div>

            <div class="row mb-3">
                <div class="col-5">Category </div>
                <div class="col-6 fw-bold text-uppercase">
                    {{ $jobapplication->candidates->personaldetails->reservationcategory->code ?? '' }} |
                    {{ $jobapplication->candidates->personaldetails->reservationcategory->name ?? '' }} </div>
            </div>

            <div class="row mb-3">
                <div class="col-5">Date of Birth </div>
                <div class="col-2 fw-bold text-uppercase">
                    {{ $jobapplication->candidates->personaldetails->dob->format('d/m/Y') }} </div>
                <div class="col-5 fw-bold ">
                    @php
                        $date = Carbon::parse($jobapplication->candidates->personaldetails->dob);
                        $now = Carbon::parse($jobapplication->jobpostings->jobPostingDate);
                        
                    @endphp

                    {{ $date->diff($now)->format('%y years & %m months') }} <small class="fw-normal muted">(as
                        on
                        the date
                        of Advt.)</small> </div>
            </div>

            <div class="row mb-3">
                <div class="col-5">Highest Qualification</div>
                <div class="col-6 fw-bold text-uppercase">
                    @if ($jobapplication->candidates->postgraduationeducationdetails)
                        pg
                    @elseif ($jobapplication->candidates->graduationeducationdetails)
                        ug | {{ $jobapplication->candidates->graduationeducationdetails->course_name }}
                    @elseif ($jobapplication->candidates->highersecondaryeducationdetails)
                        12th/Higher Secondary
                    @elseif ($jobapplication->candidates->secondaryeducationdetails)
                        10th/Secondary School
                    @else
                    <span class="text-muted fst-italic fw-lighter text-capitalize">Not Available</span>
                        @endif

                    
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-5">COMMUNICATION/PERMANENT ADDRESS </div>
                <div class="col-6 fw-bold text-uppercase">
                    {{ $jobapplication->candidates->personaldetails->address_line_1 }},
                    <br />{{ $jobapplication->candidates->personaldetails->address_line_2 }}, <br />
                    {{ $jobapplication->candidates->personaldetails->city }} -
                    {{ $jobapplication->candidates->personaldetails->pin_code }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-5">TELEPHONE/MOBILE NO. </div>
                <div class="col-6 fw-bold text-uppercase">{{ $jobapplication->candidates->phone_no }}
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-5">AADHAAR NUMBER</div>
                <div class="col-6 fw-bold text-uppercase">
                    {{ $jobapplication->candidates->personaldetails->aadhaarNo }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-5">PAN</div>
                <div class="col-6 fw-bold text-uppercase">
                    {{ $jobapplication->candidates->personaldetails->pan ?? 'NA'}}</div>
            </div>


            <div class="row mb-3">
                <div class="col-5">TOTAL WORK EXPERIECE </div>
                <div class="col-6 fw-bold text-uppercase">

                    {{ $totalexperience ?? 'NA' }} <span class="fw-normal text-capitalize">years</span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-5">DATE OF RETIREMENT/ SEPARATION FROM
                    THE LAST EMPLOYMENT </div>
                <div class="col-6 fw-bold text-uppercase"> NA </div>
            </div>

        </div>
        <div class="col-2">
            <div class="passport-photo">
                <img src="{{ url('storage/public/' .auth()->guard('applicants')->user()->personaldetails->photo_path ??'') }} "
                    style="width: 138px;
                height: 188px; object-fit: cover">

                {{-- <img src="" alt=""> --}}
            </div>
        </div>
    </div>
</x-card>