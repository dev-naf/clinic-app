@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="css/dasboard.css">

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div>
                        <h1 class="mb-2">Dashboard</h1>
                        <span id="date_time" ></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        {{-- <div class="container-fluid"> --}}
            <!-- Small boxes (Stat box) -->
            <div class="row p-3 mt-5">
              {{-- Blue --}}
              <div class="col-lg-3">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>
                        <p>Jumlah Barang</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
                <!-- ./col Green -->
                <div class="col-lg-3">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53</h3>
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col Yellow -->
                <div class="col-lg-3">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col red -->
                <div class="col-lg-3">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>

                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>


            <script type="text/javascript" src="js/dashboard.js"></script>
            <script type="text/javascript">
                window.onload = date_time('date_time');
            </script>
        @endsection
