@extends('layouts.app')

@section('content')

<div class="card mb-3">
    <div class="card-header bg-primary text-white">
     <i class="fa fa-table"></i>
     Products
     <a href="{{ route('products.create') }}" class="text-white">
       <span class="float-right">
         <i class="fa fa-plus"></i>
         Add New Product
       </span>
     </a>
   </div>
   <div class="card-body">
     <div class="table-responsive">
       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead>

           <tr>
             <th>PID</th>
             <th>Product Name</th>
             <th>Product Type</th>
             <th>Brand</th>
             <th>In-stock</th>
             <th>Cost/item</th>
             <th>Inventory Worth</th>
             <th>Revenue Generated</th>
             <th>Vendor</th>
             <th>Actions</th>
             </a>
           </tr>
           @foreach ($product as $p)
                <tr>
                    <td>{{ $p['id'] }}</td>
                    <td>{{ $p['pname'] }}</td>
                    <td>{{ $p['type'] }}</td>
                    <td>{{ $p['brand'] }}</td>
                    <td>{{ $p['stock'] }}</td>
                    <td>{{ $p['cost'] }}</td>
                    <td>{{ $p['worth'] }}</td>
                    <td>{{ $p['revenue'] }}</td>
                   <td>{{ $p['vendor'] }}</td>
                    <td><a class="btn btn-danger" href="#"
                        onclick="event.preventDefault;
                        if(confirm('are u sure want to delete this product')){
                            document.getElementById('delete-form-{{ $p->id }}').
                            submit();
                        }">Delete</a>
                        <form id="delete-form-{{ $p->id }}"
                            action="{{ route('products.delete', $p->id) }}"
                             method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    <a class="btn btn-dark" href="{{ route('products.edit',['product'=>$p]) }}">Edit</a></td>


                </tr>
           @endforeach
         </tbody>
       </table>
     </div>
   </div>
 </div> <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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


    @endsection
