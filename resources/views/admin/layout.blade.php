<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{URL::asset('assets/img/logo.png')}}" rel="icon">
    <title>@yield('title')</title>
    <link href="{{URL::asset('assets/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('assets/admin/css/ruang-admin.min.css')}}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="{{URL::asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                    <img src="{{URL::asset('assets/img/logo.png')}}">
                </div>
                <div class="sidebar-brand-text mx-2">{{ Auth::user()->name }}</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Menu Master
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#layanan" aria-expanded="true" aria-controls="layanan">
                    <i class="fas fa-stethoscope"></i>
                    <span>Layanan</span>
                </a>
                <div id="layanan" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Layanan</h6>
                        <a class="collapse-item" href="{{ route('dataLayanan.create')}}">Tambah Layanan</a>
                        <a class="collapse-item" href="{{ route('dataLayanan.index')}}">Data Layanan</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#poli" aria-expanded="true" aria-controls="poli">
                    <i class="fas fa-clinic-medical"></i>
                    <span>Poliklinik</span>
                </a>
                <div id="poli" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Poliklinik</h6>
                        <a class="collapse-item" href="#">Tambah Poli</a>
                        <a class="collapse-item" href="#">Data Poli</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dokter" aria-expanded="true" aria-controls="dokter">
                    <i class="fas fa-user-md"></i>
                    <!-- <i class="fa-solid fa-user-doctor-hair"></i> -->
                    <span>Dokter</span>
                </a>
                <div id="dokter" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Dokter</h6>
                        <a class="collapse-item" href="#">Tambah Dokter</a>
                        <a class="collapse-item" href="#">Data Dokter</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mcu" aria-expanded="true" aria-controls="mcu">
                    <i class="fas fa-file-medical"></i>
                    <span>MCU</span>
                </a>
                <div id="mcu" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">MCU</h6>
                        <a class="collapse-item" href="{{ route('dataMcu.create')}}">Tambah MCU</a>
                        <a class="collapse-item" href="{{ route('dataMcu.index')}}">Data MCU</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#testi" aria-expanded="true" aria-controls="testi">
                    <i class="fas fa-comment-alt"></i>
                    <span>Testimoni</span>
                </a>
                <div id="testi" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Testimoni</h6>
                        <a class="collapse-item" href="#">Tambah Testimoni</a>
                        <a class="collapse-item" href="#">Data Testimoni</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kontak" aria-expanded="true" aria-controls="kontak">
                    <i class="fas fa-address-book"></i>
                    <span>Kontak</span>
                </a>
                <div id="kontak" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Testimoni</h6>
                        <a class="collapse-item" href="#">Tambah Kontak</a>
                        <a class="collapse-item" href="#">Data Kontak</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Pendaftaran
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pasien" aria-expanded="true" aria-controls="pasien">
                    <i class="fas fa-users"></i>
                    <span>Pasien</span>
                </a>
                <div id="pasien" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pasien</h6>
                        <a class="collapse-item" href="login.html">Data Pasien</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#daftar" aria-expanded="true" aria-controls="daftar">
                    <i class="fas fa-file-contract"></i>
                    <span>Daftar Berobat</span>
                </a>
                <div id="daftar" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Berobat</h6>
                        <a class="collapse-item" href="login.html">Data Pendaftaran</a>

                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li> -->



                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="{{ Auth::user()->profile_photo_url }}" style="max-width: 60px">
                                <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
                            </a>
                            <div class=" dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
                                <a class="dropdown-item" href="{{ route('profile.show') }}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                @yield('container')
                <!-- Modal Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure you want to logout?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="btn btn-primary" onclick="event.preventDefault();
                                                            this.closest('form').submit();">Logout</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Footer -->
                <!-- <footer class="sticky-footer bg-white">
                    <div class=" container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script> - developed by
                                <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
                            </span>
                        </div>
                    </div>

                    <div class="container my-auto py-2">
                        <div class="copyright text-center my-auto">
                            <span>copyright &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script> - distributed by
                                <b><a href="https://themewagon.com/" target="_blank">themewagon</a></b>
                            </span>
                        </div>
                    </div>
                </footer> -->
                <!-- Footer -->
            </div>
        </div>

        <!-- Scroll to top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="{{URL::asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <script src="{{URL::asset('assets/admin/js/ruang-admin.min.js')}}"></script>
        <!-- <script src="{{URL::asset('assets/admin/vendor/chart.js/Chart.min.js')}}"></script> -->
        <!-- <script src="{{URL::asset('assets/admin/js/demo/chart-area-demo.js')}}"></script> -->
        <!-- <script src="https://kit.fontawesome.com/f490d4d699.js" crossorigin="anonymous"></script> -->


        <!-- Page level plugins -->
        <script src="{{URL::asset('assets/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{URL::asset('assets/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable(); // ID From dataTable 
                $('#dataTableHover').DataTable(); // ID From dataTable with Hover
            });
        </script>
</body>

</html>