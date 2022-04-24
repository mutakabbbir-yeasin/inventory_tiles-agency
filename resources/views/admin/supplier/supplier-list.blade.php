
@extends('layout.header-footer')
@section('content')

<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">Supplier Management</a>
    <span class="breadcrumb-item active">Supplier List</span>
  </nav>
</div><!-- br-pageheader -->

 <div class="br-pagetitle">
  
        <div>
          <h4>Supplier Management</h4>
        </div>
      </div><!-- d-flex -->
     
  
      <div class="br-pagebody">
        @if(Session('status'))
        <div class="alert alert-success">
            {{ Session('status') }}
        </div>
      @endif
    
        <div class="card">
            <div class="card-header">
                <a href="{{route('supplier.add-supplier')}}" class="btn btn-sm btn-info float-right" >Add New</a>
            </div>
            <div class="card-body">
                
                <div class="table-wrapper">
                    <table id="dtable" class="table display table-fluid responsive nowrap ">
                      <thead>
                        <tr>
                          <th  scope="col">Id</th>
                          <th  scope="col">First Name</th>
                          <th  scope="col">Last Name</th>
                          <th  scope="col">Image</th>
                          <th  scope="col">Company Name</th>
                          <th  scope="col">VAT Number</th>
                          <th  scope="col">Email</th>
                          {{-- <th  scope="col">Phone Number</th> --}}
                          <th  scope="col">Address</th>
                          <th  scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($supplier) > 0)
                        @foreach ($supplier as $supplier)
                        <tr>
                            <th scope="row">{{$supplier ->id}}</th>
                            <td>{{$supplier->first_name}}</td>
                            <td>{{$supplier->last_name}}</td>
                            <td>
                              <img style="height: 10vh"  src="{{ asset('uploads/suppliers/'.$supplier->supplier_image)}}" alt="image">
                            </td>
                            <td>{{$supplier->company_name}}</td>
                            <td>{{$supplier->vat_num}}</td>
                            <td>{{$supplier->email}}</td>
                            {{-- <td>{{$supplier ->Phone}}</td> --}}
                            <td>{{$supplier->address_1}},<br>{{$supplier->address_2}},{{$supplier->country}},<br>{{$supplier->district}},{{$supplier->thana}},<br>{{$supplier->postal}}</td>
                            
                            <td>
                              <a href="{{url('supplier/edit/'.$supplier->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            {{-- <td>
                              <a href="#" class="btn btn-primary btn-sm">Show</a>
                            </td> --}}
                            <td>
                                <form action="{{url('supplier/delete/'.$supplier->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        
                        </tbody>
              
                    </table>
                  </div><!-- table-wrapper -->



            </div>
        </div>

      </div>
  
      @endsection
