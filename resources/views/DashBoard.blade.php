@extends('adminDashboard')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src='https://www.gstatic.com/charts/loader.js'></script>
<style>
    .dash-sales-boxes {
        display: flex;
        justify-content: space-between;
        margin: auto;
        /* padding: 0 20px; */
    }

    .dash-recent-sales {
        /* width: 65%; */
        background: #fff;
        padding: 20px 30px;
        margin: auto;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .dash-top-sales {
        /* width: 35%; */
        background: #fff;
        padding: 20px 30px;
        margin: 20px auto;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }

    .number {
        padding-top: 10px;
    }

    input {
        text-align: center;
    }
</style>
@section('content')
@if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Users</div>
                <div class="number">{{$sum}}</div>
                <div class="indicator">
                    <!-- <i class='bx bx-up-arrow-alt'></i> -->
                    <!-- <span class="text">Up from yesterday</span> -->
                </div>
            </div>
            <!-- <i class='bx bx-cart-alt cart'></i> -->
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Service Consumer</div>
                <div class="number">{{$sc}}</div>
                <div class="indicator">
                    <!-- <i class='bx bx-up-arrow-alt'></i> -->
                    <!-- <span class="text">Up from yesterday</span> -->
                </div>
            </div>
            <!-- <i class='bx bxs-cart-add cart two' ></i> -->
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Service Provider</div>
                <div class="number">{{$sp}}</div>
                <div class="indicator">
                    <!-- <i class='bx bx-up-arrow-alt'></i> -->
                    <!-- <span class="text">Up from yesterday</span> -->
                </div>
            </div>
            <!-- <i class='bx bx-cart cart three' ></i> -->
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total FeedBack</div>
                <div class="number">{{$fb}}</div>
                <div class="indicator">
                    <!-- <i class='bx bx-down-arrow-alt down'></i> -->
                    <!-- <span class="text">Down From Today</span> -->
                </div>
            </div>
            <!-- <i class='bx bxs-cart-download cart four' ></i> -->
        </div>
    </div>

    <div class="dash-sales-boxes">
        <div class="dash-recent-sales box">
            <div id="piechart" style="width: 300px; height: 200px;"></div>
            <script type="text/javascript">
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {

                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        <?php echo $chartData1 ?>
                    ]);

                    var options = {
                        title: 'Rating Charts'
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                    chart.draw(data, options);
                }
            </script>
        </div>
        <div class="dash-top-sales box">
        <div id="donutchart" style="width: 300px; height: 200px;"></div>
            <script type="text/javascript">
                google.charts.load("current", {
                    packages: ["corechart"]
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        <?php echo $chartData2 ?>
                    ]);

                    var options = {
                        title: 'Gender chart',
                        pieHole: 0.4,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                    chart.draw(data, options);
                }
            </script>
        </div>
    </div>

    <div class="dash-sales-boxes">
        <div class="dash-recent-sales box">
            <div class="title">Recent Service Consumer</div>
            <table>
                <tr>
                    <th>No</th>
                    <th>firstName</th>
                    <th>lastName</th>
                    <th>gender</th>
                    <th>phoneNo</th>
                </tr>
                @php($count = 1)
                @foreach($lastSc as $lS)
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$lS->firstName}}</td>
                    <td>{{$lS->lastName}}</td>
                    <td>{{$lS->gender}}</td>
                    <td>{{$lS->phoneNo}}</td>
                </tr>
                @php($count++)
                @endforeach
            </table>
        </div>
        <div class="dash-top-sales box">
            <div class="title">Recent Service Provider</div>
            <table>
                <tr>
                    <th>No</th>
                    <th>firstName</th>
                    <th>lastName</th>
                    <th>gender</th>
                    <th>phoneNo</th>
                </tr>
                @php($count = 1)
                @foreach($lastSp as $lP)
                <tr>
                    <td>{{$count}}</td>
                    <td>{{$lP->firstName}}</td>
                    <td>{{$lP->lastName}}</td>
                    <td>{{$lP->gender}}</td>
                    <td>{{$lP->phoneNo}}</td>
                </tr>
                @php($count++)
                @endforeach
            </table>
        </div>
    </div>
</div>

@stop
