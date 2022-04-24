
@extends('layout.header-footer')
@section('content')

<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">Customer Management</a>
    <span class="breadcrumb-item active">Customer List</span>
  </nav>
</div><!-- br-pageheader -->

 <div class="br-pagetitle">
        <div>
          <h4>Customer Management</h4>
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
                <a href="{{route('customer.add-customer')}}" class="btn btn-sm btn-info float-right" >Add New</a>
            </div>
            <div class="card-body">
                
                <div class="table-wrapper">
                    <table id="dtable" class="table display table-fluid responsive nowrap ">
                      <thead>
                        <tr>
                          <th  >Id</th>
                          {{-- <th>Customer Group</th> --}}
                          <th>Customer Name</th>
                          <th>Company Name</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Address</th>
                          <th>Username</th>
                          <th>Password</th>
                          {{-- <th>Due</th> --}}
                          <th>Action</th>
                      </tr>
                      </thead>
                      

                      <tbody>
                        @if(is_countable($customer) && count($customer) > 0) 
                        @foreach ($customer as $customer)
                        <tr>
                            <th >{{$customer ->id}}</th>
                            <td>{{$customer ->customer_name}}</td>
                            <td>{{$customer ->company_name}}</td>
                            <td>{{$customer ->email}}</td>
                            <td>{{$customer ->phone_number}}</td>
                            <td>{{$customer ->address}},<br>{{$customer ->city}},{{$customer ->postal_code}},<br>{{$customer ->country}}</td>
                            <td>{{$customer ->username}}</td>
                            <td>{{$customer ->password}}</td>
                            
                            <td>
                              <a href="{{url('customer/edit/'.$customer->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            {{-- <td>
                              <a href="#" class="btn btn-primary btn-sm">Show</a>
                            </td> --}}
                            <td>
                                <form action="{{ url('customer/delete/'.$customer->id) }}" method="POST">
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
