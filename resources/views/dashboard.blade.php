@extends('layouts.app')
@extends('sidebar')

@section('title')
    JDF - Dashboard
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Donations (Total) Card Rupiah -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-ms font-weight-bold text-white text-uppercase mb-1">
                                Donations (Total) - Indonesia Rupiah</div>
                            <div class="h5 mb-0 font-weight-bold text-white">
                                {{ $data['donation-idr'] }}
                            </div>
                        </div>
                        {{-- <div class="col-auto">
                            <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Donots (Total) Card Yen -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-ms font-weight-bold text-white text-uppercase mb-1">
                                Donations (Total) - Japan Yen</div>
                            <div class="h5 mb-0 font-weight-bold text-white">
                                {{ $data['donation-jpy'] }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-yen-sign fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rate Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-ms font-weight-bold text-white text-uppercase mb-1">
                                Rate : ({{ $data['donation-date'] }})
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-white">
                                {{ $data['donation-rate'] }} per 1 Yen
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Donots (Total) Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-ms font-weight-bold text-white text-uppercase mb-1">
                                Donors (Total)
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-white">
                                {{ $data['donor'] }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row -->

    <hr>

    <!-- Campaign adaorangbaik.com Card-->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCard-adaorangbaik" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">CAMPAIGN - adaorangbaik.com</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCard-adaorangbaik">
            <div class="card-body">
                <!-- Content Row -->
                <div class="row">

                    <!-- Donations (Total) Card Rupiah -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-primary text-uppercase mb-1">
                                            Donations (Total) - Indonesia Rupiah</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['adaorangbaik-donation-idr'] }}
                                        </div>
                                    </div>
                                    {{-- <div class="col-auto">
                                        <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donots (Total) Card Yen -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-success text-uppercase mb-1">
                                            Donations (Total) - Japan Yen</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['adaorangbaik-donation-jpy'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donots (Total) Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-info text-uppercase mb-1">
                                            Donors (Total)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['adaorangbaik-donor'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End of adaorangbaik.com Card-->

    <!-- Campaign amalsholeh.com Card-->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCard-amalsholeh" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">CAMPAIGN - amalsholeh.com</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCard-amalsholeh">
            <div class="card-body">
                <!-- Content Row -->
                <div class="row">

                    <!-- Donations (Total) Card Rupiah -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-primary text-uppercase mb-1">
                                            Donations (Total) - Indonesia Rupiah</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['amalsholeh-donation-idr'] }}
                                        </div>
                                    </div>
                                    {{-- <div class="col-auto">
                                        <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donots (Total) Card Yen -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-success text-uppercase mb-1">
                                            Donations (Total) - Japan Yen</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['amalsholeh-donation-jpy'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donots (Total) Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-info text-uppercase mb-1">
                                            Donors (Total)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['amalsholeh-donor'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End of amalsholeh.com Card-->

    <!-- Campaign baznasjabar.org Card-->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#collapseCard-baznasjabar" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-primary">CAMPAIGN - baznasjabar.org</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse show" id="collapseCard-baznasjabar">
            <div class="card-body">
                <!-- Content Row -->
                <div class="row">

                    <!-- Donations (Total) Card Rupiah -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-primary text-uppercase mb-1">
                                            Donations (Total) - Indonesia Rupiah</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['baznasjabar-donation-idr'] }}
                                        </div>
                                    </div>
                                    {{-- <div class="col-auto">
                                        <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donots (Total) Card Yen -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-success text-uppercase mb-1">
                                            Donations (Total) - Japan Yen</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['baznasjabar-donation-jpy'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-yen-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Donots (Total) Card -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-ms font-weight-bold text-info text-uppercase mb-1">
                                            Donors (Total)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $data['baznasjabar-donor'] }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
            </div>
        </div>
    </div>
    <!-- End of amalsholeh.com Card-->

</div>
<!-- /.container-fluid -->
@endsection
