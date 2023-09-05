<x-guest-layout>
    <div class="container mt-5 mb-3 application-container">

        <div class="row pt-3">
            @if (isset($candidateheader))
                <header class="">
                    <div class="">
                        {{ $candidateheader }}
                    </div>
                </header>
            @endif

        </div>

        <div class="row pt-3 ">
            <div class="col-md-3">
                <div class="position-sticky" style="top: 12vh;">



                    <ul class="card-body list-group">

                        <li class="list-group-item nav-item py-3">
                            <a href="" class="nav-link d-flex align-items-center">


                                <svg viewBox="0 0 24 24" fill="#66789C" xmlns="http://www.w3.org/2000/svg"
                                    width="24" class="me-3">

                                    <g id="SVGRepo_iconCarrier">
                                        <g clip-path="url(#clip0_15_82)">
                                            <rect width="24" height="24" fill="white"></rect>
                                            <g filter="url(#filter0_d_15_82)">
                                                <path
                                                    d="M14.3365 12.3466L14.0765 11.9195C13.9082 12.022 13.8158 12.2137 13.8405 12.4092C13.8651 12.6046 14.0022 12.7674 14.1907 12.8249L14.3365 12.3466ZM9.6634 12.3466L9.80923 12.8249C9.99769 12.7674 10.1348 12.6046 10.1595 12.4092C10.1841 12.2137 10.0917 12.022 9.92339 11.9195L9.6634 12.3466ZM4.06161 19.002L3.56544 18.9402L4.06161 19.002ZM19.9383 19.002L20.4345 18.9402L19.9383 19.002ZM16 8.5C16 9.94799 15.2309 11.2168 14.0765 11.9195L14.5965 12.7737C16.0365 11.8971 17 10.3113 17 8.5H16ZM12 4.5C14.2091 4.5 16 6.29086 16 8.5H17C17 5.73858 14.7614 3.5 12 3.5V4.5ZM7.99996 8.5C7.99996 6.29086 9.79082 4.5 12 4.5V3.5C9.23854 3.5 6.99996 5.73858 6.99996 8.5H7.99996ZM9.92339 11.9195C8.76904 11.2168 7.99996 9.948 7.99996 8.5H6.99996C6.99996 10.3113 7.96342 11.8971 9.40342 12.7737L9.92339 11.9195ZM9.51758 11.8683C6.36083 12.8309 3.98356 15.5804 3.56544 18.9402L4.55778 19.0637C4.92638 16.1018 7.02381 13.6742 9.80923 12.8249L9.51758 11.8683ZM3.56544 18.9402C3.45493 19.8282 4.19055 20.5 4.99996 20.5V19.5C4.70481 19.5 4.53188 19.2719 4.55778 19.0637L3.56544 18.9402ZM4.99996 20.5H19V19.5H4.99996V20.5ZM19 20.5C19.8094 20.5 20.545 19.8282 20.4345 18.9402L19.4421 19.0637C19.468 19.2719 19.2951 19.5 19 19.5V20.5ZM20.4345 18.9402C20.0164 15.5804 17.6391 12.8309 14.4823 11.8683L14.1907 12.8249C16.9761 13.6742 19.0735 16.1018 19.4421 19.0637L20.4345 18.9402Z">
                                                </path>
                                            </g>
                                        </g>

                                    </g>
                                </svg>

                                My Profile
                            </a>
                        </li>

                        <li class="list-group-item nav-item py-3">
                            <a href="" class="nav-link d-flex align-items-cente">

                                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"
                                    enable-background="new 0 0 64 64" xml:space="preserve" fill="#66789C" width="24" class="me-3">


                                    <g id="SVGRepo_iconCarrier">
                                        <path 
                                            d="M60,13H48V4c0-2.211-1.789-4-4-4H20c-2.211,0-4,1.789-4,4v9H4c-2.211,0-4,1.789-4,4v43c0,2.211,1.789,4,4,4 h56c2.211,0,4-1.789,4-4V17C64,14.789,62.211,13,60,13z M18,4c0-1.104,0.896-2,2-2h24c1.104,0,2,0.896,2,2v9h-2V5 c0-0.553-0.447-1-1-1H21c-0.553,0-1,0.447-1,1v8h-2V4z M42,6v7H22V6H42z M62,60c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2V42h10v5 c0,0.553,0.447,1,1,1h6c0.553,0,1-0.447,1-1v-5h24v5c0,0.553,0.447,1,1,1h6c0.553,0,1-0.447,1-1v-5h10V60z M14,46V36h4v10H14z M46,46V36h4v10H46z M62,40H52v-5c0-0.553-0.447-1-1-1h-6c-0.553,0-1,0.447-1,1v5H20v-5c0-0.553-0.447-1-1-1h-6 c-0.553,0-1,0.447-1,1v5H2V17c0-1.104,0.896-2,2-2h56c1.104,0,2,0.896,2,2V40z">
                                        </path>
                                    </g>
                                </svg>

                                My Jobs
                            </a>
                        </li>
                        <li class="list-group-item nav-item ">
                            <a href="{{ route('personaldetails.index') }}" class="nav-link active">
                                Personal Details
                            </a>
                        </li>
                        <li class="list-group-item nav-item">

                            <a href="{{ route('educationdetails') }}" class="nav-link">Academic/Education Details</a>



                            {{-- <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="" class="nav-link">10th/Secondary Details</a>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="nav-link">12th/Higher Secondary Details
                                        </a>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="nav-link">ITI/Diploma
                                        Education</a>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="nav-link">Undergraduate  Education 
                                        </a>
                                </li>

                                <li class="nav-item">
                                    <a href="" class="nav-link">Postgraduate Education 
                                        </a>
                                </li>


                            </ul> --}}

                        </li>

                        <li class="list-group-item">
                            <a href="{{ route('experiencedetails.index') }}" class="nav-link active">
                                Experience Details</a>


                        </li>




                    </ul>
                    <div class="p-3">
                        <a class="text-danger" href="/candidate-profile#">Delete Account</a>
                    </div>






                </div>


            </div>
            <div class="col-md-9">
                {{ $slot }}

            </div>



        </div>
    </div>




</x-guest-layout>
