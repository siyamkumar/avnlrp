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
</x-app-layout>
