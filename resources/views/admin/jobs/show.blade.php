<x-app-layout>
    <div class="container">
        <div class="row pt-3 ">
            <div class="col-auto me-auto">
                <small>Job Details</small>
                <h2>{{ $jobposting->jobTitle }}</h2>
                <small class="text-body-secondary">{{ $jobposting->jobAdvertismentNo }}</small> <x-job-status
                    :status="$jobposting->status" />
            </div>



            <div class="col-auto align-self-end">
                <button type="submit" class="btn btn-primary "> Announce Examination </button>
            </div>
        </div>


        <div class="row mt-2">
            <div class="col-md-3">
                <div class="position-sticky" style="top: 10vh;">
                    <ul class="card-body list-group">
                        <li class="list-group-item">
                            <small>Job Posting Date</small>
                            <h6> {{ $jobposting->jobPostingDate->format('d/M/Y') }} </h6>
                        </li>
                        <li class="list-group-item"> <small>Last Date for Application</small>
                            <h6> {{ $jobposting->jobPostingLastDate->format('d/M/Y') }} </h6>
                        </li>

                        <li class="list-group-item"> <small>Unit & Location</small>
                            <h6> {{ $jobposting->locationunit->unit_code }} </h6>

                        </li>

                        <li class="list-group-item">
                            <small>Vacancy</small>
                            <h6> {{ $jobposting->vacancy }} </h6>
                        </li>
                        <li class="list-group-item"> <small>Tenure</small>
                            <h6> {{ $jobposting->tenure }} Year(s)</h6>
                        </li>
                        <li class="list-group-item"><small>Renumeration</small>

                            <h6> <x-currency-format :amount="$jobposting->renumeration" /></h6>
                        </li>
                    </ul>
                </div>


            </div>
            <div class="col-md-9">

                <div class="row row-cols-3 mb-3">
                    <div class="col">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h1>{{ count($jobposting->arns) }}</h1>
                                Applications
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h1>2k</h1>
                                Viewed this Job
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <h1>10</h1>
                                Shortlisted Applications
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col-xxl-6">
                        <div id="barChart" style="width: 100%;min-height:300px;"></div>
                        <script type="module">
                            var myChart = echarts.init(document.getElementById('barChart'));
                            var option = {
                                tooltip: {},
                                legend: {
                                    data: ['Applications']
                                },
                                tooltip: {
                                    trigger: 'axis',
                                    axisPointer: {
                                        type: 'shadow'
                                    }
                                },
                                grid: {
                                    left: '3%',
                                    right: '4%',
                                    bottom: '3%',
                                    containLabel: true
                                },
                                xAxis: {},
                                yAxis: {
                                    type: 'category',
                                    data: ['TN', 'PB', 'KA', 'MP', 'RJ', 'TR']
                                },
                                series: [{
                                    name: '2011',
                                    type: 'bar',
                                    data: [182, 234, 290, 104, 131, 630]
                                }]
                            };


                            myChart.setOption(option);
                        </script>
                    </div>
                </div>


                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                        <h6 class="border-bottom pb-3">Recent Applications</h6>
                        <table class="table table-hover mb-4" id="example5" role="grid">
                            <thead>
                                <tr role="row">
                                    {{-- <th >
                                        <div class="checkbox me-0 align-self-center">
                                            <div class="form-check custom-checkbox ">
                                                <input type="checkbox" class="form-check-input" id="checkAll"
                                                    required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </div>
                                    </th> --}}
                                    <th>ARN #</th>
                                    <th>Date Applied</th>
                                    <th>Full Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobposting->arns as $key => $arn)
                                    {{-- @if ($arn->isSubmitted) --}}
                                    <tr class="align-middle">
                                        {{-- 
                                                <td class="sorting_1">
                                                    <div class="checkbox me-0 align-self-center">
                                                        <div class="form-check custom-checkbox ">
                                                            <input type="checkbox" class="form-check-input" id="check1" required="">
                                                            <label class="form-check-label" for="check1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                            --}}

                                        <td class="">{{ $arn->arn }}</td>
                                        <td>{{ $arn->submitted_at ? $arn->submitted_at->format('d M, Y') : '' }}</td>
                                        <td>{{ $arn->candidates->fullname ?? '' }}</td>
                                        <td class="text-capitalize">
                                            {{ $arn->candidates->personaldetails->gender ?? '' }}</td>
                                        <td> {{ $arn->candidates->email ?? '' }} </td>
                                        <td> {{ $arn->candidates->phone_no ?? '' }} </td>

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a class="btn btn-sm btn-outline-success rounded p-2"
                                                    href="#">View</a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- @endif --}}
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>

                <div class="card border-0 shadow-sm mb-3">


                    <div class="card-body p-4">
                        <h6>Summary</h6>
                        {{ $jobposting->summary }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
