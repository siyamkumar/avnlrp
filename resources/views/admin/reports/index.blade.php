<x-app-layout>


@include('admin.reports.menu')

    <div class="container-fluid">

        <div class="row align-middle pt-3 mb-3">
            <div class="col-md-3">
                <h2 class="">
                    {{ __('Reports') }}
                </h2>

                <span class="muted">Showing results from</span> <b>{{ $fromDate ? $fromDate->format('d/M/Y') : '' }}
                </b>
                - <b>{{ $endDate ? $endDate->format('d/M/Y') : '' }}</b>
            </div>





        </div>
        <iframe id="print_frame" name="print_frame" width="0" height="0" frameborder="0"
            src="about:blank"></iframe>
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
                                <td class="text-nowrap"> {{ $arn->candidates->personaldetails->fatherName ?? '' }}
                                </td>
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
                                    {{ $totalexperience ?? '' }} <span class="fw-normal text-capitalize">years</span>
                                </td>
                                <td class="text-nowrap">
                                    {{ $arn->candidates->personaldetails->address_line_1 }},<br />
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


</x-app-layout>
