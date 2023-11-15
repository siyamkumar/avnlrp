<x-card class="">
    <div class="">
        <div class="d-flex align-items-center justify-content-between">
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
            <div>

                @if (!$jobapplication->isSubmitted)
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle rounded-3 btn-dropdown" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Add Addtl. Qualification
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="{{ route('jobapplication.graduationeducationdetails.create', $jobapplication) }}">Add
                                    Under Graduate</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('jobapplication.postgraduationeducationdetails.create', $jobapplication) }}">Add
                                    Post Graduate</a></li>
                            {{-- <li><a class="dropdown-item" href="#">Add Ph.D. </a></li> --}}
                        </ul>
                    </div>
                @endif

            </div>


        </div>

        <table class="w-100 mt-3">
            <thead>
                <tr>
                    <th>Qualifications</th>
                    <th>Marks/CGPA</th>
                    <th>Year</th>
                    <th>School/College</th>
                    <th>Affiliated Institute/University</th>
                    <th>Enclosed Document</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                @if ($jobapplication->secondaryeducationdetails)
                    <tr>
                        <td>10th/Secondary</td>
                        <td>{{ $jobapplication->secondaryeducationdetails->score }}</td>
                        <td>{{ $jobapplication->secondaryeducationdetails->year_of_passing }}</td>
                        <td>{{ $jobapplication->secondaryeducationdetails->school_name }}</td>
                        <td>{{ $jobapplication->secondaryeducationdetails->school_board }}</td>
                        <td>
                            <a href="{{ url('storage/' . $jobapplication->secondaryeducationdetails->marksheet_path ?? '') }}""
                                target="_blank">{{ $jobapplication->secondaryeducationdetails->file_name }}</a>


                        </td>
                        <td>
                            @if (!$jobapplication->isSubmitted)
                                <a
                                    href="{{ route('jobapplication.secondaryeducationdetails.edit', [$jobapplication, $jobapplication->secondaryeducationdetails]) }}">Edit</a>
                            @endif
                        </td>
                    @else
                    <tr>
                        <td>10th/Secondary<x-icons.required-field/></td>
                        <td colspan="">
                            <a href="{{ route('jobapplication.secondaryeducationdetails.create', $jobapplication) }}">Add
                                Secondary
                                Education</a>
                        </td>
                    </tr>
                @endif

                @if ($jobapplication->highersecondaryeducationdetails)
                    <tr>
                        <td>
                            12th/Higher Secondary
                        </td>
                        <td>{{ $jobapplication->highersecondaryeducationdetails->score }}</td>
                        <td>{{ $jobapplication->highersecondaryeducationdetails->year_of_passing }}
                        </td>
                        <td>{{ $jobapplication->highersecondaryeducationdetails->school_name }}</td>
                        <td>{{ $jobapplication->highersecondaryeducationdetails->school_board }}</td>
                        <td>
                            <a href="{{ url('storage/' . $jobapplication->highersecondaryeducationdetails->marksheet_path ?? '') }}"
                                target="_blank">{{ $jobapplication->highersecondaryeducationdetails->file_name }}</a>

                        </td>
                        <td>
                            @if (!$jobapplication->isSubmitted)
                                <a
                                    href="{{ route('jobapplication.highersecondaryeducationdetails.edit', [$jobapplication, $jobapplication->highersecondaryeducationdetails]) }}">Edit</a>
                            @endif
                        </td>
                    </tr>
                @else
                    <tr>
                        <td>12th/Secondary<x-icons.required-field/></td>
                        <td colspan="6">
                            <a
                                href="{{ route('jobapplication.highersecondaryeducationdetails.create', $jobapplication) }}">Add
                                Higher Secondary Education</a>
                        </td>
                    </tr>
                @endif


                @if ($jobapplication->graduationeducationdetails)
                    @if (count($jobapplication->graduationeducationdetails) > 0)
                        @foreach ($jobapplication->graduationeducationdetails as $ged)
                            <tr>
                                <td>UG - {{ $ged->course_name }}</td>
                                <td>{{ $ged->score }}</td>
                                <td>{{ $ged->year_of_passing }}</td>
                                <td>{{ $ged->college_name }}</td>
                                <td>{{ $ged->university_name }}</td>
                                <td>
                                    <a href="{{ url('storage/' . $ged->marksheet_path ?? '') }}"
                                        target="_blank">{{ $ged->file_name ?? '' }}</a>

                                </td>
                                <td>
                                    @if (!$jobapplication->isSubmitted)
                                        <a
                                            href="{{ route('jobapplication.graduationeducationdetails.edit', [$jobapplication, $ged]) }}">Edit</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endif


                @if ($jobapplication->postgraduationeducationdetails)
                    @if (count($jobapplication->postgraduationeducationdetails) > 0)
                        @foreach ($jobapplication->postgraduationeducationdetails as $ged)
                            <tr>
                                <td>PG - {{ $ged->course_name }}</td>
                                <td>{{ $ged->score }}</td>
                                <td>{{ $ged->year_of_passing }}</td>
                                <td>{{ $ged->college_name }}</td>
                                <td>{{ $ged->university_name }}</td>
                                <td>
                                    <a href="{{ url('storage/' . $ged->marksheet_path ?? '') }}"
                                        target="_blank">{{ $ged->file_name ?? '' }}</a>

                                </td>
                                <td>
                                    @if (!$jobapplication->isSubmitted)
                                        <a
                                            href="{{ route('jobapplication.postgraduationeducationdetails.edit', [$jobapplication, $ged]) }}">Edit</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                @endif

                @if ($jobapplication->jobpostings->educationcriteria)

                    @if (in_array('UG', $jobapplication->jobpostings->educationcriteria->min_qualification))
                        @if ($jobapplication->graduationeducationdetails)
                            @if (count($jobapplication->graduationeducationdetails) <= 0)
                                <tr>
                                    <td>UG<x-icons.required-field/></td>
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
                                @if (count($jobapplication->postgraduationeducationdetails) <= 0)
                                    <tr>
                                        <td>PG<x-icons.required-field/></td>
                                        <td colspan="6">
                                            <a
                                                href="{{ route('jobapplication.postgraduationeducationdetails.create', $jobapplication) }}">Add
                                                UG Education</a>
                                        </td>
                                    </tr>
                                @endif
                            @endif
                        @endif
                    @endif




                @endif



            </tbody>
        </table>
    </div>
</x-card>
