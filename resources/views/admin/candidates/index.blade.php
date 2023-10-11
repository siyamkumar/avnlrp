<x-app-layout>

    @include('admin.candidates.candidates-menu')

    <div class="container">
        <div class="row g-0 py-3">
            <div class="col-md-3">
                <div class="card rounded-0 border rounded-start border-end-0">
                    <div class="card-body p-0">
                        <div class="arn-sidebar" style="height: 69vh; 
                        overflow-y: auto;">

                            <ul class="nav" id="arn-sidebar">

                                @foreach ($applications as $key => $app)
                                    <li class="nav-item" role="presentation" height="">
                                        <a class="nav-link @if ($loop->first) active @endif"
                                            id="{{ $key }}" data-bs-toggle="tab" href="#{{ $app->arn }}"
                                            role="tab" aria-controls="tab-home">
                                            <div class="">
                                                <small>{{ $app->jobpostings->locationunit->unit_code }}</small>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h6 class="arn-title mb-0"># {{ $app->arn }}</h6>
                                                    @switch($app->status)
                                                        @case('draft')
                                                            <small
                                                                class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
                                                                style="color: #8228CF; background-color:#F2E6FF; font-size:10px">{{ $app->status ?? '' }}</small>
                                                        @break

                                                        @case('submitted')
                                                            <small
                                                                class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
                                                                style="color: #2E6300; background-color:#ECFCCB; font-size:10px">{{ $app->status ?? '' }}</small>
                                                        @break

                                                        @case('shortlisted')
                                                            <small
                                                                class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
                                                                style="color:#437F5B; background-color:#D1FADF; font-size:10px">{{ $app->status ?? '' }}</small>
                                                        @break

                                                        @case('rejected')
                                                            <small
                                                                class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
                                                                style="color:#912452; background-color:#FBE9F1; font-size:10px">{{ $app->status ?? '' }}</small>
                                                        @break

                                                        @default
                                                    @endswitch
                                                </div>

                                                <div>
                                                    {{ $app->jobpostings->jobTitle }}


                                                </div>

                                            </div>


                                        </a>
                                    </li>
                                @endforeach

                            </ul>



                        </div>

                        <div class="position-sticky pt-2 px-2 bottom-0 bg-white"
                            style="height:5vh;box-shadow: 0px -5px 15px -3px rgba(0,0,0,0.1);">
                            {{ $applications->links() }}
                        </div>




                    </div>
                </div>


            </div>
            <div class="col-9">
                <div class="rounded-0 border rounded-end">
                    <div class="px-0 py-0">

                        <div class="tab-content arn-content" style="height: 74vh; overflow-y: auto;">

                            @foreach ($applications as $key => $app)
                                <div class="tab-pane fade @if ($loop->first) active show @endif"
                                    id="{{ $app->arn }}">

                                    <div class="position-sticky p-2 top-0 bg-white shadow-sm" style="z-index: 99">
                                        <div class="d-flex align-items-center justify-content-between w-100">
                                            <div class="">
                                                <h4 class="">
                                                    {{ __('Application') }} <small class="text-muted fw-light">
                                                        #{{ $app->arn }} </small>
                                                </h4>

                                                @switch($app->status)
                                                    @case('draft')
                                                        <small
                                                            class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
                                                            style="color: #8228CF; background-color:#F2E6FF">{{ $app->status ?? '' }}</small>
                                                    @break

                                                    @case('submitted')
                                                        <small
                                                            class="d-inline-flex px-2 py-1 fw-semibold  rounded-2 text-uppercase"
                                                            style="color: #2E6300; background-color:#ECFCCB">{{ $app->status ?? '' }}</small>
                                                        {{ $app->submitted_at ? $app->submitted_at->format('d M y') : '' }}
                                                    @break

                                                    @default
                                                @endswitch


                                            </div>

                                            @if ($app->isSubmitted && $app->status == 'submitted')
                                                <div class="">
                                                  
                                                </div>
                                            @endif

                                        </div>
                                    </div>


                                    <div class="container">



                                        <div class="mt-3 pb-3">


                                            <x-card>

                                                <div class="d-flex align-items-center mb-3">
                                                    <x-icons.app-details />
                                                    <h3>Application Details</h3>
                                                </div>


                                                <div class="row g-3 row-cols-4">
                                                    <div class="">
                                                        <div class="arn-label">Application Reference Number </div>
                                                        <div class="fw-bold"> {{ $app->arn }}</div>
                                                    </div>

                                                    <div class="">
                                                        <div class="arn-label">Advertisement No</div>
                                                        <div class="fw-bold">
                                                            {{ $app->jobPostings->jobAdvertismentNo }}</div>
                                                    </div>

                                                    <div class="">
                                                        <div class="arn-label">Advertisement Date </div>
                                                        <div class="fw-bold">
                                                            {{ $app->jobPostings->jobPostingDate->format('d, M/Y') }}
                                                        </div>
                                                    </div>

                                                    <div class="">
                                                        <div class="arn-label">Application For</div>
                                                        <div class="fw-bold">
                                                            {{ $app->jobPostings->jobTitle }}</div>
                                                    </div>
                                                </div>
                                            </x-card>

                                            <x-card>

                                                <div class="d-flex align-items-center mb-3">
                                                    <x-icons.personal-details />
                                                    <h3>Personal Details</h3>

                                                </div>

                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="row mb-3">
                                                            <div class="col-5 ">Full Name</div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                {{ $app->candidates->fullname ?? '' }}
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-5">Father's/Mother's/Husband's NAME </div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                {{ $app->candidates->personaldetails->fatherName ?? '' }}
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-5">Gender</div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                {{ $app->candidates->personaldetails->gender ?? '' }}
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-5">Category </div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                {{ $app->candidates->personaldetails->reservationcategory->code ?? '' }}
                                                                |
                                                                {{ $app->candidates->personaldetails->reservationcategory->name ?? '' }}
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-5">Date of Birth </div>
                                                            <div class="col-2 fw-bold text-uppercase">
                                                                {{ $app->candidates->personaldetails->dob->format('d/m/Y') }}
                                                            </div>
                                                            <div class="col-5 fw-bold ">
                                                                @php
                                                                    $date = Carbon::parse($app->candidates->personaldetails->dob);
                                                                    $now = Carbon::parse($app->jobpostings->jobPostingDate);
                                                                    
                                                                @endphp

                                                                {{ $date->diff($now)->format('%y years & %m months') }}
                                                                <small class="fw-normal muted">(as
                                                                    on
                                                                    the date
                                                                    of Advt.)</small>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-5">Highest Qualification</div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                @if ($app->candidates->postgraduationeducationdetails)
                                                                    pg
                                                                @elseif ($app->candidates->graduationeducationdetails)
                                                                    ug |
                                                                    {{ $app->candidates->graduationeducationdetails->course_name }}
                                                                @elseif ($app->candidates->highersecondaryeducationdetails)
                                                                    12th/Higher Secondary
                                                                @elseif ($app->candidates->secondaryeducationdetails)
                                                                    10th/Secondary School
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-5">COMMUNICATION/PERMANENT ADDRESS </div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                {{ $app->candidates->personaldetails->address_line_1 }},
                                                                <br />{{ $app->candidates->personaldetails->address_line_2 }},
                                                                <br />
                                                                {{ $app->candidates->personaldetails->city }} -
                                                                {{ $app->candidates->personaldetails->pin_code }}
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-5">TELEPHONE/MOBILE NO. </div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                {{ $app->candidates->phone_no }}
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-5">AADHAAR NUMBER</div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                {{ $app->candidates->personaldetails->aadhaarNo }}
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-5">PAN</div>
                                                            <div class="col-6 fw-bold text-uppercase">
                                                                {{ $app->candidates->personaldetails->pan }}</div>
                                                        </div>


                                                        <div class="row mb-3">
                                                            <div class="col-5">TOTAL WORK EXPERIECE </div>
                                                            <div class="col-6 fw-bold text-uppercase">

                                                                {{ $totalexperience ?? '' }} <span
                                                                    class="fw-normal text-capitalize">years</span>
                                                            </div>
                                                        </div>

                                                        <div class="row mb-3">
                                                            <div class="col-5">DATE OF RETIREMENT/ SEPARATION FROM
                                                                THE LAST EMPLOYMENT </div>
                                                            <div class="col-6 fw-bold text-uppercase">07/06/2023</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-2">
                                                        <div class="passport-photo">
                                                            <img src="" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </x-card>

                                            <x-card class="">
                                                <div class="">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                                                                <svg viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg" width="30">

                                                                    <g>
                                                                        <path
                                                                            d="M3.0918 6.63659L9.78291 3.49965C11.2039 2.83345 12.7964 2.83345 14.2174 3.49965L20.9086 6.63664C22.3641 7.31899 22.3641 9.68105 20.9086 10.3634L14.2175 13.5003C12.7965 14.1665 11.204 14.1665 9.783 13.5003L5.00019 11.2581"
                                                                            stroke="#5B626F" stroke-width="1.5"
                                                                            stroke-linecap="round"></path>
                                                                        <path
                                                                            d="M2.5 15V12.1376C2.5 10.8584 2.5 10.2188 2.83032 9.71781C3.16064 9.21687 3.74853 8.96492 4.92432 8.461L6 8"
                                                                            stroke="#5B626F" stroke-width="1.5"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                        <path
                                                                            d="M19 11.5V16.6254C19 17.6334 18.4965 18.5772 17.6147 19.0656C16.1463 19.8787 13.796 21 12 21C10.204 21 7.8537 19.8787 6.38533 19.0656C5.5035 18.5772 5 17.6334 5 16.6254V11.5"
                                                                            stroke="#5B626F" stroke-width="1.5"
                                                                            stroke-linecap="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </div>

                                                            <h3>Education Qualification</h3>

                                                        </div>


                                                    </div>



                                                    <table class="mt-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Qualifications</th>
                                                                <th>% of marks obtained/CGPA</th>
                                                                <th>Year of passing</th>
                                                                <th>Name of School/College</th>
                                                                <th>Affiliated Institute/University</th>
                                                                <th>Enclosed Document</th>
                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    10th/Secondary
                                                                </td>
                                                                <td>{{ $app->secondaryeducationdetails->score ?? '' }}
                                                                </td>
                                                                <td>{{ $app->secondaryeducationdetails->year_of_passing ?? '' }}
                                                                </td>
                                                                <td>{{ $app->secondaryeducationdetails->school_name ?? '' }}
                                                                </td>
                                                                <td>{{ $app->secondaryeducationdetails->school_board ?? '' }}
                                                                </td>
                                                                <td>
                                                                    @if ($app->secondaryeducationdetails)
                                                                        <a href="{{ url('storage/public/' . $app->secondaryeducationdetails->marksheet_path ?? '') }}""
                                                                            target="_blank">{{ $app->secondaryeducationdetails->file_name }}</a>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <button class="btn btn-icon btn-danger me-2">
                                                                            Invalid
                                                                        </button>
                                                                        <button class="btn btn-icon btn-success me-2">
                                                                            Valid
                                                                        </button>
                                                                    </div>
                                                                </td>

                                                            </tr>




                                                            <tr>
                                                                <td>
                                                                    12th/Higher Secondary
                                                                </td>
                                                                <td>{{ $app->highersecondaryeducationdetails->score ?? '' }}
                                                                </td>
                                                                <td>{{ $app->highersecondaryeducationdetails->year_of_passing ?? '' }}
                                                                </td>
                                                                <td>{{ $app->highersecondaryeducationdetails->school_name ?? '' }}
                                                                </td>
                                                                <td>{{ $app->highersecondaryeducationdetails->school_board ?? '' }}
                                                                </td>
                                                                <td>
                                                                    {{-- <a href="{{ url('storage/public/' . $app->highersecondaryeducationdetails->marksheet_path ?? '') }}"
                                                                                    target="_blank">{{ $app->highersecondaryeducationdetails->file_name }}</a> --}}
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <button class="btn btn-icon btn-danger me-2">
                                                                            Invalid
                                                                        </button>
                                                                        <button class="btn btn-icon btn-success me-2">
                                                                            Valid
                                                                        </button>
                                                                    </div>
                                                                </td>

                                                            </tr>



                                                            @foreach ($app->graduationeducationdetails as $ged)
                                                                <tr>
                                                                    <td>UG</td>
                                                                    <td>{{ $ged->score ?? '' }}</td>
                                                                    <td>{{ $ged->year_of_passing ?? '' }}
                                                                    </td>
                                                                    <td>{{ $ged->college_name ?? '' }}</td>
                                                                    <td>{{ $ged->university_name ?? '' }}
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ url('storage/public/' . $ged->marksheet_path ?? '') }}"
                                                                            target="_blank">{{ $ged->file_name ?? '' }}</a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <button
                                                                                class="btn btn-icon btn-danger me-2">
                                                                                Invalid
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-success me-2">
                                                                                Valid
                                                                            </button>
                                                                        </div>
                                                                    </td>

                                                                </tr>
                                                            @endforeach


                                                            @foreach ($app->postgraduationeducationdetails as $ged)
                                                                <tr>
                                                                    <td>PG</td>
                                                                    <td>{{ $ged->score }}</td>
                                                                    <td>{{ $ged->year_of_passing }}
                                                                    </td>
                                                                    <td>{{ $ged->college_name }}</td>
                                                                    <td>{{ $ged->university_name }}
                                                                    </td>
                                                                    <td>
                                                                        <a href="{{ url('storage/public/' . $ged->marksheet_path ?? '') }}"
                                                                            target="_blank">{{ $ged->file_name ?? '' }}</a>

                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <button
                                                                                class="btn btn-icon btn-danger me-2">
                                                                                Invalid
                                                                            </button>
                                                                            <button
                                                                                class="btn btn-icon btn-success me-2">
                                                                                Valid
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>

                                                </div>
                                            </x-card>

                                            <x-card>


                                                <div>

                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                            <div
                                                                class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                                                                <svg viewBox="0 0 24 24" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg" width="30">
                                                                    <g>
                                                                        <path
                                                                            d="M9.1709 4C9.58273 2.83481 10.694 2 12.0002 2C13.3064 2 14.4177 2.83481 14.8295 4"
                                                                            stroke="#5B626F" stroke-width="1.5"
                                                                            stroke-linecap="round"></path>
                                                                        <path
                                                                            d="M12 22.25C11.5858 22.25 11.25 22.5858 11.25 23C11.25 23.4142 11.5858 23.75 12 23.75V22.25ZM4.31802 21.8284L4.81629 21.2679L4.31802 21.8284ZM19.682 21.8284L19.1837 21.2679L19.682 21.8284ZM7.95476 23.6837C8.36822 23.7087 8.72365 23.3938 8.74863 22.9804C8.77362 22.5669 8.4587 22.2115 8.04524 22.1865L7.95476 23.6837ZM2.25 13C2.25 14.8741 2.24918 16.8307 2.41875 18.4664C2.50368 19.2856 2.63401 20.0548 2.84074 20.7105C3.04411 21.3557 3.3444 21.9665 3.81975 22.389L4.81629 21.2679C4.63262 21.1046 4.43867 20.7904 4.27134 20.2596C4.10738 19.7394 3.99058 19.0818 3.91075 18.3118C3.75082 16.769 3.75 14.8971 3.75 13H2.25ZM12 23.75C14.1024 23.75 15.7464 23.7513 17.0267 23.5983C18.3204 23.4436 19.3568 23.1209 20.1803 22.389L19.1837 21.2679C18.6891 21.7075 18.0058 21.9706 16.8487 22.1089C15.6782 22.2487 14.1402 22.25 12 22.25V23.75ZM8.04524 22.1865C6.33099 22.0829 5.4315 21.8147 4.81629 21.2679L3.81975 22.389C4.83576 23.2921 6.18271 23.5767 7.95476 23.6837L8.04524 22.1865ZM20.2499 13.3873C20.2492 15.2185 20.2371 17.0032 20.0724 18.4673C19.9902 19.1982 19.8728 19.8201 19.7119 20.3117C19.548 20.8126 19.3605 21.1108 19.1837 21.2679L20.1803 22.389C20.6399 21.9804 20.9352 21.3963 21.1375 20.7783C21.3428 20.1509 21.4751 19.4171 21.563 18.635C21.7387 17.0731 21.7492 15.2032 21.7499 13.3879L20.2499 13.3873Z"
                                                                            fill="#5B626F"></path>
                                                                        <path
                                                                            d="M14.6603 15L17.664 14.2166M9.33968 15L3.3324 13.4332C2.7369 13.2779 2.43915 13.2002 2.25021 13.0141C2.21341 12.9778 2.18015 12.939 2.15078 12.8979C2 12.6871 2 12.4168 2 11.8763C2 9.74619 2 8.68113 2.67298 7.96206C2.80233 7.82385 2.94763 7.69753 3.10659 7.58508C3.9337 7 5.15877 7 7.60893 7H16.3911C18.8412 7 20.0663 7 20.8934 7.58508C21.0524 7.69753 21.1977 7.82385 21.327 7.96206C22 8.68113 22 9.74619 22 11.8763C22 12.4168 22 12.6871 21.8492 12.8979C21.8199 12.939 21.7866 12.9778 21.7498 13.0141C21.5999 13.1618 21.3814 13.2412 21 13.3453"
                                                                            stroke="#5B626F" stroke-width="1.5"
                                                                            stroke-linecap="round"></path>
                                                                        <path
                                                                            d="M14 13.5H10C9.72386 13.5 9.5 13.7239 9.5 14V16.1615C9.5 16.3659 9.62448 16.5498 9.8143 16.6257L10.5144 16.9058C11.4681 17.2872 12.5319 17.2872 13.4856 16.9058L14.1857 16.6257C14.3755 16.5498 14.5 16.3659 14.5 16.1615V14C14.5 13.7239 14.2761 13.5 14 13.5Z"
                                                                            stroke="#5B626F" stroke-width="1.5"
                                                                            stroke-linecap="round"></path>
                                                                    </g>
                                                                </svg>
                                                            </div>

                                                            <h3>Particulars of Experience</h3>


                                                        </div>

                                                    </div>

                                                    @if (count($app->experiencedetails) > 0)
                                                        <table class="mt-3">
                                                            <thead>
                                                                <tr>
                                                                    <th>Name of the Company / Organization</th>
                                                                    <th>Post Held</th>
                                                                    <th>Pay Scale
                                                                        <small>in case of PSUs/Govt. Depts</small>
                                                                    </th>
                                                                    <th>CTC (₹) <small>in other cases</small></th>
                                                                    <th>Major Responsibilities</th>
                                                                    <th>Enclosed Documents</th>

                                                                    <th>Action</th>
                                                                </tr>

                                                            </thead>
                                                            <tbody>

                                                                @foreach ($app->experiencedetails as $key => $item)
                                                                    <tr>

                                                                        <td>{{ $item->companyName }}
                                                                            <x-date-label :fromDate="$item->periodFrom->format(
                                                                                'M, Y',
                                                                            )"
                                                                                :toDate="$item->periodTo->format(
                                                                                    'M, Y',
                                                                                )" />
                                                                        </td>
                                                                        <td>{{ $item->postName }}</td>

                                                                        <td>{{ $item->payScale }}</td>
                                                                        <td>
                                                                            @if ($item->ctc)
                                                                                <x-currency-format :amount="$item->ctc" />
                                                                            @endif
                                                                        </td>
                                                                        <td>{{ $item->jobsSummary }}</td>
                                                                        <td>

                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex">
                                                                                <button
                                                                                    class="btn btn-icon btn-danger me-2">
                                                                                    Invalid
                                                                                </button>
                                                                                <button
                                                                                    class="btn btn-icon btn-success me-2">
                                                                                    Valid
                                                                                </button>
                                                                            </div>
                                                                        </td>

                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    @endif
                                                </div>
                                            </x-card>



                                            <x-card>

                                                <div class="d-flex align-items-center">

                                                    <div
                                                        class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                                                        <svg fill="#5B626F" width="30" viewBox="0 0 512 512">
                                                            <g>
                                                                <path
                                                                    d="M392.943,112.864H332.66c-2.808-10.057-6.617-19.767-11.273-28.769h71.557c23.185,0,42.047-18.863,42.047-42.047 S416.129,0,392.944,0H119.056C95.871,0,77.009,18.863,77.009,42.047s18.863,42.047,42.047,42.047h64.51 c22.431,0,43.529,10.96,56.823,28.769H119.056c-23.185,0-42.047,18.863-42.047,42.047c0,23.185,18.863,42.047,42.047,42.047 h121.447c-13.279,17.809-34.419,28.769-56.936,28.769h-64.51c-23.185,0-42.047,18.739-42.047,41.771 c0,11.666,4.714,22.49,13.281,30.523l181.148,200.173c7.937,8.773,19.305,13.806,31.191,13.806 c10.427,0,20.441-3.865,28.198-10.884c8.329-7.535,13.225-17.863,13.786-29.082c0.561-11.221-3.279-21.986-10.818-30.321 L211.667,306.963c44.675-8.307,83.878-36.25,106.933-76.969c2.258-3.988,0.855-9.052-3.133-11.311 c-3.988-2.257-9.052-0.855-11.311,3.133c-23.07,40.742-64.156,67.178-109.909,70.716c-3.158,0.245-5.901,2.264-7.072,5.206 s-0.564,6.294,1.562,8.641l132.753,146.475c4.561,5.041,6.885,11.557,6.545,18.35c-0.34,6.792-3.303,13.043-8.345,17.604 c-4.7,4.252-10.76,6.594-17.062,6.594c-7.204,0-14.087-3.041-18.884-8.343L102.357,286.619c-0.169-0.187-0.346-0.366-0.531-0.537 c-5.3-4.88-8.219-11.48-8.219-18.584c0-13.88,11.417-25.173,25.45-25.173h64.51c33.529,0,64.57-19.664,79.081-50.094 c1.226-2.57,1.047-5.591-0.472-8c-1.52-2.409-4.17-3.869-7.019-3.869h-136.1c-14.033,0-25.45-11.416-25.45-25.45 s11.417-25.45,25.45-25.45h136.002c2.85,0,5.502-1.463,7.021-3.875c1.52-2.412,1.695-5.434,0.465-8.006 c-14.557-30.426-45.558-50.085-78.978-50.085h-64.51c-14.033,0-25.45-11.416-25.45-25.45s11.417-25.45,25.45-25.45h273.887 c14.033,0,25.45,11.416,25.45,25.45s-11.417,25.45-25.45,25.45h-86.046c-3.06,0-5.871,1.683-7.315,4.381 c-1.445,2.698-1.288,5.971,0.407,8.517c8.255,12.398,14.531,27.148,18.151,42.655c0.876,3.755,4.225,6.412,8.082,6.412h66.721 c14.033,0,25.45,11.416,25.45,25.45c0,14.034-11.417,25.45-25.45,25.45h-66.97c-4.583,0-8.299,3.715-8.299,8.299 c0,4.584,3.716,8.299,8.299,8.299h66.97c23.185,0,42.047-18.863,42.047-42.047C434.99,131.726,416.128,112.864,392.943,112.864z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </div>

                                                    <h3>Fee Details</h3>


                                                </div>

                                                <div class="row mt-3 mb-3 g-3 border-bottom pb-3">

                                                    <div class="col-md-3">

                                                        <label for="mode_of_payment" class="form-label">Payment
                                                            Fee</label>

                                                        <input type="text"
                                                            class="form-control  @error('mode_of_payment') is-invalid @enderror"
                                                            id="mode_of_payment" name="mode_of_payment"
                                                            value="₹ 300 /-" disabled>
                                                        @error('mode_of_payment')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="fee_details" class="form-label">Transaction
                                                            ID</label>
                                                        <input type="text"
                                                            class="form-control  @error('fee_details') is-invalid @enderror"
                                                            id="fee_details" name="fee_details"
                                                            placeholder="Trans. ID" value="XXXXAYYDDD999999" disabled
                                                            value="{{ old('fee_details', $paymentdetail->fee_details ?? '') }}">
                                                        @error('fee_details')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>


                                                    <div class="col-md-3">
                                                        <label for="payment_proof" class="form-label">Payment Proof
                                                            <span style="color:red">*</span></label> <br />
                                                        <a href="#">Payment Proof.jpg </a>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="d-flex">
                                                            <button class="btn btn-icon btn-danger me-2">
                                                                Invalid
                                                            </button>
                                                            <button class="btn btn-icon btn-success me-2">
                                                                Valid
                                                            </button>
                                                        </div>

                                                    </div>


                                                </div>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                                                        <svg viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg" width="30">
                                                            <g>
                                                                <path
                                                                    d="M2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12V10.5M13.5 2H12C7.28595 2 4.92893 2 3.46447 3.46447C2.49073 4.43821 2.16444 5.80655 2.0551 8"
                                                                    stroke="#5B626F" stroke-width="1.5"
                                                                    stroke-linecap="round"></path>
                                                                <path
                                                                    d="M16.652 3.45506L17.3009 2.80624C18.3759 1.73125 20.1188 1.73125 21.1938 2.80624C22.2687 3.88124 22.2687 5.62415 21.1938 6.69914L20.5449 7.34795M16.652 3.45506C16.652 3.45506 16.7331 4.83379 17.9497 6.05032C19.1662 7.26685 20.5449 7.34795 20.5449 7.34795M16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9M20.5449 7.34795L17.5625 10.3304M14.5801 13.3128C14.1761 13.7168 13.9741 13.9188 13.7513 14.0926C13.4886 14.2975 13.2043 14.4732 12.9035 14.6166C12.6485 14.7381 12.3775 14.8284 11.8354 15.0091L10.1 15.5876M10.1 15.5876L8.97709 15.9619C8.71035 16.0508 8.41626 15.9814 8.21744 15.7826C8.01862 15.5837 7.9492 15.2897 8.03811 15.0229L8.41242 13.9M10.1 15.5876L8.41242 13.9"
                                                                    stroke="#5B626F" stroke-width="1.5"
                                                                    stroke-linecap="round"></path>
                                                            </g>
                                                        </svg>
                                                    </div>

                                                    <h3>Declaration</h3>

                                                </div>



                                                <p class="text-justify">I, the undersigned, certify that to the best of
                                                    my knowledge and belief, this
                                                    CV correctly describes myself, my qualifications, and my experience.
                                                    I understand that any wilful
                                                    misstatement described herein may lead to my disqualification or
                                                    dismissal, if engaged.

                                                </p>




                                                <div class="row mb-3">
                                                    <div class="col-md-4">
                                                        <label for="" class="form-label">Date</label> <br>
                                                        <span class="fw-bold">
                                                            {{ $app->declaration_date ? $app->declaration_date->format('d/m/Y') : '' }}</span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" class="form-label ">Place</label> <br />
                                                        <span class="fw-bold">{{ $app->place ?? '' }}
                                                        </span>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <img src="{{ url('storage/public/' . $app->signature_path) }}"
                                                            alt="" width="75">
                                                    </div>
                                                </div>
                                            </x-card>



                                            {{-- <div>
                                                <div class="d-flex justify-content-between gap-5">


                                                    <div class="row g-3 border-bottom py-3 row-cols-4">
                                                        <div class="arn-label">
                                                            Application Reference Number <br />
                                                            <b> {{ $app->arn }}</b>
                                                        </div>
                                                        <div class="arn-label">
                                                            Unit/Location <br />
                                                            <b>{{ $app->jobPostings->locationunit->unit_name }} |
                                                                {{ $app->jobPostings->locationunit->address }}</b>
                                                        </div>

                                                        <div class="arn-label">
                                                            Job Posting Advt. No <br />
                                                            <b>{{ $app->jobPostings->jobAdvertismentNo }}</b>
                                                        </div>



                                                        <div class="arn-label">
                                                            Job Posting Advt. Date <br />
                                                            <b>{{ $app->jobPostings->jobPostingDate->format('d, M/Y') }}</b>
                                                        </div>
                                                        <div class="arn-label">
                                                            Application For <br />
                                                            <b>{{ $app->jobPostings->jobTitle }}</b>
                                                        </div>
                                                        <div class="arn-label">
                                                            Payment Fee<br />
                                                            <b>₹ 300 /-</b>
                                                        </div>
                                                        <div class="arn-label">
                                                            Mode of Payment <br />
                                                            <b>{{ $app->mode_of_payment }}</b>
                                                        </div>

                                                        <div class="arn-label">
                                                            Date of Payment <br />
                                                            <b>{{ $app->fee_details }}</b>
                                                        </div>




                                                    </div>
                                                    <div>
                                                        <div class="passport-photo">
                                                            <img src="" alt="">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="mt-3">
                                                    <div class="row mb-3">
                                                        <div class="col-6 ">Full Name </div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            {{ $app->candidates->fullname }} </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">FATHER's/MOTHER's/HUSBAND's NAME </div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            {{ $app->candidates->personaldetails->fatherName }} </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">GENDER </div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            {{ $app->candidates->personaldetails->gender }} </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">DATE OF BIRTH </div>
                                                        <div class="col-3 fw-bold text-uppercase">
                                                            {{ $app->candidates->personaldetails->dob->format('d/m/Y') }}
                                                        </div>
                                                        <div class="col-3 fw-bold ">
                                                            @php
                                                                $date = Carbon::parse($app->candidates->personaldetails->dob);
                                                                $now = Carbon::parse($app->jobpostings->jobPostingDate);
                                                                
                                                            @endphp
                                                            {{ $date->diffInYears($now) }} Years<small
                                                                class="fw-normal muted">(as on the date
                                                                of Advt.)</small> </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">HIGHEST QUALIFICATION </div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            @if ($app->candidates->postgraduationeducationdetails)
                                                                pg
                                                            @elseif ($app->candidates->graduationeducationdetails)
                                                                ug |
                                                                {{ $app->candidates->graduationeducationdetails->course_name }}
                                                            @elseif ($app->candidates->highersecondaryeducationdetails)
                                                                12th/Higher Secondary
                                                            @elseif ($app->candidates->secondaryeducationdetails)
                                                                10th/Secondary School
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">COMMUNICATION/PERMANENT ADDRESS </div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            {{ $app->candidates->personaldetails->address_line_1 }},
                                                            <br />{{ $app->candidates->personaldetails->address_line_2 }},
                                                            <br />
                                                            {{ $app->candidates->personaldetails->city }} -
                                                            {{ $app->candidates->personaldetails->pin_code }}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">TELEPHONE/MOBILE NO. </div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            {{ $app->candidates->phone_no }}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">AADHAAR NUMBER</div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            {{ $app->candidates->personaldetails->aadhaarNo }}</div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">PAN</div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            {{ $app->candidates->personaldetails->pan }}</div>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <div class="col-6">TOTAL WORK EXPERIECE </div>
                                                        <div class="col-6 fw-bold text-uppercase">
                                                            4 Years
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-6">DATE OF RETIREMENT/ SEPARATION FROM
                                                            THE LAST EMPLOYMENT </div>
                                                        <div class="col-6 fw-bold text-uppercase">07/06/2023</div>
                                                    </div>




                                                </div>

                                                <div>
                                                    <table>





                                                    </table>
                                                </div>

                                                <div id="education">
                                                    <h4>EDUCATION DETAILS</h4>

                                                    <table>
                                                        <tr>
                                                            <th>Sl. No.</th>
                                                            <th>Qualifications from 10th
                                                                Class onwards</th>
                                                            <th colspan="2">Affiliated
                                                                institute/university</th>
                                                            <th>Year of
                                                                passing</th>
                                                            <th>% of marks
                                                                obtained/CGPA</th>



                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>


                                                        </tr>
                                                        <tr>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>


                                                        </tr>
                                                        <tr>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>


                                                        </tr>
                                                        <tr>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>
                                                            <td>a</td>


                                                        </tr>

                                                    </table>
                                                </div>

                                                <div id="experience">
                                                    <h4>EXPERIENCE DETAILS</h4>

                                                    <table>
                                                        <tr>
                                                            <th rowspan="2">Name of the
                                                                Company /
                                                                Organization</th>
                                                            <th rowspan="2">Post Held</th>
                                                            <th colspan="2">Period of Employment</th>
                                                            <th rowspan="2">Pay Scale /
                                                                Level &
                                                                Grade Pay
                                                                in case of
                                                                PSUs/Govt.
                                                                Depts</th>
                                                            <th rowspan="2">CTC
                                                                (In Rs.)
                                                                in
                                                                other cases</th>
                                                            <th rowspan="2">Major
                                                                Responsibilities</th>


                                                        </tr>
                                                        <tr>
                                                            <th>From</th>
                                                            <th>To</th>
                                                        </tr>


                                                    </table>
                                                </div>

                                                <div class="row">
                                                    <p>Additional information if any which you would like to mention in
                                                        support of your
                                                        suitability for the post:
                                                    </p>
                                                    <p style="text-decoration:underline">Declaration:</p>
                                                    <p style="text-indent: 50px;text-align: justify;">I, the
                                                        undersigned, certify that to the
                                                        best of my knowledge
                                                        and belief, this CV correctly describes
                                                        myself, my qualifications, and my experience. I understand that
                                                        any willful misstatement
                                                        describedherein
                                                        may lead to my disqualification or dismissal, if engaged.
                                                    </p>
                                                    <br>



                                                </div>
                                            </div> --}}



                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-app-layout>
