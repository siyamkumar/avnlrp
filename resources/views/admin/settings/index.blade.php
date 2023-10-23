<x-app-layout>
    <div class="container pt-3">
        <div class="row row-cols-lg-6">

            <div class="col">
                <a href="{{ route('reservationcategory.index') }}" class="text-decoration-none">
                    <x-card class="border-0 " style="box-shadow: 0 0.15rem 0.1rem rgba(0, 0, 0, 0.04);">
                        <div class="d-flex align-items-center">
                            <div class="p-3 me-3" style="background-color:#ECF8FE">
                                <svg viewBox="0 0 24 24" fill="none" width ="30">
                                    <g>
                                        <path
                                            d="M13 20V18C13 15.2386 10.7614 13 8 13C5.23858 13 3 15.2386 3 18V20H13ZM13 20H21V19C21 16.0545 18.7614 14 16 14C14.5867 14 13.3103 14.6255 12.4009 15.6311M11 7C11 8.65685 9.65685 10 8 10C6.34315 10 5 8.65685 5 7C5 5.34315 6.34315 4 8 4C9.65685 4 11 5.34315 11 7ZM18 9C18 10.1046 17.1046 11 16 11C14.8954 11 14 10.1046 14 9C14 7.89543 14.8954 7 16 7C17.1046 7 18 7.89543 18 9Z"
                                            stroke="#49B6F5" stroke-width="1" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h5 class="fs-20 mb-0 fw-bold">Reservation Category</h5>


                            </div>
                        </div>
                    </x-card>
                </a>
            </div>



            <div class="col">
                <a href="{{ route('locationunit.index') }}" class="text-decoration-none">
                    <x-card class="border-0 " style="box-shadow: 0 0.15rem 0.1rem rgba(0, 0, 0, 0.04);">

                        <div class="d-flex align-items-center">
                            <div class="p-3 me-3" style="background-color:#E7F9F9">
                                <svg viewBox="0 -5.5 64 64" height="30" fill="#12C2C2">
                                    <g>                                        
                                        <g stroke-width="1" fill="none"
                                            fill-rule="evenodd" sketch:type="MSPage">
                                            <g id="Factory" sketch:type="MSLayerGroup"
                                                transform="translate(1.000000, 1.000000)" stroke="#12C2C2"
                                                stroke-width="2">
                                                <path
                                                    d="M60,20 L56,20 L56,0 L47,0 L47,27.5 L34,20.6 L34,27.5 L22,20.6 L22,27.5 L11,20.6 L11,27.5 L2,20.6 C0.9,20.6 0,21.5 0,22.6 L0,48.1 C0,49.2 0.9,50.1 2,50.1 L60,50.1 C61.1,50.1 62,49.2 62,48.1 L62,22.1 C62,20.9 61.1,20 60,20 L60,20 Z"
                                                    id="Shape" sketch:type="MSShapeGroup"> </path>
                                                <rect id="Rectangle-path" sketch:type="MSShapeGroup" x="4" y="32"
                                                    width="4" height="4"> </rect>
                                                <rect id="Rectangle-path" sketch:type="MSShapeGroup" x="14" y="32"
                                                    width="4" height="4"> </rect>
                                                <rect id="Rectangle-path" sketch:type="MSShapeGroup" x="25" y="32"
                                                    width="4" height="4"> </rect>
                                                <rect id="Rectangle-path" sketch:type="MSShapeGroup" x="37" y="32"
                                                    width="4" height="4"> </rect>
                                                <path d="M0,46.1 L62,46.1" id="Shape" sketch:type="MSShapeGroup">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h5 class="fs-20 mb-0 fw-bold">AVNL Units</h5>


                            </div>
                        </div>

                        
                    </x-card>
                </a>
            </div>
        </div>


    </div>

</x-app-layout>
