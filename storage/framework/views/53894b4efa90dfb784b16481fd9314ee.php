<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" />
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables/dataTables.bootstrap4.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/datatables/buttons.bootstrap4.min.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/nice-select.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('css/normalize.css')); ?>" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('css/pendaftar/adminlte.min.css')); ?>" />
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fa fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fa fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fa fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fa fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fa fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fa fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="../../dist/img/favicon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Duta Pemuda
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo e(asset('img/user.png')); ?>" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Syahrial Hipdi</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar" style="padding: 0 25px">
                                <i class="fa fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
                            <a href="../../index.html" class="nav-link">
                                <i class="nav-icon fa fa-tachometer"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.user.dashboard')); ?>"
                                class="nav-link <?php echo e(request()->routeIs('admin.user.*') ? 'active' : ''); ?>">
                                <i class="nav-icon fa fa-trophy"></i>
                                User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.lomba.index')); ?>"
                                class="nav-link <?php echo e(request()->routeIs('admin.lomba.*') ? 'active' : ''); ?>">
                                <i class="nav-icon fa fa-trophy"></i>
                                Lomba
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link <?php echo e(request()->is('admin') ? 'active' : ''); ?>">
                                <i class="nav-icon fa fa-users"></i>
                                Admin
                                <i class="right fa fa-angle-left"></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="data-juri.html" class="nav-link">
                                        <i class="fa fa-user nav-icon"></i>
                                        Juri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data-verifikator.html" class="nav-link">
                                        <i class="fa fa-circle nav-icon"></i>
                                        Verifikator
                                    </a>
                                </li>
                                <li class="nav-item">
                                    
                                    <i class="fa fa-circle nav-icon"></i>
                                    Lomba
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data-admincustom.html" class="nav-link active">
                                        <i class="fa fa-circle nav-icon"></i>
                                        Nilai
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="data-admincustom.html" class="nav-link active">
                                        <i class="fa fa-circle nav-icon"></i>
                                        Komponen Penilaian
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.lomba_pendaftar.indexx')); ?>"
                                class="nav-link <?php echo e(request()->routeIs('admin.lomba_pendaftar.*') ? 'active' : ''); ?>">
                                <i class="nav-icon fa fa-user-plus"></i>
                                Pendaftar
                            </a>
                        </li>
                        <li class="nav-item">
                            <form action="<?php echo e(route('auth.logout')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button class="ml-4 btn btn-sm btn-danger" type="submit">LOGOUT</button>
                            </form>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        
        <?php echo $__env->yieldContent('content'); ?>
        


        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery Min JS -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('js/plugins/bootstrap.bundle.min.js')); ?>"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo e(asset('js/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/datatables-bs4/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/datatables-responsive/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/datatables-responsive/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/datatables-buttons/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/datatables-buttons/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
    
    <script src="<?php echo e(asset('js/niceselect.js')); ?>"></script>

    <script src="<?php echo e(asset('js/plugins/datatables-buttons/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/datatables-buttons/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/plugins/datatables-buttons/buttons.colVis.min.js')); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('js/pendaftar/adminlte.min.js')); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(asset('js/pendaftar/demo.js')); ?>"></script>
    <!-- Page specific script -->
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('select').niceSelect();
        });
    </script>
</body>

</html>
<?php /**PATH C:\laragon\www\DutaPemudaFinal-main\resources\views/layouts/admin.blade.php ENDPATH**/ ?>