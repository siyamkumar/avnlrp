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
                            <h2 class="mb-0">{{ $jobpostings_count ?? '' }}</h2>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body d-flex justify-content-between">
                        <div class="card-menu">
                            <span>Total Applications</span>
                            <h2 class="mb-0">{{ $arns_count ?? '' }}</h2>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body d-flex justify-content-between">
                        <div class="card-menu">
                            <span>Shortlisted Applications</span>
                            <h2 class="mb-0">{{ $shortlisted_count ?? '' }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body d-flex justify-content-between">
                        <div class="card-menu">
                            <span>Registered Candidates</span>
                            <h2 class="mb-0">{{ $candidates_count ?? '' }}</h2>
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


                    <div class="card-body" style="height: 328px">

                        <canvas id="barChart" style="width:50%;height:100px"></canvas>


                    </div>



                </div>




            </div>


            <div class="col-xl-6 col-sm-6">

                <div class="card border-0 shadow-sm p-3">
                    <div class="card-header border-0 bg-white">
                        <h3 class="pt-3">By Reservation Category</h3>
                        <p style="width:90%;">Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit.dolor sit amet, consectetur adipiscing elit</p>
                    </div>


                    <div class="card-body " style="height: 328px">

                        <canvas id="myChart"></canvas>


                    </div>








                    <script type="module">
                        var labels1 = @json($filtered);
                        var users1 = @json($filteredcount);

                        const data1 = {
                            labels: labels1,

                            datasets: [{
                                label: 'StateWise',
                                backgroundColor: [
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
                                borderColor: '#E5E4E2',
                                data: users1,
                            }]
                        };

                        const config1 = {
                            type: 'bar',
                            data: data1,
                            options: {
                                aspectRatio: 2,
                                y: {
                                    ticks: {
                                        precision: 0
                                    }
                                }
                            }
                        };

                        const myChart1 = new Chart(
                            document.getElementById('barChart'),
                            config1
                        );
                    </script>


                    <script type="module">
                        var labels = {{ Js::from($count1) }};
                        var users = {{ Js::from($count) }};

                        const data = {
                            labels: labels,

                            datasets: [{
                                label: 'CategoryWise',
                                backgroundColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(75, 192, 192)',
                                    'rgb(255, 205, 86)',
                                    '#e7bcf3',
                                    'rgb(54, 162, 235)',
                                    '#67E0E3'
                                ],
                                borderColor: [
                                    'rgb(255, 99, 132)',
                                    'rgb(75, 192, 192)',
                                    'rgb(255, 205, 86)',
                                    '#e7bcf3',
                                    'rgb(54, 162, 235)',
                                    '#67E0E3'
                                ],
                                data: users,
                            }]
                        };

                        const config = {
                            type: 'doughnut',
                            data: data,

                            options: {
                                layout: {
                                    padding: 5,
                                },

                                plugins: {
                                    legend: {
                                        display: true,
                                        position: 'right',
                                        ltr: true,
                                        align: 'center',
                                        padding: 20,
                                        fullSize: true,
                                        title: {
                                            display: true,
                                            text: 'Category Wise',
                                        }
                                    },
                                    labels: {
                                        render: 'percentage',
                                        fontColor: data.datasets[0].borderColor,
                                        fontStyle: 'bolder',
                                        position: 'outside',
                                        textMargin: 2
                                    }
                                },
                                aspectRatio: 2.1,
                                y: {
                                    ticks: {
                                        precision: 0
                                    }
                                }

                            },

                            plugins: [ChartDataLabels]

                        };


                        const myChart = new Chart(
                            document.getElementById('myChart'),
                            config
                        );
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
                                    @foreach ($arns as $arn)
                                        <tr>
                                            <td>{{ $arn->arn ?? '' }}</td>
                                            <td>{{ $arn->candidates->fullname ?? '' }}</td>
                                            <td>{{ $arn->jobpostings->jobTitle }}</td>
                                            <td>{{ $arn->created_at->format('d/M/Y') }}</td>
                                            <td>{{ $arn->candidates->personaldetails->reservationcategory ? $arn->candidates->personaldetails->reservationcategory->code : '' }}
                                            </td>
                                            <td>{{ $arn->jobpostings->locationunit->unit_name ?? '' }}</td>
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
