<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE 3 | Advanced form elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css" />
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />

  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css" />
  <!-- BS Stepper -->
  <link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css" />
  <!-- dropzonejs -->
  <link rel="stylesheet" href="plugins/dropzone/min/dropzone.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60" />
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.php" class="nav-link">Home</a>
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
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                  aria-label="Search" />
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
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
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background:#000000d1 ;">
      <!-- Brand Logo -->
      <a href="index3.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: 0.8" />
        <span class="brand-text font-weight-light">Web Touch</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block">Welcome Admin</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" style="background: white;" />
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="profile.php" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>Profile</p>
              </a>
            </li>
           
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Expense
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right">3</span>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="expense-category.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Expense Category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="expense.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Expense</p>
                  </a>
                </li>
            
                <li class="nav-item">
                  <a href="expense-list.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Expense List</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Deposit
                  <i class="fas fa-angle-left right"></i>
               
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="deposit.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Deposit</p>
                  </a>
                </li>
              
            
                <li class="nav-item">
                  <a href="deposit-list.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Deposit List</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Withdraw
                  <i class="fas fa-angle-left right"></i>
               
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="withdraw.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Withdraw</p>
                  </a>
                </li>
              
            
                <li class="nav-item">
                  <a href="withdraw-list.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Withdraw List</p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                  Fund Request
                  <i class="fas fa-angle-left right"></i>
                 
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="fund-request.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fund Request</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="fund-list.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fund List</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="fund-request-list.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Fund Request List</p>
                  </a>
                </li>
            
              </ul>
            </li>
          
            <li class="nav-item">
              <a href="cashbook.php" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>Cash Book</p>
              </a>
            </li>
           
       
            <li class="nav-item">
              <a href="pos.php" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p>Logout</p>
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
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Advanced Form</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header" style="background: #02c996cc;" >


              <h3 class="card-title">New Category</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <form>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="category-name" placeholder="Enter Category Name"
                          name="category-name">
                      </div>

                      <div class="form-group">
                        <div class="form-group">
                            <label>Category Details</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                          </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>

              </div>

            </div>
            <!-- /.row -->
            <!-- /.row -->
          </div>
        </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="plugins/select2/js/select2.full.min.js"></script>
  <!-- Bootstrap4 Duallistbox -->
  <script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <!-- InputMask -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/inputmask/jquery.inputmask.min.js"></script>
  <!-- date-range-picker -->
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- bootstrap color picker -->
  <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Bootstrap Switch -->
  <script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
  <!-- BS-Stepper -->
  <script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>
  <!-- dropzonejs -->
  <script src="plugins/dropzone/min/dropzone.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
 
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
  <script>
    $(function () {
      var Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
      });

      $(".swalDefaultSuccess").click(function () {
        Toast.fire({
          icon: "success",
          title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".swalDefaultInfo").click(function () {
        Toast.fire({
          icon: "info",
          title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".swalDefaultError").click(function () {
        Toast.fire({
          icon: "error",
          title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".swalDefaultWarning").click(function () {
        Toast.fire({
          icon: "warning",
          title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".swalDefaultQuestion").click(function () {
        Toast.fire({
          icon: "question",
          title: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });

      $(".toastrDefaultSuccess").click(function () {
        toastr.success(
          "Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
        );
      });
      $(".toastrDefaultInfo").click(function () {
        toastr.info(
          "Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
        );
      });
      $(".toastrDefaultError").click(function () {
        toastr.error(
          "Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
        );
      });
      $(".toastrDefaultWarning").click(function () {
        toastr.warning(
          "Lorem ipsum dolor sit amet, consetetur sadipscing elitr."
        );
      });

      $(".toastsDefaultDefault").click(function () {
        $(document).Toasts("create", {
          title: "Toast Title",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultTopLeft").click(function () {
        $(document).Toasts("create", {
          title: "Toast Title",
          position: "topLeft",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultBottomRight").click(function () {
        $(document).Toasts("create", {
          title: "Toast Title",
          position: "bottomRight",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultBottomLeft").click(function () {
        $(document).Toasts("create", {
          title: "Toast Title",
          position: "bottomLeft",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultAutohide").click(function () {
        $(document).Toasts("create", {
          title: "Toast Title",
          autohide: true,
          delay: 750,
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultNotFixed").click(function () {
        $(document).Toasts("create", {
          title: "Toast Title",
          fixed: false,
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultFull").click(function () {
        $(document).Toasts("create", {
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
          title: "Toast Title",
          subtitle: "Subtitle",
          icon: "fas fa-envelope fa-lg",
        });
      });
      $(".toastsDefaultFullImage").click(function () {
        $(document).Toasts("create", {
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
          title: "Toast Title",
          subtitle: "Subtitle",
          image: "dist/img/user3-128x128.jpg",
          imageAlt: "User Picture",
        });
      });
      $(".toastsDefaultSuccess").click(function () {
        $(document).Toasts("create", {
          class: "bg-success",
          title: "Toast Title",
          subtitle: "Subtitle",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultInfo").click(function () {
        $(document).Toasts("create", {
          class: "bg-info",
          title: "Toast Title",
          subtitle: "Subtitle",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultWarning").click(function () {
        $(document).Toasts("create", {
          class: "bg-warning",
          title: "Toast Title",
          subtitle: "Subtitle",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultDanger").click(function () {
        $(document).Toasts("create", {
          class: "bg-danger",
          title: "Toast Title",
          subtitle: "Subtitle",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
      $(".toastsDefaultMaroon").click(function () {
        $(document).Toasts("create", {
          class: "bg-maroon",
          title: "Toast Title",
          subtitle: "Subtitle",
          body: "Lorem ipsum dolor sit amet, consetetur sadipscing elitr.",
        });
      });
    });
  </script>

</body>

</html>