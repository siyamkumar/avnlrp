<x-app-layout>
    <div class="container pt-3">
        <div class="row row-cols-lg-4 row-cols-md-4 ">

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
                                        <g stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
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
            <div class="col">
                <a href="{{ route('user.index') }}" class="text-decoration-none">
                    <x-card class="border-0 " style="box-shadow: 0 0.15rem 0.1rem rgba(0, 0, 0, 0.04);">

                        <div class="d-flex align-items-center">
                            <div class="p-3 me-3" style="background-color:#FEF0ED">
                                <svg fill="#F56F4B" viewBox="0 0 256 256" id="Flat" height="30"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M226.24854,66.53589,218.958,62.32666a19.72781,19.72781,0,0,0,0-12.65332l7.29053-4.20923a4,4,0,0,0-4-6.92822l-7.30494,4.21753A19.98633,19.98633,0,0,0,204,36.40308V28a4,4,0,0,0-8,0v8.40308a19.98633,19.98633,0,0,0-10.9436,6.35034l-7.30494-4.21753a4,4,0,0,0-4,6.92822l7.29053,4.20923a19.72781,19.72781,0,0,0,0,12.65332l-7.29053,4.20923a4,4,0,1,0,4,6.92822l7.30494-4.21753A19.98633,19.98633,0,0,0,196,75.59692V84a4,4,0,0,0,8,0V75.59692a19.98633,19.98633,0,0,0,10.9436-6.35034l7.30494,4.21753a4,4,0,0,0,4-6.92822ZM200,68a12,12,0,1,1,12-12A12.01359,12.01359,0,0,1,200,68Zm22.84424,44.52832a3.99938,3.99938,0,0,0-3.49756,4.4458A93.35573,93.35573,0,0,1,220,128a91.7087,91.7087,0,0,1-26.82861,64.87207,75.61547,75.61547,0,0,0-44.50757-34.04053,44,44,0,1,0-41.32764,0,75.61635,75.61635,0,0,0-44.50757,34.04A91.95438,91.95438,0,0,1,128,36c2.84863,0,5.72217.13159,8.5415.39111a4,4,0,1,0,.7334-7.96631C134.21289,28.14258,131.09229,28,128,28A99.95585,99.95585,0,0,0,60.70972,201.90942a3.98219,3.98219,0,0,0,.84253.75147,99.794,99.794,0,0,0,132.897-.00122,3.974,3.974,0,0,0,.8396-.749A99.76287,99.76287,0,0,0,228,128a101.34533,101.34533,0,0,0-.71-11.97412A4.00339,4.00339,0,0,0,222.84424,112.52832ZM92,120a36,36,0,1,1,36,36A36.04078,36.04078,0,0,1,92,120ZM68.86475,198.417a68.011,68.011,0,0,1,118.27.00025,91.80354,91.80354,0,0,1-118.27-.00025Z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <h5 class="fs-20 mb-0 fw-bold">User Management</h5>


                            </div>
                        </div>


                    </x-card>
                </a>
            </div>


        </div>


    </div>

</x-app-layout>
