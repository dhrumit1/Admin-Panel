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
                        <?php echo $chartData ?>
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
            <div id="chart-div" style="width: 300px; height: 200px;"></div>
            <script>
                google.charts.load('upcoming', {
                    'packages': ['vegachart']
                }).then(drawChart);

                function drawChart() {
                    const dataTable = new google.visualization.DataTable();
                    dataTable.addColumn({
                        type: 'string',
                        'id': 'category'
                    });
                    dataTable.addColumn({
                        type: 'number',
                        'id': 'amount'
                    });
                    dataTable.addRows([
                        ['Service consumer', 24],
                        ['service provider', 50]
                    ]);

                    const options = {
                        "vega": {
                            "$schema": "https://vega.github.io/schema/vega/v4.json",
                            "width": 300,
                            "height": 100,
                            "padding": 5,

                            'data': [{
                                'name': 'table',
                                'source': 'datatable'
                            }],

                            "signals": [{
                                "name": "tooltip",
                                "value": {},
                                "on": [{
                                        "events": "rect:mouseover",
                                        "update": "datum"
                                    },
                                    {
                                        "events": "rect:mouseout",
                                        "update": "{}"
                                    }
                                ]
                            }],

                            "scales": [{
                                    "name": "xscale",
                                    "type": "band",
                                    "domain": {
                                        "data": "table",
                                        "field": "category"
                                    },
                                    "range": "width",
                                    "padding": 0.05,
                                    "round": true
                                },
                                {
                                    "name": "yscale",
                                    "domain": {
                                        "data": "table",
                                        "field": "amount"
                                    },
                                    "nice": true,
                                    "range": "height"
                                }
                            ],

                            "axes": [{
                                    "orient": "bottom",
                                    "scale": "xscale"
                                },
                                {
                                    "orient": "left",
                                    "scale": "yscale"
                                }
                            ],

                            "marks": [{
                                    "type": "rect",
                                    "from": {
                                        "data": "table"
                                    },
                                    "encode": {
                                        "enter": {
                                            "x": {
                                                "scale": "xscale",
                                                "field": "category"
                                            },
                                            "width": {
                                                "scale": "xscale",
                                                "band": 1
                                            },
                                            "y": {
                                                "scale": "yscale",
                                                "field": "amount"
                                            },
                                            "y2": {
                                                "scale": "yscale",
                                                "value": 0
                                            }
                                        },
                                        "update": {
                                            "fill": {
                                                "value": "steelblue"
                                            }
                                        },
                                        "hover": {
                                            "fill": {
                                                "value": "red"
                                            }
                                        }
                                    }
                                },
                                {
                                    "type": "text",
                                    "encode": {
                                        "enter": {
                                            "align": {
                                                "value": "center"
                                            },
                                            "baseline": {
                                                "value": "bottom"
                                            },
                                            "fill": {
                                                "value": "#333"
                                            }
                                        },
                                        "update": {
                                            "x": {
                                                "scale": "xscale",
                                                "signal": "tooltip.category",
                                                "band": 0.5
                                            },
                                            "y": {
                                                "scale": "yscale",
                                                "signal": "tooltip.amount",
                                                "offset": -2
                                            },
                                            "text": {
                                                "signal": "tooltip.amount"
                                            },
                                            "fillOpacity": [{
                                                    "test": "datum === tooltip",
                                                    "value": 0
                                                },
                                                {
                                                    "value": 1
                                                }
                                            ]
                                        }
                                    }
                                }
                            ]
                        }
                    };

                    const chart = new google.visualization.VegaChart(document.getElementById('chart-div'));
                    chart.draw(dataTable, options);
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
