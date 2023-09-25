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

                    <script type="module">
                        var myChart = echarts.init(document.getElementById('barChart'));
                        var option = {
                            tooltip: {},
                            legend: {
                                data: ['Applications']
                            },
                            xAxis: {
                                data: ['TN', 'PB', 'KA', 'MP', 'RJ', 'TR']
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


                        <div id="piechart" style="width: 100%;min-height:300px;"></div>

                    </div>

                    {{-- <script type="module">
                        $(function(){
                       var cData = JSON.parse({{$chart_data}});
      var ctx = $("#pie-chart");
 
      //pie chart data
      var data = {
        labels: cData.label,
        datasets: [
          {
            label: "Users Count",
            data: cData.data,
            backgroundColor: [
              "#DEB887",
              "#A9A9A9",
              "#DC143C",
              "#F4A460",
              "#2E8B57",
              "#1D7A46",
              "#CDA776",
            ],
            borderColor: [
              "#CDA776",
              "#989898",
              "#CB252B",
              "#E39371",
              "#1D7A46",
              "#F4A460",
              "#CDA776",
            ],
            borderWidth: [1, 1, 1, 1, 1,1,1]
          }
        ]
      };
 
      //options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Last Week Registered Users -  Day Wise Count",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
 
      //create Pie Chart class object
      var chart1 = new Chart(ctx, {
        type: "pie",
        data: data,
        options: options
      });
 
  }); --}}

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
    var population = <?php echo $population; ?>;
   
    console.log(population);
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable(population);
        var options = {
            title: 'GenderWise',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }        
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
                                 
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


</x-app-layout>
