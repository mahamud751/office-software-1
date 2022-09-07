<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css" />
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />

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
            <div class="col-sm-6">
              <h1>Fund Request List</h1>
            </div>
          
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-4">
              <div class="card">


                <!-- /.card-header -->
                <div class="card-body">

                  <select class="form-control select2">
                    <option selected="selected">Select a Category </option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>


                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header" style="background: #02c996cc;" >
                  <h3 class="card-title">Fund Request</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr style="background: #20c99769;" >
                        <th>#</th>
                        <th>Invoice No.</th>
                        <th>Branch Name</th>
                        <th>User Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th class="print_hidden">Approve Action</th>

                        <th class="print_hidden">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>9</td>
                        <td>
                          Uttara
                        </td>
                        <td>
                          pino
                        </td>
                        <td>20 Jun, 2022</td>
                       
                        <td>500 Tk</td>

                       
                        <td>Bkash
                        </td>
                        <td>Pending
                        </td>
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                             
                             
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Approve
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Pending
                              </a>
                           
                              
                            </div>
                          </div>
                        </td>
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>9</td>
                        <td>
                          Uttara
                        </td>
                        <td>
                          pino
                        </td>
                        <td>20 Jun, 2022</td>
                       
                        <td>500 Tk</td>

                       
                        <td>Bkash
                        </td>
                        <td>Pending
                        </td>
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                             
                             
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Approve
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Pending
                              </a>
                           
                              
                            </div>
                          </div>
                        </td>
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>9</td>
                        <td>
                          Uttara
                        </td>
                        <td>
                          pino
                        </td>
                        <td>20 Jun, 2022</td>
                       
                        <td>500 Tk</td>

                       
                        <td>Bkash
                        </td>
                        <td>Pending
                        </td>
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                             
                             
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Approve
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Pending
                              </a>
                           
                              
                            </div>
                          </div>
                        </td>
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      

                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
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
  <script src=".plugins/toastr/toastr.min.js"></script>
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
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="plugins/jszip/jszip.min.js"></script>
  <script src="plugins/pdfmake/pdfmake.min.js"></script>
  <script src="plugins/pdfmake/vfs_fonts.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.php5.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



  <!-- Page specific script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Initialize Select2 Elements
      $(".select2bs4").select2({
        theme: "bootstrap4",
      });

      $("#example1")
        .DataTable({
          responsive: true,
          lengthChange: false,
          autoWidth: false,
          buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
        })
        .buttons()
        .container()
        .appendTo("#example1_wrapper .col-md-6:eq(0)");
      $("#example2").DataTable({
        paging: true,
        lengthChange: false,
        searching: false,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
      });
    });
  </script>

  <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Initialize Select2 Elements
      $(".select2bs4").select2({
        theme: "bootstrap4",
      });

      //Datemask dd/mm/yyyy
      $("#datemask").inputmask("dd/mm/yyyy", { placeholder: "dd/mm/yyyy" });
      //Datemask2 mm/dd/yyyy
      $("#datemask2").inputmask("mm/dd/yyyy", { placeholder: "mm/dd/yyyy" });
      //Money Euro
      $("[data-mask]").inputmask();

      //Date picker
      $("#reservationdate").datetimepicker({
        format: "L",
      });
      $("#reservationdate2").datetimepicker({
        format: "L",
      });

      //Date and time picker
      $("#reservationdatetime").datetimepicker({ icons: { time: "far fa-clock" } });

      //Date range picker
      $("#reservation").daterangepicker();
      //Date range picker with time picker
      $("#reservationtime").daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
          format: "MM/DD/YYYY hh:mm A",
        },
      });
      //Date range as a button
      $("#daterange-btn").daterangepicker(
        {
          ranges: {
            Today: [moment(), moment()],
            Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
            "Last 7 Days": [moment().subtract(6, "days"), moment()],
            "Last 30 Days": [moment().subtract(29, "days"), moment()],
            "This Month": [moment().startOf("month"), moment().endOf("month")],
            "Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")],
          },
          startDate: moment().subtract(29, "days"),
          endDate: moment(),
        },
        function (start, end) {
          $("#reportrange span").php(start.format("MMMM D, YYYY") + " - " + end.format("MMMM D, YYYY"));
        }
      );

      //Timepicker
      $("#timepicker").datetimepicker({
        format: "LT",
      });

      //Bootstrap Duallistbox
      $(".duallistbox").bootstrapDualListbox();

      //Colorpicker
      $(".my-colorpicker1").colorpicker();
      //color picker with addon
      $(".my-colorpicker2").colorpicker();

      $(".my-colorpicker2").on("colorpickerChange", function (event) {
        $(".my-colorpicker2 .fa-square").css("color", event.color.toString());
      });

      $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch("state", $(this).prop("checked"));
      });
    });
    // BS-Stepper Init
    document.addEventListener("DOMContentLoaded", function () {
      window.stepper = new Stepper(document.querySelector(".bs-stepper"));
    });

    // DropzoneJS Demo Code Start
    Dropzone.autoDiscover = false;

    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
    var previewNode = document.querySelector("#template");
    previewNode.id = "";
    var previewTemplate = previewNode.parentNode.innerHTML;
    previewNode.parentNode.removeChild(previewNode);

    var myDropzone = new Dropzone(document.body, {
      // Make the whole body a dropzone
      url: "/target-url", // Set the url
      thumbnailWidth: 80,
      thumbnailHeight: 80,
      parallelUploads: 20,
      previewTemplate: previewTemplate,
      autoQueue: false, // Make sure the files aren't queued until manually added
      previewsContainer: "#previews", // Define the container to display the previews
      clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
    });

    myDropzone.on("addedfile", function (file) {
      // Hookup the start button
      file.previewElement.querySelector(".start").onclick = function () {
        myDropzone.enqueueFile(file);
      };
    });

    // Update the total progress bar
    myDropzone.on("totaluploadprogress", function (progress) {
      document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
    });

    myDropzone.on("sending", function (file) {
      // Show the total progress bar when upload starts
      document.querySelector("#total-progress").style.opacity = "1";
      // And disable the start button
      file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
    });

    // Hide the total progress bar when nothing's uploading anymore
    myDropzone.on("queuecomplete", function (progress) {
      document.querySelector("#total-progress").style.opacity = "0";
    });

    // Setup the buttons for all transfers
    // The "add files" button doesn't need to be setup because the config
    // `clickable` has already been specified.
    document.querySelector("#actions .start").onclick = function () {
      myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
    };
    document.querySelector("#actions .cancel").onclick = function () {
      myDropzone.removeAllFiles(true);
    };
    // DropzoneJS Demo Code End
  </script>


</body>

</html>