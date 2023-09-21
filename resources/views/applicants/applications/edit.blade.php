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

                    <svg viewBox="0 0 24 24" fill="none" width="20" class="me-2">
                        <g>
                            <path d="M9 10H6" stroke="#5B626F" stroke-width="1" stroke-linecap="round"></path>
                            <path d="M19 14L5 14" stroke="#5B626F" stroke-width="1" stroke-linecap="round"></path>
                            <circle cx="17" cy="10" r="1" fill="#5B626F"></circle>
                            <path d="M15 16.5H9" stroke="#5B626F" stroke-width="1" stroke-linecap="round"></path>
                            <path d="M13 19H9" stroke="#5B626F" stroke-width="1" stroke-linecap="round"></path>
                            <path
                                d="M22 12C22 14.8284 22 16.2426 21.1213 17.1213C20.48 17.7626 19.5535 17.9359 18 17.9827M6 17.9827C4.44655 17.9359 3.51998 17.7626 2.87868 17.1213C2 16.2426 2 14.8284 2 12C2 9.17157 2 7.75736 2.87868 6.87868C3.75736 6 5.17157 6 8 6H16C18.8284 6 20.2426 6 21.1213 6.87868C21.4211 7.17848 21.6186 7.54062 21.7487 8"
                                stroke="#5B626F" stroke-width="1" stroke-linecap="round"></path>
                            <path
                                d="M17.9827 6C17.9359 4.44655 17.7626 3.51998 17.1213 2.87868C16.2426 2 14.8284 2 12 2C9.17157 2 7.75736 2 6.87868 2.87868C6.23738 3.51998 6.06413 4.44655 6.01732 6M18 15V16C18 18.8284 18 20.2426 17.1213 21.1213C16.48 21.7626 15.5535 21.9359 14 21.9827M6 15V16C6 18.8284 6 20.2426 6.87868 21.1213C7.51998 21.7626 8.44655 21.9359 10 21.9827"
                                stroke="#5B626F" stroke-width="1" stroke-linecap="round"></path>
                        </g>
                    </svg>

                    Print </button>
                <button type="submit" class="btn btn-sm btn-outline-secondary btn-action rounded-3">

                    <svg viewBox="0 0 24 24" fill="none" width="20" class="me-2">
                        <g stroke-width="0"></g>
                        <g stroke-linecap="round" stroke-linejoin="round"></g>
                        <g>
                            <path d="M12 3V16M12 16L16 11.625M12 16L8 11.625" stroke="#5B626F" stroke-width="1"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path
                                d="M15 21H9C6.17157 21 4.75736 21 3.87868 20.1213C3 19.2426 3 17.8284 3 15M21 15C21 17.8284 21 19.2426 20.1213 20.1213C19.8215 20.4211 19.4594 20.6186 19 20.7487"
                                stroke="#5B626F" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>Download</button>
            </div>
        @endif

    </x-slot>


    <div class="container px-0" id="application">


        <x-card>
            <div class="d-flex align-items-center mb-3">
                <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M18.18 8.03933L18.6435 7.57589C19.4113 6.80804 20.6563 6.80804 21.4241 7.57589C22.192 8.34374 22.192 9.58868 21.4241 10.3565L20.9607 10.82M18.18 8.03933C18.18 8.03933 18.238 9.02414 19.1069 9.89309C19.9759 10.762 20.9607 10.82 20.9607 10.82M18.18 8.03933L13.9194 12.2999C13.6308 12.5885 13.4865 12.7328 13.3624 12.8919C13.2161 13.0796 13.0906 13.2827 12.9882 13.4975C12.9014 13.6797 12.8368 13.8732 12.7078 14.2604L12.2946 15.5L12.1609 15.901M20.9607 10.82L16.7001 15.0806C16.4115 15.3692 16.2672 15.5135 16.1081 15.6376C15.9204 15.7839 15.7173 15.9094 15.5025 16.0118C15.3203 16.0986 15.1268 16.1632 14.7396 16.2922L13.5 16.7054L13.099 16.8391M13.099 16.8391L12.6979 16.9728C12.5074 17.0363 12.2973 16.9867 12.1553 16.8447C12.0133 16.7027 11.9637 16.4926 12.0272 16.3021L12.1609 15.901M13.099 16.8391L12.1609 15.901"
                                stroke="#5B626F" stroke-width="1.5"></path>
                            <path d="M8 13H10.5" stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M8 9H14.5" stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M8 17H9.5" stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M3 14V10C3 6.22876 3 4.34315 4.17157 3.17157C5.34315 2 7.22876 2 11 2H13C16.7712 2 18.6569 2 19.8284 3.17157M21 14C21 17.7712 21 19.6569 19.8284 20.8284M4.17157 20.8284C5.34315 22 7.22876 22 11 22H13C16.7712 22 18.6569 22 19.8284 20.8284M19.8284 20.8284C20.7715 19.8853 20.9554 18.4796 20.9913 16"
                                stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                </div>

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
                <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <circle cx="12" cy="6" r="4" stroke="#5B626F"
                                stroke-width="1.5">
                            </circle>
                            <path
                                d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634"
                                stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                </div>

                <h3>Personal Details</h3>
                <div class="ms-3"> <x-required-label />
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                    <div class="row mb-3">
                        <div class="col-5 ">Full Name</div>
                        <div class="col-6 fw-bold text-uppercase"> {{ $jobapplication->candidates->fullname }} </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Father's/Mother's/Husband's NAME </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $jobapplication->candidates->personaldetails->fatherName }} </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Gender </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $jobapplication->candidates->personaldetails->gender }} </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-5">Category </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $jobapplication->candidates->personaldetails->reservationcategory->code }} |
                            {{ $jobapplication->candidates->personaldetails->reservationcategory->name }} </div>
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
                            {{ $jobapplication->candidates->personaldetails->pan }}</div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-5">TOTAL WORK EXPERIECE </div>
                        <div class="col-6 fw-bold text-uppercase">
                            4 Years
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
                        <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                width="30">

                                <g>
                                    <path
                                        d="M3.0918 6.63659L9.78291 3.49965C11.2039 2.83345 12.7964 2.83345 14.2174 3.49965L20.9086 6.63664C22.3641 7.31899 22.3641 9.68105 20.9086 10.3634L14.2175 13.5003C12.7965 14.1665 11.204 14.1665 9.783 13.5003L5.00019 11.2581"
                                        stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path
                                        d="M2.5 15V12.1376C2.5 10.8584 2.5 10.2188 2.83032 9.71781C3.16064 9.21687 3.74853 8.96492 4.92432 8.461L6 8"
                                        stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round">
                                    </path>
                                    <path
                                        d="M19 11.5V16.6254C19 17.6334 18.4965 18.5772 17.6147 19.0656C16.1463 19.8787 13.796 21 12 21C10.204 21 7.8537 19.8787 6.38533 19.0656C5.5035 18.5772 5 17.6334 5 16.6254V11.5"
                                        stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                                </g>
                            </svg>
                        </div>

                        <h3>Education Qualification</h3>
                        <div class="ms-3"> <x-required-label />
                        </div>
                    </div>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle rounded-3 btn-dropdown"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Add Addtl. Qualification
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Add Under Graduate</a></li>
                                <li><a class="dropdown-item" href="#">Add Post Graduate</a></li>
                                <li><a class="dropdown-item" href="#">Add Ph.D. </a></li>
                            </ul>
                        </div>

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
                            @if (!$jobapplication->isSubmitted)
                                <th>Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>

                        @if (in_array('10th', $jobapplication->jobpostings->educationcriteria->min_qualification))
                            @if ($jobapplication->secondaryeducationdetails)
                                <tr>
                                    <td>
                                        10th/Secondary
                                    </td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->score }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->year_of_passing }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->school_name }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->school_board }}</td>
                                    <td>
                                        <a href="{{ url('storage/public/' . $jobapplication->secondaryeducationdetails->marksheet_path ?? '') }}""
                                            target="_blank">{{ $jobapplication->secondaryeducationdetails->file_name }}</a>

                                    </td>
                                    <td>
                                        @if (!$jobapplication->isSubmitted)
                                            <a
                                                href="{{ route('jobapplication.secondaryeducationdetails.edit', [$jobapplication, $jobapplication->secondaryeducationdetails]) }}">Edit</a>
                                        @endif
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>10th/Secondary *</td>
                                    <td colspan="4">
                                        <a href="{{ route('jobapplication.secondaryeducationdetails.create') }}">Add
                                            Secondary
                                            Education</a>
                                    </td>
                                </tr>
                            @endif
                        @endif

                        @if (in_array('12th', $jobapplication->jobpostings->educationcriteria->min_qualification))

                            @if ($jobapplication->highersecondaryeducationdetails)
                                <tr>
                                    <td>
                                        12th/x Secondary
                                    </td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->score }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->year_of_passing }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->school_name }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->school_board }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->marksheet_path }}</td>
                                    <td></td>
                                </tr>
                            @else
                                <tr>
                                    <td>12th/Secondary*</td>
                                    <td colspan="6">
                                        <a
                                            href="{{ route('jobapplication.secondaryeducationdetails.create', $jobapplication) }}">Add
                                            Secondary Education</a>
                                    </td>
                                </tr>
                            @endif
                        @endif

                        @if (in_array('UG', $jobapplication->jobpostings->educationcriteria->min_qualification))
                            @if ($jobapplication->highersecondaryeducationdetails)
                                <tr>
                                    <td>
                                        UG
                                    </td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->score }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->year_of_passing }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->school_name }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->school_board }}</td>
                                    <td>{{ $jobapplication->secondaryeducationdetails->marksheet_path }}</td>
                                    <td></td>
                                </tr>
                            @else
                                <tr>
                                    <td>UG*</td>
                                    <td colspan="6">
                                        <a
                                            href="{{ route('jobapplication.graduationeducationdetails.create', $jobapplication) }}">Add
                                            UG Education</a>
                                    </td>
                                </tr>
                            @endif
                        @endif

                        @if (in_array('PG', $jobapplication->jobpostings->educationcriteria->min_qualification))
                            @if ($jobapplication->postgraduationeducationdetails)
                                <tr>
                                    <td>
                                        UG
                                    </td>
                                    <td>{{ $jobapplication->postgraduationeducationdetails->score }}</td>
                                    <td>{{ $jobapplication->postgraduationeducationdetails->year_of_passing }}</td>
                                    <td>{{ $jobapplication->postgraduationeducationdetails->school_name }}</td>
                                    <td>{{ $jobapplication->postgraduationeducationdetails->school_board }}</td>
                                    <td>{{ $jobapplication->postgraduationeducationdetails->marksheet_path }}</td>
                                    <td></td>
                                </tr>
                            @else
                                <tr>
                                    <td>UG*</td>
                                    <td colspan="6">
                                        <a
                                            href="{{ route('jobapplication.secondaryeducationdetails.create', $jobapplication) }}">Add
                                            UG Education</a>
                                    </td>
                                </tr>
                            @endif
                        @endif


                    </tbody>
                </table>

            </div>
        </x-card>





        <x-card>


            <div class="">

                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                width="30">
                                <g>
                                    <path
                                        d="M9.1709 4C9.58273 2.83481 10.694 2 12.0002 2C13.3064 2 14.4177 2.83481 14.8295 4"
                                        stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path
                                        d="M12 22.25C11.5858 22.25 11.25 22.5858 11.25 23C11.25 23.4142 11.5858 23.75 12 23.75V22.25ZM4.31802 21.8284L4.81629 21.2679L4.31802 21.8284ZM19.682 21.8284L19.1837 21.2679L19.682 21.8284ZM7.95476 23.6837C8.36822 23.7087 8.72365 23.3938 8.74863 22.9804C8.77362 22.5669 8.4587 22.2115 8.04524 22.1865L7.95476 23.6837ZM2.25 13C2.25 14.8741 2.24918 16.8307 2.41875 18.4664C2.50368 19.2856 2.63401 20.0548 2.84074 20.7105C3.04411 21.3557 3.3444 21.9665 3.81975 22.389L4.81629 21.2679C4.63262 21.1046 4.43867 20.7904 4.27134 20.2596C4.10738 19.7394 3.99058 19.0818 3.91075 18.3118C3.75082 16.769 3.75 14.8971 3.75 13H2.25ZM12 23.75C14.1024 23.75 15.7464 23.7513 17.0267 23.5983C18.3204 23.4436 19.3568 23.1209 20.1803 22.389L19.1837 21.2679C18.6891 21.7075 18.0058 21.9706 16.8487 22.1089C15.6782 22.2487 14.1402 22.25 12 22.25V23.75ZM8.04524 22.1865C6.33099 22.0829 5.4315 21.8147 4.81629 21.2679L3.81975 22.389C4.83576 23.2921 6.18271 23.5767 7.95476 23.6837L8.04524 22.1865ZM20.2499 13.3873C20.2492 15.2185 20.2371 17.0032 20.0724 18.4673C19.9902 19.1982 19.8728 19.8201 19.7119 20.3117C19.548 20.8126 19.3605 21.1108 19.1837 21.2679L20.1803 22.389C20.6399 21.9804 20.9352 21.3963 21.1375 20.7783C21.3428 20.1509 21.4751 19.4171 21.563 18.635C21.7387 17.0731 21.7492 15.2032 21.7499 13.3879L20.2499 13.3873Z"
                                        fill="#5B626F"></path>
                                    <path
                                        d="M14.6603 15L17.664 14.2166M9.33968 15L3.3324 13.4332C2.7369 13.2779 2.43915 13.2002 2.25021 13.0141C2.21341 12.9778 2.18015 12.939 2.15078 12.8979C2 12.6871 2 12.4168 2 11.8763C2 9.74619 2 8.68113 2.67298 7.96206C2.80233 7.82385 2.94763 7.69753 3.10659 7.58508C3.9337 7 5.15877 7 7.60893 7H16.3911C18.8412 7 20.0663 7 20.8934 7.58508C21.0524 7.69753 21.1977 7.82385 21.327 7.96206C22 8.68113 22 9.74619 22 11.8763C22 12.4168 22 12.6871 21.8492 12.8979C21.8199 12.939 21.7866 12.9778 21.7498 13.0141C21.5999 13.1618 21.3814 13.2412 21 13.3453"
                                        stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path
                                        d="M14 13.5H10C9.72386 13.5 9.5 13.7239 9.5 14V16.1615C9.5 16.3659 9.62448 16.5498 9.8143 16.6257L10.5144 16.9058C11.4681 17.2872 12.5319 17.2872 13.4856 16.9058L14.1857 16.6257C14.3755 16.5498 14.5 16.3659 14.5 16.1615V14C14.5 13.7239 14.2761 13.5 14 13.5Z"
                                        stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                                </g>
                            </svg>
                        </div>

                        <h3>Particulars of Experience</h3>

                        <div class="ms-3"> <x-required-label />
                        </div>
                    </div>
                    <a href="{{ route('jobapplication.experiencedetails.create', $jobapplication) }}"
                        class="btn btn-outline-secondary dropdown-toggle rounded-3 btn-action" aria-expanded="false">
                        Add Experience
                    </a>
                </div>

                <table class="table">
                    <tr>
                        <th>Name of the <br />Company / Organization</th>
                        <th>Post Held</th>
                        <th>Pay Scale <br>
                            <small>in case of PSUs/Govt. Depts</small>
                        </th>
                        <th>CTC (₹) <br> <small>in other cases</small></th>
                        <th>Major Responsibilities</th>
                        <th>View</th>

                        @if (!$jobapplication->isSubmitted)
                            <th>Action</th>
                        @endif
                    </tr>

                    @foreach ($jobapplication->experiencedetails as $key => $item)
                        <tr>

                            <td>{{ $item->companyName }}
                                <x-date-label :fromDate="$item->periodFrom->format('M, Y')" :toDate="$item->periodTo->format('M, Y')" />
                            </td>
                            <td>{{ $item->postName }}</td>

                            <td>{{ $item->payScale }}</td>
                            <td><x-currency-format :amount="$item->ctc" /></td>
                            <td>{{ $item->jobsSummary }}</td>
                            <td></td>
                            {{-- <td><a href="{{ route('jobapplication.experiencedetails.show', [$jobapplication, $item->id]) }}"
                                    data-bs-toggle="modal" data-bs-target="#modalexp">
                                    {{ $item->experience_path }}</a> --}}
                            {{-- </td> --}}
                            <td><x-icons.edit
                                    href="{{ route('jobapplication.experiencedetails.edit', [$jobapplication, $item->id]) }}" />
                            </td>
                        </tr>
                    @endforeach

                </table>
                <div>
                    <a href="">Add
                        Experience</a>
                </div>
            </div>
        </x-card>

        <form>
            <x-card>

                <div class="d-flex align-items-center">
                    <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                        <svg fill="#5B626F" width="30" viewBox="0 0 512 512">
                            <g>
                                <path
                                    d="M392.943,112.864H332.66c-2.808-10.057-6.617-19.767-11.273-28.769h71.557c23.185,0,42.047-18.863,42.047-42.047 S416.129,0,392.944,0H119.056C95.871,0,77.009,18.863,77.009,42.047s18.863,42.047,42.047,42.047h64.51 c22.431,0,43.529,10.96,56.823,28.769H119.056c-23.185,0-42.047,18.863-42.047,42.047c0,23.185,18.863,42.047,42.047,42.047 h121.447c-13.279,17.809-34.419,28.769-56.936,28.769h-64.51c-23.185,0-42.047,18.739-42.047,41.771 c0,11.666,4.714,22.49,13.281,30.523l181.148,200.173c7.937,8.773,19.305,13.806,31.191,13.806 c10.427,0,20.441-3.865,28.198-10.884c8.329-7.535,13.225-17.863,13.786-29.082c0.561-11.221-3.279-21.986-10.818-30.321 L211.667,306.963c44.675-8.307,83.878-36.25,106.933-76.969c2.258-3.988,0.855-9.052-3.133-11.311 c-3.988-2.257-9.052-0.855-11.311,3.133c-23.07,40.742-64.156,67.178-109.909,70.716c-3.158,0.245-5.901,2.264-7.072,5.206 s-0.564,6.294,1.562,8.641l132.753,146.475c4.561,5.041,6.885,11.557,6.545,18.35c-0.34,6.792-3.303,13.043-8.345,17.604 c-4.7,4.252-10.76,6.594-17.062,6.594c-7.204,0-14.087-3.041-18.884-8.343L102.357,286.619c-0.169-0.187-0.346-0.366-0.531-0.537 c-5.3-4.88-8.219-11.48-8.219-18.584c0-13.88,11.417-25.173,25.45-25.173h64.51c33.529,0,64.57-19.664,79.081-50.094 c1.226-2.57,1.047-5.591-0.472-8c-1.52-2.409-4.17-3.869-7.019-3.869h-136.1c-14.033,0-25.45-11.416-25.45-25.45 s11.417-25.45,25.45-25.45h136.002c2.85,0,5.502-1.463,7.021-3.875c1.52-2.412,1.695-5.434,0.465-8.006 c-14.557-30.426-45.558-50.085-78.978-50.085h-64.51c-14.033,0-25.45-11.416-25.45-25.45s11.417-25.45,25.45-25.45h273.887 c14.033,0,25.45,11.416,25.45,25.45s-11.417,25.45-25.45,25.45h-86.046c-3.06,0-5.871,1.683-7.315,4.381 c-1.445,2.698-1.288,5.971,0.407,8.517c8.255,12.398,14.531,27.148,18.151,42.655c0.876,3.755,4.225,6.412,8.082,6.412h66.721 c14.033,0,25.45,11.416,25.45,25.45c0,14.034-11.417,25.45-25.45,25.45h-66.97c-4.583,0-8.299,3.715-8.299,8.299 c0,4.584,3.716,8.299,8.299,8.299h66.97c23.185,0,42.047-18.863,42.047-42.047C434.99,131.726,416.128,112.864,392.943,112.864z">
                                </path>
                            </g>
                        </svg>
                    </div>

                    <h3>Fee Details</h3>
                    <div class="ms-3"> <x-required-label /> </div>
                </div>

                <div class="row mt-3 mb-3 g-3 border-bottom pb-3">

                    <div class="col-md-4">
                        <label for="mode_of_payment" class="form-label">Payment Fee</label>


                        <input type="text" class="form-control  @error('mode_of_payment') is-invalid @enderror"
                            id="mode_of_payment" name="mode_of_payment" value="₹ 300 /-" disabled>
                        @error('mode_of_payment')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="fee_details" class="form-label">Transaction ID</label>
                        <input type="text" class="form-control  @error('fee_details') is-invalid @enderror"
                            id="fee_details" name="fee_details" placeholder="Trans. ID"
                            value="{{ old('fee_details', $paymentdetail->fee_details ?? '') }}">
                        @error('fee_details')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="col-md-4">
                        <label for="payment_proof" class="form-label">Payment Proof <span
                                style="color:red">*</span></label>
                        <input type="file" name="payment_proof" class="filepond" />

                        @error('payment_proof')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>          

                <div class="d-flex align-items-center">
                    <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30">
                            <g>
                                <path
                                    d="M2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12V10.5M13.5 2H12C7.28595 2 4.92893 2 3.46447 3.46447C2.49073 4.43821 2.16444 5.80655 2.0551 8"
                                    stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                                <path
                                    d="M16.652 3.45506L17.3009 2.80624C18.3759 1.73125 20.1188 1.73125 21.1938 2.80624C22.2687 3.88124 22.2687 5.62415 21.1938 6.69914L20.5449 7.34795M16.652 3.45506C16.652 3.45506 16.7331 4.83379 17.9497 6.05032C19.1662 7.26685 20.5449 7.34795 20.5449 7.34795M16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9M20.5449 7.34795L17.5625 10.3304M14.5801 13.3128C14.1761 13.7168 13.9741 13.9188 13.7513 14.0926C13.4886 14.2975 13.2043 14.4732 12.9035 14.6166C12.6485 14.7381 12.3775 14.8284 11.8354 15.0091L10.1 15.5876M10.1 15.5876L8.97709 15.9619C8.71035 16.0508 8.41626 15.9814 8.21744 15.7826C8.01862 15.5837 7.9492 15.2897 8.03811 15.0229L8.41242 13.9M10.1 15.5876L8.41242 13.9"
                                    stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </div>

                    <h3>Declaration</h3>
                    <div class="ms-3"> <x-required-label /> </div>
                </div>



                <p class="text-justify">I, the undersigned, certify that to the best of my knowledge and belief, this
                    CV
                    correctly describes myself, my qualifications, and my experience. I understand that any wilful
                    misstatement described herein may lead to my disqualification or dismissal, if engaged.

                </p>

               


                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="" class="form-label">Date</label>
                            <input type="date" class="form-control"/>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Place</label>
                            <input type="text" class="form-control"  />
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">Signature</label>
                            <input type="file" class="form-control" />
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary rounded-3 text-center">Submit Application</button>

                

            </x-card>
        </form>
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

    {{-- @foreach ($jobapplications as $key => $ja)
            <tr>
                <td>{{ $ja->arn }} </td>    
                <td>{{ $ja->jobpostings->jobTitle}}</td>
                <td>{{ $ja->status }} </td>
                <td>
                    <a href="{{route('jobapplication.edit', $ja)}}">Edit</a>
                </td>
                <td>Submit</td>
            </tr>
        @endforeach --}}



</x-candidate-layout>
