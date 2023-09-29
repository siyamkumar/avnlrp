<x-app-layout>

    @include('admin.candidates.candidates-menu')
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="card shadow-sm border-0 mb-3">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>#</th>
                            <th>ARN</th>
                            <th>Job Applied For</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Actions</th>

                        </thead>
                        <tbody>

                            @foreach ($applications as $key => $app)
                                <tr>
                                    <td> {{ $key + 1 }}</td>
                                    <td> {{ $app->arn }}</td>
                                    <td> {{ $app->jobpostings->jobTitle ?? '' }} </td>
                                    <td> {{ $app->candidates->fullname ?? '' }} </td>
                                    <td> {{ $app->candidates->personaldetails->gender ?? '' }}</td>
                                    <td>
                                        {{-- 
                                        @php
                                            $date = Carbon::parse($app->candidates->personaldetails->dob);
                                            $now = Carbon::parse($app->jobpostings->jobPostingDate);
                                            
                                        @endphp
                                        {{ $date->diffInYears($now) }} --}}
                                    </td>
                                    <td>
                                        {{-- {{ $app->candidates->personaldetails->category }} --}}
                                    </td>
                                    <td>
                                        <small
                                            class="d-inline-flex px-2 py-1 fw-semibold text-bg-light bg-light bg-opacity-10 border border-success border-opacity-10 rounded-2">
                                            {{ $app->status }}
                                        </small>
                                    </td>

                                    <td>
                                        <x-icons.verify href="{{ route('arn.show', $app) }} " />
                                    </td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                                <td>1</td>
                                <td>AVNL041023240001</td>

                                <td>Assistant Company Secretary</td>
                                <td>Random Name</td>

                                <td>Male</td>
                                <td>35</td>
                                <td>General</td>
                                <td>

                                    <small
                                        class="d-inline-flex px-2 py-1 fw-semibold text-bg-light bg-light bg-opacity-10 border border-success border-opacity-10 rounded-2">To
                                        be Screened</small>




                                </td>

                                <td>
                                    <x-icons.verify href="" />


                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>AVNL041023240002</td>

                                <td>Assistant Company Secretary</td>
                                <td>Random Name</td>

                                <td>Male</td>
                                <td>35</td>
                                <td>General</td>

                                <td>


                                    <small
                                        class="d-inline-flex px-2 py-1 fw-semibold text-warning bg-warning bg-opacity-10 border border-success border-opacity-10 rounded-2">On
                                        hold</small>






                                </td>

                                <td>
                                    <x-icons.verify href="" />

                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>AVNL041023240002</td>

                                <td>Assistant Company Secretary</td>
                                <td>Random Name</td>

                                <td>Male</td>
                                <td>35</td>
                                <td>General</td>

                                <td>




                                    <small
                                        class="d-inline-flex px-2 py-1 fw-semibold text-danger bg-danger bg-opacity-10 border border-success border-opacity-10 rounded-2">Rejected</small>



                                </td>

                                <td>
                                    <x-icons.view href="" />

                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>AVNL041023240003</td>

                                <td>Assistant Company Secretary</td>
                                <td>Random Name</td>

                                <td>Male</td>
                                <td>35</td>
                                <td>General</td>
                                <td>



                                    <small
                                        class="d-inline-flex px-2 py-1 fw-semibold text-success bg-success bg-opacity-10 border border-success border-opacity-10 rounded-2">Shortlisted</small>


                                </td>

                                <td>
                                    <x-icons.view href="" />

                                </td>
                            </tr> --}}

                        </tbody>
                    </table>
                </div>
            </div>


            {{ $applications->links() }}

        </div>
    </div>

    <div class="container">
        <div class="row g-0">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav flex-column">

                            @foreach ($applications as $key => $app)
                            <li class="nav-item text-center" role="presentation">
                               
                                <a class="nav-link pt-0" id="{{$key}}" data-bs-toggle="tab" href="#{{$app->arn}}"
                                    role="tab" aria-controls="tab-home" aria-selected="true">
                                    <div class="">
                                        {{$app->arn}}
                                    </div>
                                    
                                </a>
                            </li>
                            @endforeach
                     
        
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card" style="    height: 100%;
                padding-bottom: 1rem;
                overflow-y: auto;">
                    <div class="card-body">
                    
                       
        
                        <div class="tab-content">
                            @foreach ($applications as $key => $app)
                            <div class="tab-pane fade" id="{{$app->arn}}">
                                <div class="container">
                                    <div class="d-flex align-items-center justify-content-between mt-3 mb-3 w-100">
                                        <div>
                                            <h2 class="">
                                                {{ __('Application') }} <small class="text-muted fw-light"> #{{ $app->arn }} </small>
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
                                                    <div class="col-6 fw-bold text-uppercase"> {{ $app->candidates->fullname }} </div>
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
                                                        {{ $app->candidates->personaldetails->dob->format('d/m/Y') }} </div>
                                                    <div class="col-3 fw-bold ">
                                                        @php
                                                            $date = Carbon::parse($app->candidates->personaldetails->dob);
                                                            $now = Carbon::parse($app->jobpostings->jobPostingDate);
                                                            
                                                        @endphp
                                                        {{ $date->diffInYears($now) }} Years<small class="fw-normal muted">(as on the date
                                                            of Advt.)</small> </div>
                                                </div>
                            
                                                <div class="row mb-3">
                                                    <div class="col-6">HIGHEST QUALIFICATION </div>
                                                    <div class="col-6 fw-bold text-uppercase">
                                                        @if ($app->candidates->postgraduationeducationdetails)
                                                            pg
                                                        @elseif ($app->candidates->graduationeducationdetails)
                                                            ug | {{ $app->candidates->graduationeducationdetails->course_name }}
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
                                                        <br />{{ $app->candidates->personaldetails->address_line_2 }}, <br />
                                                        {{ $app->candidates->personaldetails->city }} -
                                                        {{ $app->candidates->personaldetails->pin_code }}
                                                    </div>
                                                </div>
                            
                                                <div class="row mb-3">
                                                    <div class="col-6">TELEPHONE/MOBILE NO. </div>
                                                    <div class="col-6 fw-bold text-uppercase">{{ $app->candidates->phone_no }}
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
                                                            (In Rs.) in
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
                                                
                                                
                                                
                                            </div>
                                        </div>
                                        
                            
                            
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
