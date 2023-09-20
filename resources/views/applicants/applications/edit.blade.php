<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('ARN') }} | {{ $jobapplication->arn }}
        </h2>






    </x-slot>


    <div class="container" id="page">





        <div class="row g-3 border-bottom py-3 row-cols-4">
            <div class="arn-label">
                <div class="arn-label">Application Reference Number </div>
                <div class="fw-bold"> {{ $jobapplication->arn }}</div>
            </div>


            <div class="arn-label">
                Job Posting Advt. No <br />
                <b>{{ $jobapplication->jobPostings->jobAdvertismentNo }}</b>
            </div>



            <div class="arn-label">
                Job Posting Advt. Date <br />
                <b>{{ $jobapplication->jobPostings->jobPostingDate->format('d, M/Y') }}</b>
            </div>

            <div class="arn-label">
                Application For <br />
                <b>{{ $jobapplication->jobPostings->jobTitle }}</b>
            </div>
        </div>



        <div class="mt-3 border-bottom">
            <div class="row">
                <div class="col-10">
                    <div class="row mb-3">
                        <div class="col-5 ">FULL NAME </div>
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









        </div>

        <div class="mt-3">
            <h3>Education Qualification</h3>

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
                            <td>{{ $jobapplication->secondaryeducationdetails->marksheet_path }}</td>
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
                                <a href="{{ route('jobapplication.secondaryeducationdetails.create') }}">Add Secondary
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
                                    href="{{ route('jobapplication.secondaryeducationdetails.create', $jobapplication) }}">Add
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













        </div>
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
