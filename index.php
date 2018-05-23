<?php
require('admin/connection.php');
require('admin/checkRole.php');
include("admin/auth.php");

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PlAS-DREW | Panel</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="admin/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
                <!-- Left navbar links -->
                <!--
      <ul class="navbar-nav">
    <li class="nav-item"> <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a> </li>
    <li class="nav-item d-none d-sm-inline-block"> <a href="index3.html" class="nav-link">Home</a> </li>
    <li class="nav-item d-none d-sm-inline-block"> <a href="#" class="nav-link">Contact</a> </li>
</ul> SEARCH FORM
<form class="form-inline ml-3">
    <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-navbar" type="submit"> <i class="fa fa-search"></i> </button>
        </div>
    </div>
</form>
-->
                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item nav-item__login">Witaj
                        <?php echo $_SESSION['username']?>
                    </li>
                    <li class="nav-item"> <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="logout.php">Wyloguj</a> </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index.php" class="brand-link"> <span class="brand-text">Plas-drew</span> </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image"> <img src="img/avatar5.png" class="img-circle elevation-2" alt="User Image"> </div>
                        <div class="info">
                            <a href="#" class="d-block">
                                <?php echo $_SESSION['username']?>
                            </a>
                        </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link"> <i class="nav-icon fa fa-dashboard"></i>
                                    <p>OPCJE W PRZYSZŁOŚCI</p>
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
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Panel</h1> </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
                <!-- Main content -->
                <?php   
                     $role= chceckRole($_SESSION['username'], $con);
                        switch ($role)
                        {
                            case "admin":
                                include("admin/admin-dashboard.php");
                                break;
                            case "operator":
                                include("admin/operator-dashboard.php");
                                break;
                            case "szef":
                                include("admin/szef-dashboard.php");
                                    break;
                                
                         
                        }
               
                ?>
                    <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer"> <strong>Copyright &copy;2018 by <a href="http://plastry-drewna.pl">PLAS-DREW</a></strong> KB </footer>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="admin/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <!-- Bootstrap 4 -->
        <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- AdminLTE App -->
        <script src="js/adminlte.js"></script>
    </body>

    </html>