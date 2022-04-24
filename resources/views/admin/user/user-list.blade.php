
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
    
        <div class="card">
            <div class="card-header">
                <a href="{{route('user.add-user')}}" class="btn btn-sm btn-info float-right" >Add New</a>
            </div>
            <div class="card-body">
                
                <div class="table-wrapper">
                    <table id="dtable" class="table display table-fluid responsive nowrap ">
                      <thead>
                        <tr>
                          <th class="wd-15p">Username</th>
                          <th class="wd-15p">Email</th>
                          <th class="wd-20p">Password</th>
                          <th class="wd-10p">Phone Number</th>
                          <th class="wd-20p">Role</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
              
                    </table>
                  </div><!-- table-wrapper -->



            </div>
        </div>

      </div>
  
      @endsection
