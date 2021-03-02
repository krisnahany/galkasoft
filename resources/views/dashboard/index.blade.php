@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid py-4">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase font-weight-bold">Ringkasan Bisnis</h1>
            <div class="settings">
                <a class="text-primary" href="#"><i class="fas fa-cog"></i></a>
            </div>
            <div class="settings-list d-none">
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">Atur Ulang Dashboard</a>
                <a href="{{ url('/dashboard') }}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">Batal</a>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Simpan</a>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-transparent">
                        <h6 class="m-0 mr-auto">Penjualan Terhutang</h6>
                        <div class="dropdown mr-2">
                            <a class="dropdown-toggle text-primary" href="#" role="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bulanan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFilter">
                                <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                                <a class="dropdown-item" href="#">Harian</a>
                                <a class="dropdown-item" href="#">Mingguan</a>
                                <a class="dropdown-item disabled" href="#">Bulanan</a>
                                <a class="dropdown-item" href="#">Kuartalan</a>
                                <a class="dropdown-item" href="#">Tahunan</a>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header font-weight-normal">Pilih Opsi</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-transparent">
                        <h6 class="m-0 mr-auto">Tunai</h6>
                        <div class="dropdown mr-2">
                            <a class="dropdown-toggle text-primary" href="#" role="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bulanan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFilter">
                                <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                                <a class="dropdown-item" href="#">Harian</a>
                                <a class="dropdown-item" href="#">Mingguan</a>
                                <a class="dropdown-item disabled" href="#">Bulanan</a>
                                <a class="dropdown-item" href="#">Kuartalan</a>
                                <a class="dropdown-item" href="#">Tahunan</a>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-transparent">
                        <h6 class="m-0 mr-auto">Tagihan belum dibayarkan</h6>
                        <div class="dropdown mr-2">
                            <a class="dropdown-toggle text-primary" href="#" role="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bulanan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFilter">
                                <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                                <a class="dropdown-item" href="#">Harian</a>
                                <a class="dropdown-item" href="#">Mingguan</a>
                                <a class="dropdown-item disabled" href="#">Bulanan</a>
                                <a class="dropdown-item" href="#">Kuartalan</a>
                                <a class="dropdown-item" href="#">Tahunan</a>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-transparent">
                        <h6 class="m-0 mr-auto">Piutang dagang</h6>
                        <div class="dropdown mr-2">
                            <a class="dropdown-toggle text-primary" href="#" role="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bulanan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFilter">
                                <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                                <a class="dropdown-item" href="#">Harian</a>
                                <a class="dropdown-item" href="#">Mingguan</a>
                                <a class="dropdown-item disabled" href="#">Bulanan</a>
                                <a class="dropdown-item" href="#">Kuartalan</a>
                                <a class="dropdown-item" href="#">Tahunan</a>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myAreaChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-transparent">
                        <h6 class="m-0 mr-auto">Arus Kas</h6>
                        <div class="dropdown mr-2">
                            <a class="dropdown-toggle text-primary" href="#" role="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tahunan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFilter">
                                <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                                <a class="dropdown-item" href="#">Harian</a>
                                <a class="dropdown-item" href="#">Mingguan</a>
                                <a class="dropdown-item disabled" href="#">Bulanan</a>
                                <a class="dropdown-item" href="#">Kuartalan</a>
                                <a class="dropdown-item" href="#">Tahunan</a>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-transparent">
                        <h6 class="m-0 mr-auto">Laba Rugi</h6>
                        <div class="dropdown mr-2">
                            <a class="dropdown-toggle text-primary" href="#" role="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tahunan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFilter">
                                <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                                <a class="dropdown-item" href="#">Harian</a>
                                <a class="dropdown-item" href="#">Mingguan</a>
                                <a class="dropdown-item disabled" href="#">Bulanan</a>
                                <a class="dropdown-item" href="#">Kuartalan</a>
                                <a class="dropdown-item" href="#">Tahunan</a>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-transparent">
                        <h6 class="m-0 mr-auto">Daftar Akun Terpantau</h6>
                        <div class="dropdown mr-2">
                            <a class="dropdown-toggle text-primary" href="#" role="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tahunan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFilter">
                                <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                                <a class="dropdown-item" href="#">Harian</a>
                                <a class="dropdown-item" href="#">Mingguan</a>
                                <a class="dropdown-item disabled" href="#">Bulanan</a>
                                <a class="dropdown-item" href="#">Kuartalan</a>
                                <a class="dropdown-item" href="#">Tahunan</a>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="myBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-transparent">
                        <h6 class="m-0 mr-auto">Biaya Operasional</h6>
                        <div class="dropdown mr-2">
                            <a class="dropdown-toggle text-primary" href="#" role="button" id="dropdownFilter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tahunan</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownFilter">
                                <span class="dropdown-item-text font-weight-bold">Pilih Waktu</span>
                                <a class="dropdown-item" href="#">Harian</a>
                                <a class="dropdown-item" href="#">Mingguan</a>
                                <a class="dropdown-item disabled" href="#">Bulanan</a>
                                <a class="dropdown-item" href="#">Kuartalan</a>
                                <a class="dropdown-item" href="#">Tahunan</a>
                            </div>
                        </div>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Direct
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Social
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Referral
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection