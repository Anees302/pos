@extends('layouts.app')

@section('content')


@php
$username=$name;
@endphp

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-home"></i>
            <span>Home</span>
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
          <a class="nav-link" href="" data-toggle="modal" data-target="#addProductModal">
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
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-folder"></i>
            <span>
              Manage Products
              <i class="float-right fa fa-angle-down"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Inventory</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductModal"> <i class="fa fa-plus"></i> Add Product</a>
            <a class="dropdown-item" href="products.html"> <i class="fa fa-tags"></i> All Products</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Product Types</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductTypeModal"> <i class="fa fa-plus"></i> Add New Type</a>
            <a class="dropdown-item" href="product-types.html"> <i class="fa fa-tags"></i> Product Types</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Dealers &amp; Brands</h6>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductVendorModal"> <i class="fa fa-user"></i> Add New Vendor</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#addProductBrandModal"> <i class="fa fa-industry"></i> Add New Brand</a>
          </div>
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
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>
          <!-- Icon Cards-->
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-header">
                  <h1>Sales Count</h1>
                  <small class="float-left">Last two weeks</small>
                </div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-money"></i>
                  </div>
                  <div class="card-text">
                    <h1 class="text-center display-3"><strong>135</strong></h1>
                  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="sales-count.html">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-header">
                  <h1>Top-Selling</h1>
                  <small class="float-left">Speakers</small>
                </div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-flash"></i>
                  </div>
                  <div class="card-text">
                    <h1 class="text-center display-3"><strong>24</strong></h1>
                  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="top-selling.html">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-header">
                  <h1>Short Items</h1>
                  <small class="float-left">Includes short and requested items</small>
                </div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-tags"></i>
                  </div>
                  <div class="card-text">
                    <h1 class="text-center display-3"><strong>14</strong></h1>
                  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="short-items.html">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-header">
                  <h1>Improvements</h1>
                  <small class="float-left">Based on total monthly sales</small>
                </div>
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fa fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="card-text">
                    <h1 class="text-center display-3"><strong>27%</strong></h1>
                  </div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="improvements.html">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fa fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>
          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-chart-area"></i>
              Area Chart Example</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        <br><br><br>

      </div>
    </div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Modals -->
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-danger" type="submit">Logout</button></form>
          </div>
        </div>
      </div>
    </div>
    <!-- Add Sale Modal-->
    <div class="modal fade" id="addSaleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-money"></i>
              Add New Sale
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label>Select Product</label>
                <select class="form-control text-primary" required>
                  <option disabled selected><sub>Please select a product</sub></option>
                  <option disabled><sub>Speakers &amp; MICs</sub></option>
                  <option>Audionic MIC AM-20</option>
                  <option>USB Sound Card</option>
                  <option>Audionic Headphones AHT-11</option>
                  <option disabled><sub>Mice &amp; Accessories</sub></option>
                  <option>Razer Mousepad</option>
                  <option>Blue Mousepad</option>
                  <option>Apple Mouse Wireless A11</option>
                  <option>DELL Mouse Wireless D232</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option disabled><sub>Mice &amp; Accessories</sub></option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option disabled><sub>Mice &amp; Accessories</sub></option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                  <option>Razer Mousepad</option>
                </select>
                <small class="float-right">Product not listed here? <a href="#" data-toggle="modal" data-target="#addProductModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label for="">Product Price</label>
                <input type="number" class="form-control" name="" value="" placeholder="Enter product price here..." required>
              </div>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this sale..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Sale">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Add Product Modal-->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-tag"></i>
              Add New Product
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label>Product Type</label>
                <select class="form-control text-primary" required>
                  <option disabled selected><sub>Please select a product type</sub></option>
                  <option>Speakers</option>
                  <option>Card Readers</option>
                  <option>Headphones & MICs</option>
                  <option>Mousepads</option>
                  <option>Mice &amp; Pointing Devices</option>
                  <option>Display Monitors</option>
                  <option>Keyboards</option>
                  <option>Cables & Chargers</option>
                  <option>Power Supplies</option>
                </select>
                <small class="float-right">Product type not listed here? <a href="#"data-toggle="modal" data-target="#addProductTypeModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label>Product Brand</label>
                <select class="form-control text-primary" required>
                  <option disabled selected><sub>Please select a product brand</sub></option>
                  <option>Audionic</option>
                  <option>DELL</option>
                  <option>HP</option>
                  <option>Samsung</option>
                  <option>AMB</option>
                  <option>Nokia</option>
                  <option>Razer</option>
                  <option>MSI</option>
                </select>
                <small class="float-right">Products brand not listed here? <a href="#"data-toggle="modal" data-target="#addProductBrandModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label>Product Vendor</label>
                <select class="form-control text-primary" required>
                  <option disabled selected><sub>Please select a product vendor</sub></option>
                  <option>Haider Abbas</option>
                  <option>Muhammad Faisal</option>
                  <option>Nouman Aslam</option>
                  <option>Anees Ahmad Khan</option>
                  <option>Waleed Ahmad</option>
                  <option>Abdul Wahid</option>
                </select>
                <small class="float-right">Product vendor not listed here? <a href="#"data-toggle="modal" data-target="#addProductVendorModal">Add new</a> </small>
              </div>
              <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter product name..." required>
                <small class="text-muted">Be more specific with product names. Make sure its unique.</small>
              </div>
              <div class="form-group">
                <label for="">Product Price <small class="text-muted">(cost/item)</small> </label>
                <input type="number" class="form-control" name="" value="" placeholder="Enter cost of product per item..." required>
              </div>
              <div class="form-group">
                <label for="">Product Stock <small>(How many products are you adding in stock?)</small> </label>
                <input type="number" class="form-control" name="" value="" placeholder="Enter number of items..." required>
                <small class="text-muted">This will be used as product quantity in stock keeping unit.</small>
              </div>
              How are you paying for this product?
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  Store Account
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  Other. I don't want to record this epxense.
                </label>
              </div>
              <br>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this product..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Product">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Add Product Type-->
    <div class="modal fade" id="addProductTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-tags"></i>
              Add Product Type
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Product Type</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter product type..." required>
                <small class="text-muted">Example: Mousepads, Headphones or Keyboards etc</small>
              </div>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this product type..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Product Type">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Add Product Brand-->
    <div class="modal fade" id="addProductBrandModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-industry"></i>
              Add Product Brand
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Product Brand</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter brand name here..." required>
                <small class="text-muted">Example: Nokia, AMB or MSI etc</small>
              </div>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Brand">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Add Product Vendor -->
    <div class="modal fade" id="addProductVendorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-user"></i>
              Add Products Vendor
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Vendor Name</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's name here..." required>
                <small class="text-muted">Example: Anees Ahmad, Faisal Hayat or Shahzaib Khan etc</small>
              </div>
              <div class="form-group">
                <label for="">Phone Number</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter vendor's phone number here...">
                <small class="text-muted">Example: 555-665-123</small>
              </div>
              <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" class="form-control" name="" value="" placeholder="Enter vendor's email here...">
                <small class="text-muted">Example: ahmadanees02@gmail.com</small>
              </div>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" rows="8" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Vendor">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Add Expense Account Modal -->
    <div class="modal fade" id="addExpenseAccountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">
              <i class="fa fa-dollar"></i>
              Add Expense Account
            </h5>
            <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <form class="">
            <div class="modal-body">
              <div class="form-group">
                <label for="">Account Title</label>
                <input type="text" class="form-control" name="" value="" placeholder="Enter account title here..." required>
                <small class="text-muted">Example: Akhtar Hotel, Mian Tea Stall or My Personal Account etc</small>
              </div>
              <div class="form-group">
                <label for="">How much are you depositing?</label>
                <input type="email" class="form-control" name="" value="" placeholder="Enter the amount you are despositing...">
              </div>
              <div class="form-group">
                <label for="">Description <small class="text-muted">(Optional)</small></label>
                <textarea name="name" class="form-control" cols="80" placeholder="Add some note or description about this vendor..."></textarea>
              </div>
              <small class="text-muted"><em>Please double check information before submitting.</em></small>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <input type="submit" class="btn btn-primary" value="Add Account">
            </div>
          </form>
        </div>
      </div>
    </div>


@endsection
