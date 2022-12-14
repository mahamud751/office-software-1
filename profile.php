<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | User Profile</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
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
            <a
              class="nav-link"
              data-widget="navbar-search"
              href="#"
              role="button"
            >
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input
                    class="form-control form-control-navbar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button
                      class="btn btn-navbar"
                      type="button"
                      data-widget="navbar-search"
                    >
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
                  <img
                    src="dist/img/user1-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 mr-3 img-circle"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="dist/img/user8-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img
                    src="dist/img/user3-128x128.jpg"
                    alt="User Avatar"
                    class="img-size-50 img-circle mr-3"
                  />
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"
                        ><i class="fas fa-star"></i
                      ></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted">
                      <i class="far fa-clock mr-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Messages</a
              >
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header"
                >15 Notifications</span
              >
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
              <a href="#" class="dropdown-item dropdown-footer"
                >See All Notifications</a
              >
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-widget="control-sidebar"
              data-slide="true"
              href="#"
              role="button"
            >
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
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User Profile</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img
                        class="profile-user-img img-fluid img-circle"
                        src="https://p.kindpng.com/picc/s/78-786207_user-avatar-png-user-avatar-icon-png-transparent.png"
                        alt="User profile picture"
                        style="width: 150px"
                      />
                    </div>

                    <h3 class="profile-username text-center">Sakib Hasan</h3>

                    <!-- Profile picture upload button-->
                    <div class="d-flex justify-content-center">
                      <button class="btn btn-primary" type="button">
                        Upload new image
                      </button>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->

                <!-- /.card -->
              </div>
              <!-- /.col -->
              <!-- /.col -->
              <div class="col-md-7">
                <div class="card">
                  <div class="card-header p-2">
                    <h1>Edit Profile</h1>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Full Name</label>
                            <input
                              type="text"
                              class="form-control"
                              name="fullname"
                              placeholder="Mahamud Pino"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Username</label>
                            <input
                              type="text"
                              class="form-control"
                              name="username"
                              placeholder="Pino1234"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1"
                              >Email address</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              id="exampleInputEmail1"
                              placeholder="pino@gmail.com"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Phone</label>
                            <input
                              type="number"
                              class="form-control"
                              name="number"
                              placeholder="+8801789999751"
                            />
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input
                          type="text"
                          class="form-control"
                          id="exampleInputEmail1"
                          name="address"
                          placeholder="123A ,texas,London"
                        />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Details</label>
                        <input
                          type="textarea"
                          class="form-control"
                          id="exampleInputEmail1"
                          placeholder="lordiedeeeeeeeeeeeeeedddddddddddddddddddddddddddddddddddddddddddd"
                        />
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Old Password</label>
                            <input
                              type="password"
                              class="form-control"
                              id="exampleInputPassword1"
                              name="oldpassword"
                              placeholder="********"
                            />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">New Password</label>
                            <input
                              type="password"
                              class="form-control"
                              id="exampleInputPassword1"
                              name="newpassword"
                              placeholder="********"
                            />
                          </div>
                        </div>
                      </div>

                      <div class="form-group row">
                        <button type="submit" class="btn btn-danger">
                          Update Profile
                        </button>
                      </div>
                    </form>
                    <!-- /.tab-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
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
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
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
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
