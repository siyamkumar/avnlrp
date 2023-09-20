<x-candidate-layout>
    <x-slot name="candidateheader">
        <div class="d-flex align-items-center">
            <h2 class="me-3">
                {{ __('ARN') }} | {{ $jobapplication->arn }}
            </h2><x-job-status :status="$jobapplication->status" />
        </div>

        <div>
            <form action="">
                <button type="button" class="btn btn-primary rounded-3">Submit Application</button>
            </form>
        </div>








    </x-slot>


    <div class="container px-0">

        <x-card>
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
            <div class="row">
                <div class="col-10">
                    <div class="row mb-3">
                        <div class="col-5 " style="color:#8B95A2; font-weight:500">Full Name</div>
                        <div class="col-6 fw-bold text-uppercase"> {{ $jobapplication->candidates->fullname }} </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">FATHER's/MOTHER's/HUSBAND's NAME </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $jobapplication->candidates->personaldetails->fatherName }} </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">GENDER </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $jobapplication->candidates->personaldetails->gender }} </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-5">CATEGORY </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $jobapplication->candidates->personaldetails->reservationcategory->code }} |
                            {{ $jobapplication->candidates->personaldetails->reservationcategory->name }} </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-5">DATE OF BIRTH </div>
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
                        <div class="col-5">HIGHEST QUALIFICATION </div>
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
            <div class="mt-3 pb-3 border-bottom">
                <div class="d-flex align-items-center">
                    <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30">

                            <g>
                                <path
                                    d="M3.0918 6.63659L9.78291 3.49965C11.2039 2.83345 12.7964 2.83345 14.2174 3.49965L20.9086 6.63664C22.3641 7.31899 22.3641 9.68105 20.9086 10.3634L14.2175 13.5003C12.7965 14.1665 11.204 14.1665 9.783 13.5003L5.00019 11.2581"
                                    stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                                <path
                                    d="M2.5 15V12.1376C2.5 10.8584 2.5 10.2188 2.83032 9.71781C3.16064 9.21687 3.74853 8.96492 4.92432 8.461L6 8"
                                    stroke="#5B626F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
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



                <table class="table">
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



                </table>
                <div>
                    <b>Add Additional Qualification</b> <a href="">Add UG </a> | <a href="">Add PG </a> |
                    <a href="">Add PhD </a>
                </div>
            </div>
        </x-card>





        <x-card>


            <div class="">

                <div class="d-flex align-items-center">
                    <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30">
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

                <table class="table">
                    <tr>
                        <th>Name of the <br/>Company / Organization</th>
                        <th>Post Held</th>
                        <th>Pay Scale <br>
                            <small>in case of PSUs/Govt. Depts</small>
                        </th>
                        <th>CTC (₹)  <br> <small>in other cases</small></th>
                        <th>Major Responsibilities</th>
                        <th>View</th>

                        @if (!$jobapplication->isSubmitted)
                            <th>Action</th>
                        @endif
                    </tr>

                    @foreach ($jobapplication->experiencedetails as $key => $item)
                        <tr>
                           
                            <td>{{ $item->companyName }}
                                <x-date-label :fromDate="$item->periodFrom->format('M, Y')" :toDate="$item->periodTo->format('M, Y')"/>
                            </td>
                            <td>{{ $item->postName }}</td>
                            
                            <td>{{ $item->payScale }}</td>
                            <td>{{ $item->ctc }}</td>
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
                    <a href="{{ route('jobapplication.experiencedetails.create', $jobapplication) }}">Add
                        Experience</a>
                </div>
            </div>
        </x-card><x-card>
            <div class="arn-label">
                Payment Fee<br />
                <b>₹ 300 /-</b>
            </div>
            <div class="arn-label">
                Mode of Payment <br />
                <b>{{ $jobapplication->mode_of_payment }}</b>
            </div>

            <div class="">
                Date of Payment <br />
                <b>{{ $jobapplication->fee_details }}</b>
            </div>

        </x-card>

        <div class="row">

            <p style="text-decoration:underline">Declaration:</p>
            <p class="text-justify">I, the undersigned, certify that to the best of my knowledge and belief, this CV
                correctly describes myself, my qualifications, and my experience. I understand that any wilful
                misstatement described herein may lead to my disqualification or dismissal, if engaged.

            </p>
            <br>
            <p style="text-align: right;"> Signature of the candidate</p>
            <p>Date:</p>
            <p>Place:</p>
            <div class="center1">
                <script>
                    function printForm() {

                        var printContents = document.getElementById("page").innerHTML;
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
                <button type="submit" class="button button4 noPrint" onclick="printForm()">
                    PRINT </button>
                <button type="submit" class="button button5 noPrint"> DOWNLOAD </button>
            </div>
        </div>
    </div>




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
