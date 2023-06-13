@extends('layouts.app')
@section('style')
<link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet">
@endsection
@section('content')


      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="exampleModalLabel">
            <i class="fa fa-tag"></i>
            @if (isset($product))
                Edit product
            @else
                Add New Product
            @endif
          </h5>

          </button>
        </div>
        @if (isset($product))
        <form method="POST" action="{{ route('products.update', ['product' => $product]) }}">
            @method('PUT')
         @else

             <form method="POST" action="{{ route('products.store') }}" class="">
        @endif
            @csrf
          <div class="modal-body">
            <div class="form-group">
              <label>Product Type</label>
              <select name="type" class="form-control text-primary" required>
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
              <select name="brand" class="form-control text-primary" required>
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
              <select name="vendor" class="form-control text-primary" required>
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
              <input value="{{ old('pname', $product->pname ?? '') }}"  type="text" class="form-control" name="pname"  placeholder="Enter product name..." required>
              <small class="text-muted">Be more specific with product names. Make sure its unique.</small>
            </div>
            <div class="form-group">
              <label for="">Product Price <small class="text-muted">(cost/item)</small> </label>
              <input value="{{ old('cost', $product->cost ?? '') }}"  type="number" class="form-control" name="cost" value="" placeholder="Enter cost of product per item..." required>
            </div>
            <div class="form-group">
              <label for="">Product Stock <small>(How many products are you adding in stock?)</small> </label>
              <input value="{{ old('stock', $product->stock ?? '') }}" type="number" class="form-control" name="stock" value="" placeholder="Enter number of items..." required>
              <small class="text-muted">This will be used as product quantity in stock keeping unit.</small>
            </div>
             <small class="text-muted"><em>Please double check information before submitting.</em></small>
          </div>
          <div class="">
            <input type="submit" class="btn btn-primary" value="{{ isset($product) ? 'Edit product' : 'Add product' }}" >

          </div>
        </form>
      </div>




@endsection
