<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>1STEPAHEAD - Bug & Issue Tracker</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb-admin-2') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb-admin-2') }}/css/sb-admin-2.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('sb-admin-2') }}/img/qa-part-1.png">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand align-items-center" style="margin-top: -7px" href="{{ route('homepage') }}">
                <div class="sidebar-brand-text">1STEPAHEAD</div>
                <br />
                <div class="sidebar-brand-text" style="font-size: 10px">Historical of develop</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mt-2">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('homepage') }}">
                    <i class="fas fa-fw fa-cube"></i>
                    <span>Homepage</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item mt-1">
                <a class="nav-link" href="{{ route('users') }}">
                    <i class="fas fa-fw fa-user-shield  "></i>
                    <span>Master User <span class="badge badge-light">21</span></span></a>
            </li>

            <li class="nav-item mt-1 mb-2">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-flask"></i>
                    <span>Master Project</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item mt-1 active">
                <a class="nav-link" href="{{ route('bugtracer') }}">
                    <i class="fas fa-fw fa-bug"></i>
                    <span>Bug & Issue <span class="badge badge-danger">250+</span></span></a>
            </li>

            <li class="nav-item mb-2">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-vial"></i>
                    <span>Lab Testing</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Settings</span></a>
            </li>

            <hr class="sidebar-divider my-0">

            <div style="display: flex; flex-direction:column; flex:1">
                <div style="margin-top: auto; margin-bottom: 25px; color: #ffffff; margin-left: 20px; font-size: 13px">
                    Version 1.2.2023
                </div>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">2+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Issue & Bug Tracker
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-bug text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">31 Ags 2023, 13:24</div>
                                        <span class="font-weight-light">BUG-SLTR-1.15 - Untuk notifikasi edit quotation dalam mode bahasa inggris menjadi kosong</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-fire text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">29 Ags 2023, 10:35</div>
                                        ISSUE-SLTR-1.19 - Untuk kondisi mengedit data SO hasil dari convert SO, bisa mengedit namun tidak muncul pop up konfirmasi berhasil edit
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Issue or Bug</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="{{ asset('sb-admin-2') }}/img/undraw_profile_1.svg" alt="...">
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
                                        <img class="rounded-circle" src="{{ asset('sb-admin-2') }}/img/undraw_profile_2.svg" alt="...">
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
                                        <img class="rounded-circle" src="{{ asset('sb-admin-2') }}/img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                    Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="two-columns-grid" style="margin-right: 5px; margin-top: -1px">
                                    <div style="text-align: right">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Asep Septiadi</span>
                                    </div>
                                    <div style="text-align: right; margin-top: -1px">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 12px;">Administrator</span>
                                    </div>
                                </div>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-inbox fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Inbox
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h5 class="h5 mb-0 text-gray-800 text-uppercase" style="font-weight: bold">Bug & Issue Tracker</h5>
                    </div>

                      <div class="alert alert-success alert-dismissible fade show" role="alert" style="height: 50px; padding-top: 15px; margin-bottom: 30px">
                        👋 Halo! Ayo selesaikan fitur yang masih bermasalah pada proyek aplikasi kita
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="false">&times;</span>
                        </button>
                      </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Bugs</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bug fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Issues</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-fire fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Open & Reopen
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">25</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-bell fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Clossed Issue & Bug</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">113</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Waiting Check or Test</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                                Hold</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tags fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 10px">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            
                            <div class="card shadow">
                                <div style="padding: 0px">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                          <tr>
                                            <th scope="col" style="text-align: center;">No.</th>
                                            <th scope="col" style="width: 11%; text-align: center;">Kode Bug / Issue</th>
                                            <th scope="col" style="text-align: center; width: 8%">Klasifikasi</th>
                                            <th scope="col" style="width: 40%">Deskirpsi Bug / Issue</th>
                                            <th scope="col" style="width: 10%">Reported by</th>
                                            <th scope="col" style="width: 20%">Reported at</th>
                                            <th scope="col" style="width: 9%; text-align: center">Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr class="table-row" data-id="{{ 1 }}" style="cursor: pointer;">
                                            <th scope="row" style="text-align: center; vertical-align: middle;">1</th>
                                            <td style="vertical-align: middle; font-weight: bold; text-align: center;"><a href="#" style="background-color: #ffffff00; padding: 10px; border-radius: 5px; color: #000000; text-decoration: none;">ISSUE-OMS-1.12</a></td>
                                            <td style="vertical-align: middle; text-align: center">
                                                <a class="btn btn-info position-relative btn-sm" style="margin-left: -15px">
                                                    Minor
                                                    <span class="position-absolute top-0 start-100 translate-middle badge bg-warning btn-sm" style="margin-top: -10px; padding: 5px; color: #000000">
                                                      Issue
                                                    </span>
                                                </a>
                                            </td>
                                            <td style="color: #000000">Terdapat kondisi ketika proses convert so menjadi invoice, tidak muncul konfirmasi tersimpan data convert namun ketika di refresh data convert muncul, Terdapat kondisi ketika proses convert so menjadi invoice, tidak muncul konfirmasi tersimpan data convert namun ketika di refresh data convert muncul</td>
                                            <td style="vertical-align: middle;"><label style="background-color: #ececec; padding: 5px; border-radius: 5px"><a style="color: #000000">Muhammad Rivaldi</a></label></td>
                                            <td style="vertical-align: middle; color: #000000;">Selasa, 29 Agustus 2023 @ 15:30</td>
                                            <td style="vertical-align: middle; text-align: center; background-color: #ffff0073;"><label style="border-radius: 5px"><a style="color: #000000; font-weight: bold;">OPEN</a></label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row" style="text-align: center; vertical-align: middle;">2</th>
                                            <td style="vertical-align: middle; font-weight: bold; text-align: center;"><a href="#" style="background-color: #ffffff00; padding: 10px; color: #000000; border-radius: 5px; text-decoration: none;">BUG-SLTR-1.15</a></td>
                                            <td style="vertical-align: middle; text-align: center">
                                                <a class="btn btn-danger position-relative btn-sm" style="margin-left: -15px">
                                                    Major
                                                    <span class="position-absolute top-0 start-100 translate-middle badge bg-secondary btn-sm" style="margin-top: -10px; padding: 5px">
                                                      Bug
                                                    </span>
                                                </a>
                                            </td>
                                            <td style="color: #000000">Untuk notifikasi edit quotation dalam mode bahasa inggris menjadi kosong</td>
                                            <td style="vertical-align: middle;"><label style="background-color: #ffe0e0; padding: 6px; border-radius: 5px"><a style="color: #090909">Fadhilah Eka</a></label></td>
                                            <td style="vertical-align: middle; color: #000000">Rabu, 30 Agustus 2023 @ 12:40</td>
                                            <td style="vertical-align: middle; text-align: center; background-color: #49454368;"><label style="border-radius: 5px"><a style="color: #ffffff; font-weight: bold;">WAITING CHECK</a></label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row" style="text-align: center; vertical-align: middle;">3</th>
                                            <td style="vertical-align: middle; font-weight: bold; text-align: center;"><a href="#" style="background-color: #ffffff00; padding: 10px; border-radius: 5px; color: #000000; text-decoration: none;">ISSUE-SLTR-1.19</a></td>
                                            <td style="vertical-align: middle; text-align: center">
                                                <a class="btn btn-danger position-relative btn-sm" style="margin-left: -15px">
                                                    Major
                                                    <span class="position-absolute top-0 start-100 translate-middle badge bg-warning btn-sm" style="margin-top: -10px; padding: 5px; color: #000000">
                                                        Issue
                                                    </span>
                                                </a>
                                            </td>
                                            <td style="color: #000000">Untuk kondisi mengedit data SO hasil dari convert SO, bisa mengedit namun tidak muncul pop up konfirmasi berhasil edit</td>
                                            <td style="vertical-align: middle;"><label style="background-color: #c8f7ec; padding: 6px; border-radius: 5px"><a style="color: #090909">Henny</a></label></td>
                                            <td style="vertical-align: middle; color: #000000">Rabu, 30 Agustus 2023 @ 12:40</td>
                                            <td style="vertical-align: middle; text-align: center; background-color: #00ff5946;"><label style="border-radius: 5px"><a style="color: #000000; font-weight: bold;">CLOSED</a></label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row" style="text-align: center; vertical-align: middle;">4</th>
                                            <td style="vertical-align: middle; font-weight: bold; text-align: center;"><a href="#" style="background-color: #ffffff00; padding: 10px; color: #000000; border-radius: 5px; text-decoration: none;">BUG-SLTR-1.23</a></td>
                                            <td style="vertical-align: middle; text-align: center">
                                                <a class="btn btn-info position-relative btn-sm" style="margin-left: -15px">
                                                    Minor
                                                    <span class="position-absolute top-0 start-100 translate-middle badge bg-secondary btn-sm" style="margin-top: -10px; padding: 5px;">
                                                      Bug
                                                    </span>
                                                </a>
                                            </td>
                                            <td style="color: #000000">Untuk akun baru hasil dari login by google di dashboard, ketika login di apps terbaca sebagai akun lite</td>
                                            <td style="vertical-align: middle;"><label style="background-color: #e8c8f7; padding: 6px; border-radius: 5px"><a style="color: #090909">Fahmi</a></label></td>
                                            <td style="vertical-align: middle; color: #000000">Rabu, 30 Agustus 2023 @ 12:40</td>
                                            <td style="vertical-align: middle; text-align: center; background-color: #ff000097;"><label style="border-radius: 5px"><a style="color: #ffffff; font-weight: bold;">REOPEN</a></label></td>
                                          </tr>
                                          <tr class="table-row" data-id="{{ 1 }}" style="cursor: pointer;">
                                            <th scope="row" style="text-align: center; vertical-align: middle;">5</th>
                                            <td style="vertical-align: middle; font-weight: bold; text-align: center;"><a href="#" style="background-color: #ffffff00; padding: 10px; border-radius: 5px; color: #000000; text-decoration: none;">ISSUE-OMS-1.12</a></td>
                                            <td style="vertical-align: middle; text-align: center">
                                                <a class="btn btn-info position-relative btn-sm" style="margin-left: -15px">
                                                    Minor
                                                    <span class="position-absolute top-0 start-100 translate-middle badge bg-warning btn-sm" style="margin-top: -10px; padding: 5px; color: #000000">
                                                      Issue
                                                    </span>
                                                </a>
                                            </td>
                                            <td style="color: #000000">Terdapat kondisi ketika proses convert so menjadi invoice, tidak muncul konfirmasi tersimpan data convert namun ketika di refresh data convert muncul, Terdapat kondisi ketika proses convert so menjadi invoice, tidak muncul konfirmasi tersimpan data convert namun ketika di refresh data convert muncul</td>
                                            <td style="vertical-align: middle;"><label style="background-color: #ececec; padding: 5px; border-radius: 5px"><a style="color: #000000">Muhammad Rivaldi</a></label></td>
                                            <td style="vertical-align: middle; color: #000000;">Selasa, 29 Agustus 2023 @ 15:30</td>
                                            <td style="vertical-align: middle; text-align: center; background-color: #00ff33;"><label style="border-radius: 5px"><a style="color: #000000; font-weight: bold;">ON PROCESS</a></label></td>
                                          </tr>
                                          <tr>
                                            <th scope="row" style="text-align: center; vertical-align: middle;">6</th>
                                            <td style="vertical-align: middle; font-weight: bold; text-align: center;"><a href="#" style="background-color: #ffffff00; padding: 10px; color: #000000; border-radius: 5px; text-decoration: none;">BUG-SLTR-1.15</a></td>
                                            <td style="vertical-align: middle; text-align: center">
                                                <a class="btn btn-danger position-relative btn-sm" style="margin-left: -15px">
                                                    Major
                                                    <span class="position-absolute top-0 start-100 translate-middle badge bg-secondary btn-sm" style="margin-top: -10px; padding: 5px">
                                                      Bug
                                                    </span>
                                                </a>
                                            </td>
                                            <td style="color: #000000">Untuk notifikasi edit quotation dalam mode bahasa inggris menjadi kosong</td>
                                            <td style="vertical-align: middle;"><label style="background-color: #ffe0e0; padding: 6px; border-radius: 5px"><a style="color: #090909">Fadhilah Eka</a></label></td>
                                            <td style="vertical-align: middle; color: #000000">Rabu, 30 Agustus 2023 @ 12:40</td>
                                            <td style="vertical-align: middle; text-align: center; background-color: #ff550068;"><label style="border-radius: 5px"><a style="color: #ffffff; font-weight: bold;">HOLD</a></label></td>
                                          </tr>
                                        </tbody>
                                    </table>
    
                                    <div style="display: flex; justify-content: right; margin-right: 20px">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <span>
                    <div class="text-left copyright" style="margin-left: 25px">
                        Copyright &copy; 2023 Teknovasi Suryatama. All right reserved.
                    </div>
                    <div class="text-center copyright">
                        Historical of Develop 
                    </div>
                    <div class="text-right copyright" style="margin-right: 25px">
                        BUILD 2023.0825.02
                    </div>
                </span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb-admin-2') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('sb-admin-2') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb-admin-2') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb-admin-2') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sb-admin-2') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sb-admin-2') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('sb-admin-2') }}/js/demo/chart-pie-demo.js"></script>

    <script>
        const rows = document.querySelectorAll('.table-row');
        rows.forEach(row => {
            row.addEventListener('click', () => {
                const id = row.getAttribute('data-id');
                window.location.href = "{{ route('homepage', ['id' => '__id__']) }}".replace('__id__', id);
            });
        });
    </script>

</body>

</html>

