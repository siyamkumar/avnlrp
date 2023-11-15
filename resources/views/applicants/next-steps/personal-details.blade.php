<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">{{ __('Profile Details') }}</h2>
    </x-slot>


    @if ($personaldetail !== '')

        @if (count(auth()->guard('applicants')->user()->jobapplications) > 0)
            <div class="row">
                <div class="col-md-6">
                    <x-card class="rounded-0 border-0 ">
                        <h3 class="profile-heading"> Personal Details </h3>

                        <div class="row mt-5 px-3">
                            <div class="col-md-6 mb-3">

                                <div class="">Father's Name </div>
                                <div class="fw-bold">
                                    {{ $personaldetail->fatherName }}
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="">Gender</div>
                                <div class="fw-bold">{{ ucfirst($personaldetail->gender) }}

                                    @if ($personaldetail->gender == 'male')
                                        <svg viewBox="0 0 20 20" width="12" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title>male [#02A3FE]</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs> </defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Dribbble-Light-Preview"
                                                        transform="translate(-60.000000, -2079.000000)" fill="#02A3FE">
                                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                                            <path
                                                                d="M11,1937.005 C8.243,1937.005 6,1934.762 6,1932.005 C6,1929.248 8.243,1927.005 11,1927.005 C13.757,1927.005 16,1929.248 16,1932.005 C16,1934.762 13.757,1937.005 11,1937.005 L11,1937.005 Z M16,1919 L16,1921 L20.586,1921 L15.186,1926.402 C14.018,1925.527 12.572,1925.004 11,1925.004 C7.134,1925.004 4,1928.138 4,1932.004 C4,1935.87 7.134,1939.005 11,1939.005 C14.866,1939.005 18,1935.871 18,1932.005 C18,1930.433 17.475,1928.987 16.601,1927.818 L22,1922.419 L22,1927 L24,1927 L24,1919 L16,1919 Z"
                                                                id="male-[#02A3FE]"> </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    @else
                                        <svg viewBox="-3 0 20 20" width="12" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" fill="#EC49A6">
                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                stroke-linejoin="round">
                                            </g>
                                            <g id="SVGRepo_iconCarrier">
                                                <title>female [#EC49A6]</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs> </defs>
                                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                                    fill-rule="evenodd">
                                                    <g id="Dribbble-Light-Preview"
                                                        transform="translate(-103.000000, -2079.000000)" fill="#EC49A6">
                                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                                            <path
                                                                d="M54.010058,1930.97067 C52.6753909,1930.97067 51.421643,1930.45194 50.4775859,1929.51025 C47.3327267,1926.36895 49.5904718,1920.99511 54.010058,1920.99511 C58.4266471,1920.99511 60.6903863,1926.36595 57.5425301,1929.51025 C56.5984729,1930.45194 55.344725,1930.97067 54.010058,1930.97067 M58.9411333,1930.92079 C63.3617184,1926.50661 60.1768991,1919 54.007061,1919 C47.8512088,1919 44.6294265,1926.50661 49.0510106,1930.92079 C50.1609021,1932.02908 51.9840813,1932.67949 52.9830836,1932.88598 L52.9830836,1935.00978 L49.9860767,1935.00978 L49.9860767,1937.00489 L52.9830836,1937.00489 L52.9830836,1939 L54.9810882,1939 L54.9810882,1937.00489 L57.9780951,1937.00489 L57.9780951,1935.00978 L54.9810882,1935.00978 L54.9810882,1932.88598 C56.9790928,1932.67949 57.8302427,1932.02908 58.9411333,1930.92079"
                                                                id="female-[#EC49A6]"> </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">

                                <div class="">Date of Birth</div>
                                <div class="fw-bold">
                                    {{ $personaldetail->dob->format('d/M/Y') }}
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">

                                <div class="">Category</div>
                                <div>

                                    <span class="fw-bold">
                                        {{ $personaldetail->reservationcategory->code }}
                                    </span>
                                    <small class="text-muted">{{ $personaldetail->reservationcategory->name }}</small>
                                </div>

                            </div>


                        </div>




                    </x-card>

                </div>


                <div class="col-md-6">
                    <x-card class="rounded-0 border-0">
                        <h3 class="profile-heading"> Identification Details</h3>

                        <div class="row mt-5 px-3">
                            <div class="col-md-12 mb-3">

                                <div class="">Aadhaar No </div>
                                <div class="fw-bold">
                                    @php

                                        $splitedA = str_split($personaldetail->aadhaarNo, 4);

                                    @endphp
                                    @foreach ($splitedA as $k => $s)
                                        {{ $s }}@if ($k != array_key_last($splitedA))
                                            -
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="">PAN</div>
                                <div class="fw-bold">{{ $personaldetail->pan }}

                                </div>
                            </div>




                        </div>
                    </x-card>

                </div>

                <div class="col-md-12">
                    <x-card class="rounded-0 border-0">
                        <h3 class="profile-heading mb-3"> Contact Details </h3>

                        <div class="row mt-5 px-3">

                            <div class="col-md-12 mb-3">
                                <div class="">Email </div>
                                <div class="fw-bold">
                                    {{ $personaldetail->candidate->email }}
                                </div>
                            </div>

                        

                        <div class="col-md-12 mb-3">


                            <div class="">Phone </div>
                            <div class="fw-bold">
                                {{ $personaldetail->candidate->phone_no }}
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">


                            <div class="">Address </div>
                            <div class="fw-bold">
                                {{ $personaldetail->address_line_1 }} <br>
                                {{ $personaldetail->address_line_2 }}<br>
                                {{ $personaldetail->city }} - {{ $personaldetail->pin_code }}
                                {{ $personaldetail->regionstate->state_name }}


                            </div>
                        </div>



                    </x-card>

                </div>

            </div>
        @else
            @include('applicants.next-steps.partials.personal-details.edit')
        @endif
    @else
        @include('applicants.next-steps.partials.personal-details.create')
    @endif




</x-candidate-layout>
