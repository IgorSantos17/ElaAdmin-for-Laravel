@extends('layouts.app')

@section('title', $title)

@section('infos')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Charts</a></li>
                                <li class="active">Chartjs</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Yearly Sales </h4>
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Team Commits </h4>
                        <canvas id="team-chart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Bar chart </h4>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Rader chart </h4>
                        <canvas id="radarChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Line Chart </h4>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mb-3">Doughut Chart </h4>
                            <canvas id="doughutChart"></canvas>
                        </div>
                    </div>
                </div><!-- /# column -->

            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Pie Chart </h4>
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Polar Chart </h4>
                        <canvas id="polarChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-3">Single Bar Chart </h4>
                        <canvas id="singelBarChart"></canvas>
                    </div>
                </div>
            </div><!-- /# column -->
        </div>

    </div>
@stop

@section('scripts')
    <!--  Chart js -->
    <script src="../assets/js/init/chartjs-init.js"></script>
    <!--Flot Chart-->
    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>
@stop
