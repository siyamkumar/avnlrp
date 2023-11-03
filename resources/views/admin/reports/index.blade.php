<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Jobs') }}
        </h2>
    </x-slot> --}}
    <!--
  -->



    <div class="container-fluid">

        <div class="row align-middle pt-3 mb-3">
            <div class="col-md-3">
                <h2 class="">
                    {{ __('Reports') }}
                </h2>
            </div>

            <div class="col-md-6 ms-auto text-end">

                <div class="d-inline align-content-center">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary btn-action rounded-3 dropdown-toggle" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <svg viewBox="0 0 24 24" height="18" class="me-3" fill="none"
                                xmlns="http://www.w3.org/2000/svg">


                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985"
                                        stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M7 4V2.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round">
                                    </path>
                                    <path d="M17 4V2.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round">
                                    </path>
                                    <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#000000" stroke-width="1.5"
                                        stroke-linecap="round"></path>
                                    <path
                                        d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z"
                                        fill="#000000"></path>
                                    <path
                                        d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z"
                                        fill="#000000"></path>
                                    <path
                                        d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z"
                                        fill="#000000"></path>
                                    <path
                                        d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z"
                                        fill="#000000"></path>
                                    <path
                                        d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z"
                                        fill="#000000"></path>
                                    <path
                                        d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z"
                                        fill="#000000"></path>
                                </g>
                            </svg> <span class="fw-bold">All Time</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item mb-2" href="#">This Week</a></li>
                            <li><a class="dropdown-item mb-2" href="#">This Month</a></li>
                            <li><a class="dropdown-item mb-2" href="#">This Year</a></li>
                        </ul>
                    </div>

                    <div class="d-inline">

                    </div>
                    <button id="printTable" type="submit"
                        class="btn btn-sm btn-outline-secondary btn-action rounded-3">
                        <x-icons.print /> Print
                    </button>

                </div>


            </div>



        </div>
        <iframe id="print_frame" name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
        <div id="printable-table">
          <table id="table-report" class="table table-bordered table-hover report-table table-responsive">
            <thead>
                <tr class="align-top">
                    <th>#</th>
                    <th>Name</th>
                    <th>Father/Husband Name</th>
                    <th>Gender</th>
                    <th>Reqd. Age</th>
                    <th>Date of Birth</th>
                    <th>Community</th>
                    <th>Qualification</th>
                    <th>Reqd. Exp</th>
                    <th>Experience</th>
                    <th>Communication Address</th>
                    <th>Telephone / Mobile No</th>
                    <th>Email</th>
                    <th>Aadhar NO</th>
                    <th>Post Applied For</th>
                    <th>Fee</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            <tbody>

                @if (count($applications) > 0)

                    @foreach ($applications as $key => $arn)
                        <tr id={{ $key + 1 }} class="align-top">
                            <td>{{ $key + 1 }}</td>


                            <td class="text-nowrap"> {{ $arn->candidates->fullname ?? 'NA' }} </td>
                            <td class="text-nowrap"> {{ $arn->candidates->personaldetails->fatherName ?? '' }} </td>
                            <td class="text-capitalize">{{ $arn->candidates->personaldetails->gender ?? '' }}</td>
                            <td> {{ $arn->jobpostings->agecriteria->minAge ?? '' }} </td>
                            <td class="text-nowrap">
                                {{ $arn->candidates->personaldetails->dob ? $arn->candidates->personaldetails->dob->format('d-m-Y') : '' }}
                            </td>
                            <td class="text-nowrap">
                                {{ $arn->candidates->personaldetails->reservationcategory->name ?? 'NA' }}</td>

                            <td>
                                @if ($arn->candidates->postgraduationeducationdetails)
                                    pg
                                @elseif ($arn->candidates->graduationeducationdetails)
                                    ug |
                                    {{ $arn->candidates->graduationeducationdetails->course_name }}
                                @elseif ($arn->candidates->highersecondaryeducationdetails)
                                    12th/Higher Secondary
                                @elseif ($arn->candidates->secondaryeducationdetails)
                                    10th/Secondary School
                                @endif
                            </td>
                            <td>{{ $arn->jobpostings->experiencecriteria->minExp ?? '' }}</td>
                            <td> @php
                                $expyears = 0;
                                foreach ($arn->experiencedetails as $ex) {
                                    $date = Carbon::parse($ex->periodFrom);
                                    $now = Carbon::parse($ex->periodTo);
                                    $expyears += $date->diffInDays($now);
                                }
                                $totalexperience = round($expyears / 365, 1);
                            @endphp
                                {{ $totalexperience ?? '' }} <span class="fw-normal text-capitalize">years</span></td>
                            <td class="text-nowrap"> {{ $arn->candidates->personaldetails->address_line_1 }},<br />
                                {{ $arn->candidates->personaldetails->address_line_2 }},<br />
                                {{ $arn->candidates->personaldetails->city }} -
                                {{ $arn->candidates->personaldetails->pin_code }},
                            </td>

                            <td>{{ $arn->candidates->phone_no }}</td>
                            <td>{{ $arn->candidates->email }}</td>
                            <td>{{ $arn->candidates->personaldetails->aadhaarNo ?? '' }}</td>
                            <td>{{ $arn->jobpostings->jobTitle ?? '' }}</td>
                            <td class="text-nowrap">
                                @if ($arn->candidates->personaldetails->gender == 'female')
                                    NA
                                @elseif(in_array($arn->candidates->personaldetails->reservationcategory->code, ['SC', 'ST']))
                                    NA
                                @else
                                    ₹ 300 /-
                                @endif
                            </td>
                            <td>
                                {{ $arn->shortlist_remarks }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        </div>
      
    </div>

    <script></script>
</x-app-layout>
