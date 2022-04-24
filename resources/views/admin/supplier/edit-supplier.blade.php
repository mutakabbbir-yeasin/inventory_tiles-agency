
@extends('layout.header-footer')
@section('content')


<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Dashboard</a>
      <a class="breadcrumb-item" href="#">Supplier Management</a>
      <span class="breadcrumb-item active">Spplier Edit</span>
    </nav>
  </div><!-- br-pageheader -->


 <div class="br-pagetitle">
        <div>
          <h4>Supplier Management</h4>
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
                <h4>Edit Supplier</h4>
                <div class="row float-right">
                  <div class="col-lg-6 col-md-6 col-12">
                    <a href="{{route('supplier.add-supplier')}}" class="btn btn-sm btn-info  mt-1">Add Supplier</a>

                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                <a href="{{route('supplier.supplier-list')}}" class="btn btn-sm btn-info  mt-1"> Supplier List</a>
                    
                  </div>
                </div>
            </div>
            <div class="card-body  ">

         <form action="{{url('supplier/update/'.$supplier->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{method_field('PUT')}}
                
                <div class="form-layout form-layout-1  ">
              
                    <div class="row mg-b-25 ">
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">First Name: <span class="tx-danger">*</span></label>
                          <input class="form-control " type="text" name="first_name"  placeholder="Enter first name" value="{{$supplier->first_name}}">
                        </div>
                      </div><!-- col-4 -->

                      
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Last Name: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="last_name" placeholder="Enter last name" value="{{$supplier->last_name}}">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4 " >
                        <label for="exampleFormControlFile1">Photo Upload</label>
                        
                          <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                              <img style="height: 10vh" src="{{asset('uploads/suppliers/'.$supplier->supplier_image)}}" alt="image" class="img-thumbnail">
                            </div>
                            <div class="col-lg-8 col-md-6 col-12">
                              <div class="form-group border d-flex justify-content-between ">
                              <input type="file" name="supplier_image" class="form-control-file" id="exampleFormControlFile1" style="height: 40px" value="{{$supplier->supplier_image}}">
                            </div>
                          </div>
                                
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Company Name: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="company_name"  placeholder="Enter company name" value="{{$supplier->company_name}}">
                        </div>
                      </div><!-- col-4 -->  
                        <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">VAT Number: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="vat_num" placeholder="Enter Vat numbev" value="{{$supplier->vat_num}}">
                        </div>
                      </div><!-- col-4 --> 
                           <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="email" name="email" placeholder="example@example.com" value="{{$supplier->email}}">
                        </div>
                      </div><!-- col-4 -->
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="Phone"  placeholder="+880 1000000000" value="{{$supplier->Phone}}">
                        </div>
                      </div><!-- col-4 --> 

                       <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="address_1"  placeholder="Area, House, Flat No.." value="{{$supplier->address_1}}">
                        </div>
                      </div><!-- col-4 --> 
                      
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label">Address line 2: </span></label>
                          <input class="form-control" type="text" name="address_2"  placeholder="Optional.." value="{{$supplier->address_2}}">
                        </div>
                      </div><!-- col-4 -->

                      <div class="col-lg-2">
                        <div class="form-group ">
                            <label class="form-control-label ">Country: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" name="country"  placeholder="Country name.." value="{{$supplier->country}}">
                            {{-- <select id="select2-a" name="country" class="form-control" data-placeholder="Choose country" value="{{$supplier->country}}">
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
                                <input class="form-control" type="text" name="district"  placeholder="District name.." value="{{$supplier->district}}">
                                {{-- <select id="select2-a" name="district" class="form-control" data-placeholder="Choose district" value="{{$supplier->district}}">
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
                          <input class="form-control" type="text" name="thana"  placeholder="State/City" value="{{$supplier->thana}}">
                        </div>
                      </div><!-- col-4 --> 
                      <div class="col-lg-2">
                        <div class="form-group">
                          <label class="form-control-label">Postal/Zip Code: <span class="tx-danger">*</span></label>
                          <input class="form-control" type="text" name="postal"  placeholder="Postal/Zip Code" value="{{$supplier->postal}}">
                        </div>
                      </div><!-- col-4 -->
          </form>

                      <div class="col-lg float-right mt-4">
                        <div class="form-group ">
                          <button type="submit" class="btn btn-info">Update</button>
                        </div>
                      </div><!-- col-4 -->
                    </div><!-- row -->

        
                    <!-- form-layout-footer -->
                  </div><!-- form-layout -->


            </div>
        </div>

      </div>
  
      @endsection
