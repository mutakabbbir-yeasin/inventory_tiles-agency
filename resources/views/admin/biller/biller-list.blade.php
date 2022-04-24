
@extends('layout.header-footer')
@section('content')

<div class="br-pageheader">
  <nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <a class="breadcrumb-item" href="#">Biller Management</a>
    <span class="breadcrumb-item active">Biller List</span>
  </nav>
</div><!-- br-pageheader -->

 <div class="br-pagetitle">
  
        <div>
          <h4>Biller Management</h4>
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
                <a href="{{route('biller.add-biller')}}" class="btn btn-sm btn-info float-right" >Add New</a>
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
                        @if(count($biller) > 0)
                        @foreach ($biller as $biller)
                        <tr>
                            <th scope="row">{{$biller ->id}}</th>
                            <td>{{$biller ->first_name}}</td>
                            <td>{{$biller ->last_name}}</td>
                            <td>
                              <img style="height: 10vh"  src="{{ asset('uploads/billers/'.$biller->biller_image)}}" alt="image">
                            </td>
                            <td>{{$biller ->company_name}}</td>
                            <td>{{$biller ->vat_num}}</td>
                            <td>{{$biller ->email}}</td>
                            {{-- <td>{{$biller ->Phone}}</td> --}}
                            <td>{{$biller ->address_1}},<br>{{$biller ->address_2}},{{$biller ->country}},<br>{{$biller ->district}},{{$biller ->thana}},<br>{{$biller ->postal}}</td>
                            
                            <td>
                              <a href="{{url('biller/edit/'.$biller->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            </td>
                            <td>
                              <a href="#" class="btn btn-primary btn-sm">Show</a>
                            </td>
                            <td>
                                <form action="{{ url('biller/delete/'.$biller->id) }}" method="POST">
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
