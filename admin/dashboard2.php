<?php
require('connection.php');
include("auth.php");
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../css/style.css">
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
                    <li class="nav-item">Witaj admin </li>
                    <li class="nav-item"> <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="../logout.php">Wyloguj</a> </li>
                </ul>
            </nav>
            <!-- /.navbar -->
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="/" class="brand-link"> <span class="brand-text">Plas-drew</span> </a>
                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image"> <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> </div>
                        <div class="info"> <a href="#" class="d-block">Alexander Pierce</a> </div>
                    </div>
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link active"> <i class="nav-icon fa fa-dashboard"></i>
                                    <p> Dashboard </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="pages/widgets.html" class="nav-link"> <i class="nav-icon fa fa-th"></i>
                                    <p> Widgets <span class="right badge badge-danger">New</span> </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="addUser.php" class="nav-link"> <i class="fa fa-plus" aria-hidden="true"></i>
                                    <p>Dodaj użytkownika</p>
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
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row row--relative">
                            <div class="box user-add">
                                <?php 
                                $action;
                                if (isset ($_GET["action"])){
                                    $action=$_GET["action"];
                                }else{
                                    $action="form";  
                                }
                                switch ($action)
                                {
                                    case "add-user":
                                        include("addUser-method.php");
                                        break;
                                    default:
                                include("../addUser.php"); 
                                break;
                                }
                                ?>
                            </div>
                            <div class="box project-add"> <a href="#"><i class="fa fa-plus fa-5x" aria-hidden="true"></i></a> <a href=""><i class="fa fa-minus fa-5x" aria-hidden="true"></i></a>
                                <div class="project-add__title">Dodaj nowy projekt</div>
                            </div>
                            <div class="box project-add-form" id="project-add-form" draggable="true">
                                <?php 
                                $action1;
                                if (isset ($_GET["action"])){
                                    $action1=$_GET["action"];
                                }else{
                                    $action1="form";  
                                }
                                switch ($action1)
                                {
                                    case "add-project":
                                        include("addProject-method.php");
                                        break;
                                    case "editRowProject":
                                        include("../editProject.php");
                                        break;
                                    case "update-project":
                                        include("updateProject-method.php");
                                        break;
                                    default:
                                include("../addProject.php");
                                break;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="box box--full">
                                <?php include("../projects.php");?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer"> <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. </footer>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/adminlte.js"></script>
    </body>

    </html>