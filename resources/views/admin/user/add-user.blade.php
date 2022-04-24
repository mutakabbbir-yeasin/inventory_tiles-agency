
@extends('layout.header-footer')
@section('content')

 
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Dashboard</a>
      <a class="breadcrumb-item" href="#">User Management</a>
      <span class="breadcrumb-item active">User Add</span>
    </nav>
  </div><!-- br-pageheader -->
 

 <div class="br-pagetitle">
        <div>
          <h4>User Management</h4>
        </div>
      </div><!-- d-flex -->
  
      <div class="br-pagebody">
    
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Add User</h4>
                <a href="{{route('user.user-list')}}" class="btn btn-sm btn-info float-right mt-1"> User List</a>
            </div>
            <div class="card-body  ">

         
              <div class="form-layout form-layout-1  ">
            
                <div class="row mg-b-25 ">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label">Username: <span class="tx-danger">*</span></label>
                      <input class="form-control " type="text" name="username"  placeholder="Enter firstname">
                    </div>
                  </div><!-- col-4 -->
                       <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="email" name="email" placeholder="example@example.com">
                       </div>
                      </div><!-- col-4 -->  
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label  class="form-control-label">Password: <span class="tx-danger">*</span></label>
                              <input type="password" name="password" class="form-control" placeholder="Password">
                          </div>
                      </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="Phone"  placeholder="+880 1000000000">
                      </div>
                    </div>

                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label">Role: <span class="tx-danger">*</span></label>
                          <select id="select2-a" class="form-control" data-placeholder="Choose country">
                            <option label="Choose country"></option>
                            <option value="USA" selected>Admin</option>
                            <option value="UK">Owner</option>
                            <option value="China">Manager</option>
                            <option value="Japan">Sales Man</option>
                          </select>
                        </div>
                      </div>

                      <div class=" col-lg-6" >
                      
                      </div>
                      
                      <div class="form-group col-lg-6 mt-2" >
                        <input type="checkbox" name="is_active" value="1" checked>
                        <label ><strong>Active</strong></label>
                      </div>
                    
            

                  <div class="col-lg float-right">
                    <div class="form-group ">
                        <label class="form-control-label mt-4"></span></label>
                        <button class="btn btn-info fluid float-right pd-x-15 "><i class="fa fa-floppy-disk"></i> Save Now</button>
                    </div>
                  </div><!-- col-4 -->
                </div><!-- row -->

    
                {{-- <div class="form-layout-footer">
                  <button class="btn btn-info">Submit Form</button>
                  <button class="btn btn-secondary">Cancel</button>
                </div> --}}
                <!-- form-layout-footer -->
              </div>


            </div>
        </div>

      </div>
  
      @endsection
