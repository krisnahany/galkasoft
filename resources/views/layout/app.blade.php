<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GALKASOFT - @yield('title')</title>
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    {{-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body id="page-top">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-primary topbar static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        {{-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3"> --}}
        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars" style="color:#293232;"></i>
        </button>
        <a class="logo" href="{{ url('/dashboard') }}">
            <img src="{{ asset('assets/img/logo.png') }}" alt="" srcset="">
        </a>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{-- <span class="mr-2 d-none d-lg-inline text-gray-600 text-right"> --}}
                    <span class="mr-2 d-none d-lg-inline text-white text-right">
                        <div><b>PT. Varash Saddan Nusantara</b></div>
                        <div class="small">Ni Wayan Eka Putri Suantari</div>
                    </span>
                    <img class="img-profile rounded-circle"
                        src="{{ asset('assets/img/undraw_profile.svg') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter"> </span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="alertsDropdown">
                    {{-- <h6 class="dropdown-header text-gray-800">
                        Pemberitahuan
                    </h6> --}}
                    <div class="dropdown-header d-flex">
                        <div class="text-gray-800" style="width: 50%">Pemberitahuan</div>
                        <div class="text-right text-danger" style="width: 50%">1</div>
                    </div>
                    {{-- <a class="dropdown-item d-flex align-items-center item-active" href="#"> --}}
                    <a class="dropdown-item d-flex item-active" href="#">
                        <div class="mr-3" style="width: 50%;">
                            <div class="font-weight-bold text-primary">Produk yang habis</div>
                            <div class="list-products">
                                <div class="small">- Roservara Peppermint</div>
                                <div class="small">- Black Mayva</div>
                                <div class="small">- Avana's Secret Night</div>
                            </div>
                        </div>
                        <div class="ml-2" style="width: 50%;">
                            <div class="text-right small font-italic">25 menit yang lalu</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                        <div class="mr-3" style="width: 50%;">
                            <div class="font-weight-bold">Produk yang habis</div>
                            <div class="list-products">
                                <div class="small">- Roservara Peppermint</div>
                                <div class="small">- Black Mayva</div>
                                <div class="small">- Avana's Secret Night</div>
                            </div>
                        </div>
                        <div class="ml-2" style="width: 50%;">
                            <div class="text-right small font-italic">25 menit yang lalu</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex" href="#">
                        <div class="mr-3" style="width: 50%;">
                            <div class="font-weight-bold">Produk yang habis</div>
                            <div class="list-products">
                                <div class="small">- Roservara Peppermint</div>
                                <div class="small">- Black Mayva</div>
                                <div class="small">- Avana's Secret Night</div>
                            </div>
                        </div>
                        <div class="ml-2" style="width: 50%;">
                            <div class="text-right small font-italic">25 menit yang lalu</div>
                        </div>
                    </a>
                    {{-- <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a> --}}
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-info-circle"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="{{ asset('assets/img/undraw_profile_1.svg') }}"
                                alt="">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                problem I've been having.</div>
                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                alt="">
                            <div class="status-indicator"></div>
                        </div>
                        <div>
                            <div class="text-truncate">I have the photos that you ordered last month, how
                                would you like them sent to you?</div>
                            <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                alt="">
                            <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!</div>
                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                alt="">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div>
                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                told me that people say this to all dogs, even if they aren't good...</div>
                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
            </li>
            

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <li class="nav-item{{ request()->is('dashboard') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="fas fa-fw fa-chart-pie"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item{{ request()->is('laporan') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/laporan') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Laporan</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-2 mx-0">

            <li class="nav-item{{ request()->is('kas-dan-bank') || request()->is('kas-dan-bank/*') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/kas-dan-bank') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Kas dan Bank</span>
                </a>
            </li>

            <li class="nav-item{{ request()->is('penjualan') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/penjualan') }}">
                    <i class="fas fa-fw fa-tag"></i>
                    <span>Penjualan</span>
                </a>
            </li>

            <li class="nav-item{{ request()->is('pembelian') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/pembelian') }}">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Pembelian</span>
                </a>
            </li>

            <li class="nav-item{{ request()->is('biaya') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/biaya') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Biaya</span>
                </a>
            </li>

            <hr class="sidebar-divider my-2 mx-0">

            <li class="nav-item{{ request()->is('kontak') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/kontak') }}">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>Kontak</span>
                </a>
            </li>

            <li class="nav-item{{ request()->is('produk') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/produk') }}">
                    <i class="fas fa-fw fa-shopping-bag"></i>
                    <span>Produk</span>
                </a>
            </li>

            <li class="nav-item{{ request()->is('aset') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/aset') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Pengaturan Aset</span>
                </a>
            </li>

            <li class="nav-item{{ request()->is('akun') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/akun') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Daftar Akun</span>
                </a>
            </li>

            <hr class="sidebar-divider my-2 mx-0">

            <li class="nav-item{{ request()->is('lainnya') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/lainnya') }}">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Daftar Lainnya</span>
                </a>
            </li>
            <li class="nav-item{{ request()->is('pengaturan') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/pengaturan') }}">
                    <i class="fas fa-cog"></i>
                    <span>Pengaturan</span>
                </a>
            </li>
            <li class="nav-item{{ request()->is('keluar') ? ' sidebar-active' : '' }}">
                <a class="nav-link" href="{{ url('/keluar') }}">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span>
                </a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                @yield('content')

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>&copy; 2020 Galkasoft.id - Integrated Online Accounting Software</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ url('/') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/chart-pie-demo.js') }}"></script>

</body>
</html>