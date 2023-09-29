<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}


    <div class="container">
        <h2 class="mb-2 pt-3">Recruitment Dashboard</h2>
        <h5 class="text-700 fw-semi-bold">Here’s what’s going on right now</h5>
    </div>

    <div class="container">
        <div class="row g-4 pt-3">

            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body d-flex justify-content-between">
                        <div class="card-menu">
                            <span>Total Job Posting</span>
                            <h2 class="mb-0">65</h2>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body d-flex justify-content-between">
                        <div class="card-menu">
                            <span>Total Applications</span>
                            <h2 class="mb-0">200</h2>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body d-flex justify-content-between">
                        <div class="card-menu">
                            <span>Shortlisted Applications</span>
                            <h2 class="mb-0">300</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body d-flex justify-content-between">
                        <div class="card-menu">
                            <span>Registered Candidates</span>
                            <h2 class="mb-0">600</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-sm-6">

                <div class="card border-0 shadow-sm p-3">
                    <div class="card-header border-0 bg-white">
                        <h3 class="pt-3">Applicants By State</h3>
                        <p style="width:90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit.dolor sit amet, consectetur adipiscing elit</p>

                    </div>


                    <div class="card-body">
                        <div id="barChart" style="width: 100%;min-height:300px;"></div>

                    </div>
                    @json($states)
                    <script type="module">
                        var myChart = echarts.init(document.getElementById('barChart'));
                        var option = {
                            tooltip: {},
                            legend: {
                                data: ['Applications']
                            },
                            xAxis: {
                                data: @json($states)
                            },
                            yAxis: {},
                            series: [{
                                name: 'sales',
                                type: 'bar',
                                data: [125, 600, 241, 361, 420, 50],
                                barWidth: '20%',
                                color: '#FF0054'
                            }]
                        };


                        myChart.setOption(option);
                    </script>
                </div>




            </div>


            <div class="col-xl-6 col-sm-6">

                <div class="card border-0 shadow-sm p-3">
                    <div class="card-header border-0 bg-white">
                        <h3 class="pt-3">By Reservation Category</h3>
                        <p style="width:90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit.dolor sit amet, consectetur adipiscing elit</p>
                    </div>


                    <div class="card-body">


                        <div id="doughnutChart" style="width: 100%;min-height:300px;"></div>

                    </div>

                    <script type="module">
                        var myChart = echarts.init(document.getElementById('doughnutChart'));
                        var option = {

                            legend: {
                                orient: 'vertical',
                                x: 'right',
                                y: 'middle',
                                data: ['Un-reserved', 'OBC', 'ST', 'PWD', 'SC']
                            },
                            series: [{
                                type: 'pie',
                                radius: ['60%', '70%'],
                                avoidLabelOverlap: false,
                                color: [
                                    '#37A2DA',
                                    '#32C5E9',
                                    '#67E0E3',
                                    '#9FE6B8',
                                    '#FFDB5C',
                                    '#ff9f7f',
                                    '#fb7293',
                                    '#E062AE',
                                    '#E690D1',
                                    '#e7bcf3',
                                    '#9d96f5',
                                    '#8378EA',
                                    '#96BFFF'
                                ],
                                label: {
                                    show: false,
                                    position: 'center'
                                },
                                labelLine: {
                                    show: false
                                },
                                emphasis: {
                                    label: {
                                        show: true,
                                        fontSize: '16',
                                        fontWeight: 'bold',
                                    }
                                },
                                data: [{
                                        value: 335,
                                        name: 'PWD'
                                    },
                                    {
                                        value: 310,
                                        name: 'ST'
                                    },
                                    {
                                        value: 234,
                                        name: 'SC'
                                    },
                                    {
                                        value: 135,
                                        name: 'OBC'
                                    },
                                    {
                                        value: 1548,
                                        name: 'Un-reserved'
                                    }
                                ]
                            }]
                        };


                        myChart.setOption(option);
                    </script>
                </div>




            </div>

            <div class="col-xs-12">


                <div class="card border-0 shadow-sm p-3 mb-4">
                    <div class="card-header border-0 bg-white">
                        <h3 class="pt-3">Recent Applications</h3>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                         
                            <table class="table table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">ARN #</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Applied For</th>
                                        <th scope="col">Applied On</th>
                                        <th scope="col">Category</th>
                                        <th>Unit</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($arns as $arn )
                                        <tr>
                                            <td>{{$arn->arn ?? ''}}</td>
                                            <td>{{ $arn->candidates->fullname ?? '' }}</td>
                                            <td>{{ $arn->jobpostings->jobTitle}}</td>
                                            <td>{{ $arn->created_at->format('d/M/Y')}}</td>
                                            <td>{{$arn->candidates->personaldetails->category ?? '' }}</td>
                                            <td>{{$arn->jobpostings->locationunit->unit_name ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


</x-app-layout>
