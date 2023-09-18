<x-app-layout>

    @include('admin.candidates.candidates-menu')

    <div class="container">
        <div class="d-flex align-items-center justify-content-between mt-3 mb-3 w-100">
            <div>
                <h2 class="">
                    {{ __('Application') }} <small class="text-muted fw-light"> #{{ $arn->arn }} </small>
                </h2>
            </div>

            <div>
                <button class="btn btn-danger me-2">Reject Application</button>
                <button class="btn btn-success">Shortlist Application</button>
            </div>

        </div>
        <div class="mt-3 pb-3">
            <div id="page" class="page" data-size="A4">
                <div class="d-flex justify-content-between gap-5">


                    <div class="row g-3 border-bottom py-3 row-cols-4">
                        <div class="arn-label">
                            Application Reference Number <br />
                            <b> {{ $arn->arn }}</b>
                        </div>
                        <div class="arn-label">
                            Unit/Location <br />
                            <b>{{ $arn->jobPostings->locationunit->unit_name }} |
                                {{ $arn->jobPostings->locationunit->address }}</b>
                        </div>

                        <div class="arn-label">
                            Job Posting Advt. No <br />
                            <b>{{ $arn->jobPostings->jobAdvertismentNo }}</b>
                        </div>



                        <div class="arn-label">
                            Job Posting Advt. Date <br />
                            <b>{{ $arn->jobPostings->jobPostingDate->format('d, M/Y') }}</b>
                        </div>
                        <div class="arn-label">
                            Application For <br />
                            <b>{{ $arn->jobPostings->jobTitle }}</b>
                        </div>
                        <div class="arn-label">
                            Payment Fee<br />
                            <b>₹ 300 /-</b>
                        </div>
                        <div class="arn-label">
                            Mode of Payment <br />
                            <b>{{ $arn->mode_of_payment }}</b>
                        </div>

                        <div class="arn-label">
                            Date of Payment <br />
                            <b>{{ $arn->fee_details }}</b>
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
                        <div class="col-6 fw-bold text-uppercase"> {{ $arn->candidates->fullname }} </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">FATHER's/MOTHER's/HUSBAND's NAME </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $arn->candidates->personaldetails->fatherName }} </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">GENDER </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $arn->candidates->personaldetails->gender }} </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">DATE OF BIRTH </div>
                        <div class="col-3 fw-bold text-uppercase">
                            {{ $arn->candidates->personaldetails->dob->format('d/m/Y') }} </div>
                        <div class="col-3 fw-bold ">
                            @php
                                $date = Carbon::parse($arn->candidates->personaldetails->dob);
                                $now = Carbon::parse($arn->jobpostings->jobPostingDate);
                                
                            @endphp
                            {{ $date->diffInYears($now) }} Years<small class="fw-normal muted">(as on the date
                                of Advt.)</small> </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">HIGHEST QUALIFICATION </div>
                        <div class="col-6 fw-bold text-uppercase">
                            @if ($arn->candidates->postgraduationeducationdetails)
                                pg
                            @elseif ($arn->candidates->graduationeducationdetails)
                                ug | {{ $arn->candidates->graduationeducationdetails->course_name }}
                            @elseif ($arn->candidates->highersecondaryeducationdetails)
                                12th/Higher Secondary
                            @elseif ($arn->candidates->secondaryeducationdetails)
                                10th/Secondary School
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">COMMUNICATION/PERMANENT ADDRESS </div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $arn->candidates->personaldetails->address_line_1 }},
                            <br />{{ $arn->candidates->personaldetails->address_line_2 }}, <br />
                            {{ $arn->candidates->personaldetails->city }} -
                            {{ $arn->candidates->personaldetails->pin_code }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">TELEPHONE/MOBILE NO. </div>
                        <div class="col-6 fw-bold text-uppercase">{{ $arn->candidates->phone_no }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">AADHAAR NUMBER</div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $arn->candidates->personaldetails->aadhaarNo }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">PAN</div>
                        <div class="col-6 fw-bold text-uppercase">
                            {{ $arn->candidates->personaldetails->pan }}</div>
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
                                (In Rs.) in
                                other cases</th>
                            <th rowspan="2">Major
                                Responsibilities</th>


                        </tr>
                        <tr>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>a</td>
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
                            <td>a</td>
                            <td>a</td>

                        </tr>
                        <tr>
                            <td>a</td>
                            <td>a</td>
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
                            <td>a</td>
                            <td>a</td>

                        </tr>

                    </table>
                </div>

                <div class="row">
                    <p>Additional information if any which you would like to mention in support of your
                        suitability for the post:
                    </p>
                    <p style="text-decoration:underline">Declaration:</p>
                    <p style="text-indent: 50px;text-align: justify;">I, the undersigned, certify that to the
                        best of my knowledge
                        and belief, this CV correctly describes
                        myself, my qualifications, and my experience. I understand that any willful misstatement
                        describedherein
                        may lead to my disqualification or dismissal, if engaged.
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
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">



                </div>
            </div>



        </div>
    </div>
</x-app-layout>
