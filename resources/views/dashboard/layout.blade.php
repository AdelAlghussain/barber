<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barber</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-4 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{DB::table('users')->first()->profile_photo_path}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="/profile" class="d-block">Admin Profile</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/employees" class="nav-link">
                                <i class="fas fa-users"></i>
                                <p>
                                    Employees
                                </p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="/gallaries" class="nav-link">
                                <i class="fas fa-photo-video"></i>
                                <p>
                                    Gallaries
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/results" class="nav-link">
                                <i class="fas fa-photo-video"></i>
                                <p>
                                    Results
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/products" class="nav-link">
                                <i class="fas fa-shopping-cart"></i>
                                <p>
                                    Products
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/offers" class="nav-link">
                                <i class="fas fa-gift"></i>
                                <p>
                                    Offers
                                </p>
                            </a>
                        </li>




                        <li class="nav-item">
                            <a href="/worktimes" class="nav-link">
                                {{-- <i class="nav-icon fas fa-th"></i> --}}
                                <i class="far fa-calendar-alt"></i>
                                <p>
                                    Worktimes
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/comments" class="nav-link">
                                <i class="far fa-comment-dots"></i>
                                <p>
                                    Comments
                                </p>
                            </a>
                        </li>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')

        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2022 <a href="https://adminlte.io">Barber.co</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    @stack('script')
</body>

</html>
