
@extends('layout.header-footer')
@section('content')


<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Dashboard</a>
      <a class="breadcrumb-item" href="#">Biller Management</a>
      <span class="breadcrumb-item active">Biller Add</span>
    </nav>
  </div><!-- br-pageheader -->


 <div class="br-pagetitle">
        <div>
          <h4>Biller Management</h4>
        </div>
      </div><!-- d-flex -->
  
  <div class="br-pagebody">
    
      <div class="card">
          @if(Session('status'))
            <div class="alert alert-success">
                {{ Session('status') }}
            </div>
            @endif
            <div class="card-header d-flex justify-content-between">
                <h4>Add Biller</h4>
                <a href="{{route('biller.biller-list')}}" class="btn btn-sm btn-info float-right mt-1"> Biller List</a>
            </div>
      <div class="card-body  ">

         <form action="{{route('biller.store')}}" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
                
                <div class="form-layout form-layout-1  ">
              
                    <div class="row mg-b-25 ">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
                          <input class="form-control " type="text" name="first_name"  placeholder="Enter first name">
                        </div>
                      </div><!-- col-4 -->

                      
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="last_name" placeholder="Enter last name">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4 " ><label for="exampleFormControlFile1">Photo Upload</label>
                        <div class="form-group border d-flex justify-content-between ">
                                <input type="file" name="biller_image" class="form-control-file" id="exampleFormControlFile1" style="height: 40px">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="company_name"  placeholder="Enter company name">
                        </div>
                      </div><!-- col-4 -->  
                        <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">VAT Number: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="vat_num" placeholder="Enter Vat numbev">
                        </div>
                      </div><!-- col-4 --> 
                           <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="email" name="email" placeholder="example@example.com">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="Phone"  placeholder="+880 1000000000">
                        </div>
                      </div><!-- col-4 --> 

                       <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="address_1"  placeholder="Area, House, Flat No..">
                        </div>
                      </div><!-- col-4 --> 
                      
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Address line 2: </span></label>
                          <input class="form-control" type="text" name="address_2"  placeholder="Optional..">
                        </div>
                      </div><!-- col-4 -->

                      <div class="col-lg-2">
                        <div class="form-group ">
                            <label class="form-control-label ">Country: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="country"  placeholder="Country name..">

                            {{-- <select id="select2-a" name="country" class="form-control" data-placeholder="Choose country">
                              <option label="Choose country"></option>
                              <option value="Bangladesh" selected>Bangladesh</option>
                              <option value="UK">United Kingdom</option>
                              <option value="China">China</option>
                              <option value="Japan">Japan</option>
                            </select> --}}
                          </div>
                      </div><!-- col-4 -->  
                        <div class="col-lg-2">
                            <div class="form-group mg-md-l--1 bd-t-0-force">
                                <label class="form-control-label ">District: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="district"  placeholder="District name..">
                                {{-- <select id="select2-a" name="district" class="form-control" data-placeholder="Choose district">
                                  <option label="Choose District"></option>
                                  <option value="Gopalganj" selected>Gopalganj</option>
                                  <option value="Chittagong">Chittagong</option>
                                  <option value="Khulna">Khulna</option>
                                  <option value="Faridpur">Faridpur</option>
                                </select> --}}
                              </div>
                      </div><!-- col-4 --> 
                      <div class="col-lg-2">
                        <div class="form-group">
                          <label class="form-control-label">Thana: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="thana"  placeholder="State/City">
                        </div>
                      </div><!-- col-4 --> 
                      <div class="col-lg-2">
                        <div class="form-group">
                          <label class="form-control-label">Postal/Zip Code: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="postal"  placeholder="Postal/Zip Code">
                        </div>
                      </div><!-- col-4 -->
                      {{-- <input type="submit" name="submit" class="btn btn-primary float-right mt-5" > --}}
         

                      <div class="col-lg float-right">
                        <div class="form-group ">
                            <label class="form-control-label mt-4"></span></label>
                            <button class="btn btn-info fluid float-right pd-x-15 " type="submit" value="submit" >Submit</button>
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->
                  </div><!-- form-layout -->

                </form>
            </div>
        </div>

      </div>
  
      @endsection
