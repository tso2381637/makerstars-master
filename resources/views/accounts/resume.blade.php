@extends('layouts.master')

@section('title', '三創履歷')

@section('content')
        @include('layouts.partials.heading-breadcrumbs')

        <div id="content">
            <div class="container">

                <div class="row">

                    <!-- *** LEFT COLUMN ***
			 _________________________________________________________ -->

                    <div class="col-md-9 clearfix" id="customer-order" >
                        <canvas id="resume-chart"></canvas>
                    </div>
                    <!-- /.col-md-9 -->
                    <script type="text/javascript">
                        if (!window.Chart) {
                            var script = document.createElement('script');
                            script.src = 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js';
                            script.onload = renderChart;
                            document.getElementsByTagName('head')[0].appendChild(script);
                        }

                        function renderChart() {
                            var ctx = document.getElementById("resume-chart");
                            var myChart = new Chart(ctx, {
                                type: 'radar',
                                data: {
                                    labels: ["參與程度", "團隊配合度", "執行效率", "溝通能力", "專業能力"],
                                    datasets: [
                                        {
                                            label: "分數",
                                            backgroundColor: "rgba(255,99,132,0.2)",
                                            borderColor: "rgba(255,99,132,1)",
                                            pointBackgroundColor: "rgba(255,99,132,1)",
                                            pointBorderColor: "#fff",
                                            pointHoverBackgroundColor: "#fff",
                                            pointHoverBorderColor: "rgba(255,99,132,1)",
                                            data: [1.5, 2, 3, 4, 5]
                                        }
                                    ]
                                },
                                options: {
                                    scale: {
                                        ticks: {
                                            beginAtZero: true,
                                            stepSize: 1,
                                            max: 5,
                                            min: 0
                                        }
                                    },
                                    legend: {
                                        display: false
                                    },
                                    title: {
                                        display: true,
                                        fontSize: 28,
                                        padding: 15,
                                        text: "能力數據"
                                    }
                                }
                            });
                        }
                    </script>
                    <!-- *** LEFT COLUMN END *** -->

                    @include('accounts.menu')

                </div>
                <!-- /.row -->


            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->
@endsection