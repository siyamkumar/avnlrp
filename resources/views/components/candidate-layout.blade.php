<x-guest-layout>

    @if (session('message'))
        <x-toast :message="session('message')" :status="session('status')" />
    @endif

    <div class="container mt-5 mb-3 application-container">


        <div class="row pt-3 ">
            <div class="col-md-3">
                <div class="position-sticky" style="top: 12vh;">

                    <x-card>

                        <div class="bg-white d-flex align-items-center">
                            <div class="me-3">


                                @if (auth()->guard('applicants')->user()->personaldetails)
                                    <img class="rounded-circle"
                                        src="{{ url('storage/public/photo/' .auth()->guard('applicants')->user()->personaldetails->photo_path ??'') }} "
                                        width="75" height="75">
                                @endif


                            </div>
                            <div>
                                <h5 class="">{{ auth()->guard('applicants')->user()->fullname ?? '' }}</h5>
                                <small class="text-muted">{{ auth()->guard('applicants')->user()->email ?? '' }}
                                </small>
                            </div>


                        </div>
                    </x-card>

                    <ul class="list-group">

                        <li class="list-group-item nav-item mb-3 border rounded-0">
                            <a href="{{ route('personaldetails.index') }}" class="nav-link d-flex align-items-center">


                                <svg viewBox="0 0 24 24" fill="#66789C" xmlns="http://www.w3.org/2000/svg"
                                    width="24" class="me-2">

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

                        <li class="list-group-item nav-item mb-3 border">
                            <a href="{{ route('jobapplication.index') }}" class="nav-link d-flex align-items-center">

                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    width="20" class="me-2">

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M22 10.5V12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2H13.5"
                                            stroke="#66789C" stroke-width="1" stroke-linecap="round"></path>
                                        <path
                                            d="M16.652 3.45506L17.3009 2.80624C18.3759 1.73125 20.1188 1.73125 21.1938 2.80624C22.2687 3.88124 22.2687 5.62415 21.1938 6.69914L20.5449 7.34795M16.652 3.45506C16.652 3.45506 16.7331 4.83379 17.9497 6.05032C19.1662 7.26685 20.5449 7.34795 20.5449 7.34795M16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9M20.5449 7.34795L14.5801 13.3128C14.1761 13.7168 13.9741 13.9188 13.7513 14.0926C13.4886 14.2975 13.2043 14.4732 12.9035 14.6166C12.6485 14.7381 12.3775 14.8284 11.8354 15.0091L10.1 15.5876M10.1 15.5876L8.97709 15.9619C8.71035 16.0508 8.41626 15.9814 8.21744 15.7826C8.01862 15.5837 7.9492 15.2897 8.03811 15.0229L8.41242 13.9M10.1 15.5876L8.41242 13.9"
                                            stroke="#66789C" stroke-width="1"></path>
                                    </g>
                                </svg>





                                My Job Applications
                            </a>
                        </li>


                        {{-- <li class="list-group-item nav-item mb-3 border">
                            <a href="{{ route('educationdetails') }}" class="nav-link d-flex align-items-center">

                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    width="26" class="me-2">

                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M3.0918 6.63659L9.78291 3.49965C11.2039 2.83345 12.7964 2.83345 14.2174 3.49965L20.9086 6.63664C22.3641 7.31899 22.3641 9.68105 20.9086 10.3634L14.2175 13.5003C12.7965 14.1665 11.204 14.1665 9.783 13.5003L5.00019 11.2581"
                                            stroke="#66789C" stroke-width="1" stroke-linecap="round"></path>
                                        <path
                                            d="M2.5 15V12.1376C2.5 10.8584 2.5 10.2188 2.83032 9.71781C3.16064 9.21687 3.74853 8.96492 4.92432 8.461L6 8"
                                            stroke="#66789C" stroke-width="1" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path
                                            d="M19 11.5V16.6254C19 17.6334 18.4965 18.5772 17.6147 19.0656C16.1463 19.8787 13.796 21 12 21C10.204 21 7.8537 19.8787 6.38533 19.0656C5.5035 18.5772 5 17.6334 5 16.6254V11.5"
                                            stroke="#66789C" stroke-width="1" stroke-linecap="round"></path>
                                    </g>
                                </svg>

                                My Academia
                            </a>
                        </li> --}}

                        {{-- <li class="list-group-item  nav-item mb-3 border rounded-0">
                            <a href="{{ route('experiencedetails.index') }}" class="nav-link d-flex align-items-center">

                                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64"
                                    enable-background="new 0 0 64 64" xml:space="preserve" fill="#66789C" width="20"
                                    class="me-3">


                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M60,13H48V4c0-2.211-1.789-4-4-4H20c-2.211,0-4,1.789-4,4v9H4c-2.211,0-4,1.789-4,4v43c0,2.211,1.789,4,4,4 h56c2.211,0,4-1.789,4-4V17C64,14.789,62.211,13,60,13z M18,4c0-1.104,0.896-2,2-2h24c1.104,0,2,0.896,2,2v9h-2V5 c0-0.553-0.447-1-1-1H21c-0.553,0-1,0.447-1,1v8h-2V4z M42,6v7H22V6H42z M62,60c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2V42h10v5 c0,0.553,0.447,1,1,1h6c0.553,0,1-0.447,1-1v-5h24v5c0,0.553,0.447,1,1,1h6c0.553,0,1-0.447,1-1v-5h10V60z M14,46V36h4v10H14z M46,46V36h4v10H46z M62,40H52v-5c0-0.553-0.447-1-1-1h-6c-0.553,0-1,0.447-1,1v5H20v-5c0-0.553-0.447-1-1-1h-6 c-0.553,0-1,0.447-1,1v5H2V17c0-1.104,0.896-2,2-2h56c1.104,0,2,0.896,2,2V40z">
                                        </path>
                                    </g>
                                </svg>


                                My Experience</a>


                        </li>
 --}}







                    </ul>
                    <div class="p-3">
                        <a class="text-danger" href="/candidate-profile#">Delete Account</a>
                    </div>






                </div>


            </div>
            <div class="col-md-9">


                @if (isset($candidateheader))
                    <div class="d-flex justify-content-between pt-3 mb-3 w-100 align-items-center">

                        {{ $candidateheader }}


                    </div>
                @endif



              
                    {{ $slot }}
              


            </div>



        </div>
    </div>




</x-guest-layout>
