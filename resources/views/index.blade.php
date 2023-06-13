@extends('layouts.main')

@section('content')
    <link rel="stylesheet" href="css/dasboard.css">

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mt-5">
                    <div>
                        <h3>Dashboard</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        {{-- <div class="container-fluid"> --}}
            <!-- Small boxes (Stat box) -->
            <div class="row p-3 mt-3">
              {{-- Blue --}}
              <div class="col-lg-3">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>53</h3>
                        <p>Stok Barang</p>
                    </div>
                    <div class="icon">
                        <i class="bi bi-cart3"></i>
                    </div>
                    <a href="/barang" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
                <!-- ./col Green -->
                <div class="col-lg-3">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>50</h3>
                            <p>Jumlah Pasien</p>
                        </div>
                        <div class="icon">
                           <i class="bi bi-people"></i>
                        </div>
                        <a href="/datapasien" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
                <!-- ./col Yellow -->
                <div class="col-lg-3">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3>44</h3>
                            <p>Laporan Transaksi Harian</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-bar-chart-line"></i>
                        </div>
                        <a href="/laporanharian" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
                <!-- ./col red -->
                <div class="col-lg-3">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Laporan Transaksi Bulanan</p>
                        </div>
                        <div class="icon">
                            <i class="bi bi-graph-up"></i>
                        </div>
                        <a href="/laporanbulanan" class="small-box-footer">More info <i class="bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
 @endsection
