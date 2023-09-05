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




                </div>


            </div>
            <div class="col-md-9">
                {{ $slot }}

            </div>



        </div>
    </div>




</x-guest-layout>
