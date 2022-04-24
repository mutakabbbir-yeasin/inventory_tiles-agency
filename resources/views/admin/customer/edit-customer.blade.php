
@extends('layout.header-footer')
@section('content')

 
<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Dashboard</a>
      <a class="breadcrumb-item" href="#">Customer Management</a>
      <span class="breadcrumb-item active">Customer Add</span>
    </nav>
</div><!-- br-pageheader -->

<div class="br-pagebody">
    
  <div class="card">
      @if(Session('status'))
        <div class="alert alert-success">
            {{ Session('status') }}
        </div>
        @endif
        {{-- <div class="card-header d-flex justify-content-between">
            <h4>Add Customer</h4>
            <a href="{{route('customer.customer-list')}}" class="btn btn-sm btn-info float-right mt-1"> Customer List</a>
        </div> --}}
        <div class="card-header d-flex justify-content-between">
            <h4>Edit Customer</h4>
            <div class="row float-right">
              <div class="col-lg-6 col-md-6 col-12">
                <a href="{{route('customer.add-customer')}}" class="btn btn-sm btn-info  mt-1">Add Customer</a>

              </div>
              <div class="col-lg-6 col-md-6 col-12">
            <a href="{{route('customer.customer-list')}}" class="btn btn-sm btn-info  mt-1"> Customer List</a>
                
              </div>
            </div>
        </div>
  <div class="card-body  ">

     <form action="{{url('customer/update/'.$customer->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
            
            <div class="form-layout form-layout-1  ">
          
                <div class="row mg-b-25 ">
                  <input type="hidden" name="customer_group_id" value="1">
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                    <input type="text" id="name" name="customer_name" required class="form-control" onkeyup='saveValue(this);' value="{{$customer->customer_name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Company Name: </label>
                                    <input type="text" name="company_name" class="form-control" value="{{$customer->company_name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Email: </label>
                                    <input type="email" name="email" placeholder="example@example.com" class="form-control" value="{{$customer->email}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                                    <input type="text" name="phone_number" required class="form-control" value="{{$customer->phone_number}}">
                                    @if($errors->has('phone_number'))
                                   <span>
                                       <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                                    <input type="text" name="address" required class="form-control" value="{{$customer->address}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">City: <span class="tx-danger">*</span></label>
                                    <input type="text" name="city" required class="form-control" value="{{$customer->city}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Psotal Code:</label>
                                    <input type="text" name="postal_code" class="form-control" value="{{$customer->postal_code}}">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                                    <input type="text" name="country" class="form-control" value="{{$customer->country}}">
                                </div>
                            </div>
                            <div class="col-md-4 mt-3">
                              <div class="form-group">
                                <label>Add User<span class="tx-danger">*</span></label>&nbsp;
                                  <input type="checkbox" name="user" value="1" />
                              </div> 
                            </div>
                        </div><!-- row -->
                          <div class="row">
                            <div class="col-md-6 user-input">
                              <div class="form-group">
                                <label class="form-control-label">User Name: <span class="tx-danger">*</span></label>
                                  <input type="text" name="username" class="form-control" value="{{$customer->username}}">
                                  @if($errors->has('name'))
                                 <span>
                                     <strong>{{ $errors->first('username') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>
                          <div class="col-md-6 user-input">
                              <div class="form-group">
                                <label class="form-control-label">Password: <span class="tx-danger">*</span></label>
                                  <input type="password" name="password" class="form-control" value="{{$customer->password}}">
                              </div>
                          </div>
                          <div class="col-lg float-right">
                            <div class="form-group ">
                                <label class="form-control-label mt-4"></span></label>
                                <button class="btn btn-info fluid float-right pd-x-15 " type="submit" value="submit" >Submit</button>
                            </div>
                          </div>
                         </div>  {{-- end of row  --}}

                         
                            
                
              </div><!-- form-layout -->

            </form>
        </div>
    </div>

  </div>


<script type="text/javascript">
    $("ul#people").siblings('a').attr('aria-expanded','true');
    $("ul#people").addClass("show");
    $("ul#people #customer-create-menu").addClass("active");

    $(".user-input").hide();

    $('input[name="user"]').on('change', function() {
        if ($(this).is(':checked')) {
            $('.user-input').show(300);
            $('input[name="name"]').prop('required',true);
            $('input[name="password"]').prop('required',true);
        }
        else{
            $('.user-input').hide(300);
            $('input[name="name"]').prop('required',false);
            $('input[name="password"]').prop('required',false);
        }
    });

    //$("#name").val(getSavedValue("name"));
    //$("#customer-group-id").val(getSavedValue("customer-group-id"));

    function saveValue(e) {
        var id = e.id;  // get the sender's id to save it.
        var val = e.value; // get the value.
        localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override.
    }
    //get the saved value function - return the value of "v" from localStorage.
    function getSavedValue  (v){
        if (!localStorage.getItem(v)) {
            return "";// You can change this to your defualt value.
        }
        return localStorage.getItem(v);
    }
</script>


@endsection
