<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Blank Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        th {
            text-align: center;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini <?= $this->uri->segment(1) == 'sale' ? 'sidebar-collapse' : null ?>">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url() ?>assets/index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="dropdown user user-menu">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="<?= base_url() ?>assets/dist/img/user3-128x128.jpg" class="user-image">
                        <span class="hidden-sm"> <?= $this->fungsi->user_login()->username ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="<?= base_url() ?>assets/dist/img/user3-128x128.jpg" class="img-circle">
                            <p><?= $this->fungsi->user_login()->name ?>
                                <small><?= $this->fungsi->user_login()->addres ?></small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-outline-primary"><i class="fas fa-user"> Profil</a></i>
                                </div>
                                <div class="col-sm-6">
                                    <a href="<?= site_url('auth/logout') ?>" class="btn btn-outline-danger"> <i class="fas fa-undo text-danger"> Logout</a></i>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= site_url('dashboard') ?>" class="brand-link">
                <img src="<?= base_url() ?>assets/dist/img/my.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">POS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#"><i class="fa fa-circle text-success"></i>
                            <?= $this->fungsi->user_login()->username ?>
                        </a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">
                            Main Navigation
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('dashboard') ?>" <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('supplier') ?>" <?= $this->uri->segment(1) == 'supplier' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                <i class="nav-icon fas fa-car"></i>
                                <p>
                                    Suppliers
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="<?= site_url('custumer') ?>" <?= $this->uri->segment(1) == 'custumer' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    custumer
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Products
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('category') ?>" <?= $this->uri->segment(1) == 'category' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('unit') ?>" <?= $this->uri->segment(1) == 'unit' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Units</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('item') ?>" <?= $this->uri->segment(1) == 'item' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Items</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-shopping-cart"></i>
                                <p>
                                    Transaction
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('sale') ?>" <?= $this->uri->segment(1) == 'sale' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sales</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('stock/in') ?>" <?= $this->uri->segment(1) == 'stock' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock In</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock Out</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Reports
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sales</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stocks</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php if ($this->fungsi->user_login()->level == 1) { ?>
                            <li class="nav-header">Setting</li>
                            <li class="nav-item">
                                <a href="<?= site_url('user') ?>" <?= $this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : 'class="nav-link"' ?>>
                                    <i class="nav-icon fas fa-user-alt"></i>
                                    <p>
                                        Users
                                    </p>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
        <div class="content-wrapper">
            <!-- Main content -->
            <?php
            echo $contents ?>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <!-- <b>Version</b> 3.0.4 -->
            </div>
            <strong>Copyright &copy; 2020<a href=""> Fawwaz Bayureksa</a>.</strong> All rights
            reserved.
        </footer>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>



    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/js/demo.js"></script>

    <script>
        $(function() {

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>
</body>

</html>