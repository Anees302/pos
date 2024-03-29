<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC-POS - Home</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.css')}}" rel="stylesheet">
  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="{{ route('dashboard') }}">Admin</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fa fa-bars"></i>
        </button>
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-plus fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addSaleModal"> <i class="fa fa-money"></i> New Sale</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i class="fa fa-tag"></i> New Product</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i class="fa fa-tags"></i> New Product Type</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i class="fa fa-user"></i> New Product Vendor</a>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i class="fa fa-industry"></i> New Product Brand</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addExpenseAccountModal"> <i class="fa fa-dollar"></i> New Expense Account</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-flash fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
              <a class="dropdown-item" href="products.html"> <i class="fa fa-tag"></i> All Products</a>
              <a class="dropdown-item" href="product-types.html"> <i class="fa fa-tags"></i> Product Types</a>
              <a class="dropdown-item" href="product-vendors.html"> <i class="fa fa-user"></i> Product Vendors</a>
              <a class="dropdown-item" href="product-brands.html"> <i class="fa fa-industry"></i> Product Brands</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="revenue.html"> <i class="fa fa-money"></i> Revenue</a>
              <a class="dropdown-item" href="improvements.html"> <i class="fa fa-rocket"></i> Improvements</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="accounts.html"> <i class="fa fa-dollar"></i> Accounts</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow ml-3">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="badge badge-warning">9+</span>
              <i class="fa fa-fw fa-bell"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
              <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> You've few blocked products</a>
              <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
              <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
              <a class="dropdown-item text-danger no-text-decorations" href="#"> <i class="fa fa-info-circle"></i> Another new notification</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="notifications.html">See more notifications</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow ml-3">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user-circle fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <div class="dropdown-header">Rao Ahmed</div>
              <a class="dropdown-item" href="profile.html"> <i class="fa fa-user"></i> Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"> <i class="fa fa-cog"></i> Settings</a>
              <a class="dropdown-item" href="history.html"> <i class="fa fa-line-chart"></i> Activity Log</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fa fa-power-off"></i> Logout</a>
            </div>
          </li>
        </ul>
      </nav>
<div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                  <i class="fa fa-fw fa-home"></i>
                  <span>Home</span>
                </a>
              </li>
              <li class="nav-item  {{ Request::is('products.index') ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('products.index') }}">
                  <i class="fa fa-fw fa-tag"></i>
                  <span>Products</span>
                </a>
              </li>

            <li class="nav-item">
              <a class="nav-link" href="retail-dashboard.html">
                <i class="fa fa-fw fa-line-chart"></i>
                <span>Retail Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sales-reports.html">
                <i class="fa fa-fw fa-bar-chart"></i>
                <span>Sales Reports</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inventory-reports.html">
                <i class="fa fa-fw fa-tags"></i>
                <span>Inventory Reports</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment-reports.html">
                <i class="fa fa-fw fa-money"></i>
                <span>Payment Reports</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sales.html">
                <i class="fa fa-fw fa-table"></i>
                <span>Check Sales</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" data-toggle="modal" data-target="#addSaleModal">
                <i class="fa fa-fw fa-plus"></i>
                <span>Record New Sale</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('products.create') }}">
                <i class="fa fa-fw fa-tags"></i>
                <span>Add New Product</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product-brands.html">
                <i class="fa fa-fw fa-industry"></i>
                <span>Product Brands</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product-vendors.html">
                <i class="fa fa-fw fa-users"></i>
                <span>Product Vendors</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="history.html">
                <i class="fa fa-fw fa-calendar"></i>
                <span>History</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="export-record.html">
                <i class="fa fa-fw fa-external-link"></i>
                <span>Export Record</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="general-settings.html">
                <i class="fa fa-fw fa-cogs"></i>
                <span>General Settings</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="help.html">
                <i class="fa fa-fw fa-life-ring"></i>
                <span>Help</span></a>
            </li>
          </ul>

        <div id="content-wrapper">
            <div class="container-fluid">
              <!-- Content code here -->
              @yield('content')
            </div>

     <!-- Sticky Footer -->
     <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto ">
            <br><br><br>

            <br><br><br>
            <span>Copyright &copy; 2013-2018 <a href="#">Blackrock Digital, LLC.</a>, 2018 <a href="https://vruqa.github.io">Vruqa Designs</a>, 2018 <a href="https://appzaib.github.io">Appzaib</a>. All rights reserved.</span>
            <br><br><br>
          </div>
        </div>
      </footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/rc-pos.min.js"></script>
    <script src="js/chart-area-demo.js"></script>
  </body>
  </html>
