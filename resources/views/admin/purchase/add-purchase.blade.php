
@extends('layout.header-footer')
@section('content')

<div class="br-pageheader">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
      <a class="breadcrumb-item" href="index.html">Dashboard</a>
      <a class="breadcrumb-item" href="#">Customer Management</a>
      <span class="breadcrumb-item active">Customer Add</span>
    </nav>
  </div><!-- br-pageheader -->

  <div class="container-fluid">

    <div class="row">
        <div class="col-lg-6">

        </div>

    </div>
</div>
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="panel">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 ">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                <label for="category_id" class="control-label">Category :* </label>
                                <select class="form-control select2" required="" id="category_id" name="category_id">
                                    {{-- @php
                                        $categories = \App\Category::all();
                                    @endphp --}}
                                    <option value="">Select category</option>
                                    {{-- @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach --}}
                                </select>
                            </div>

                            <div class="col-xs-6">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                <label for="size_id" class="control-label">Size:</label>
                                <select class="form-control select2" required="" id="size_id" name="size_id">
                                    {{-- @php
                                        $sizes = \App\Size::all();
                                    @endphp --}}
                                    <option value="">Select size</option>
                                    {{-- @foreach($sizes as $size)
                                        <option value="{{$size->id}}">{{$size->size}}</option>
                                    @endforeach --}}
                                </select>
                            </div>

                            <div class="col-xs-6">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                <label for="grade_id" class="control-label">Grade:</label>
                                <select class="form-control" required="" id="grade_id" name="grade_id">
                                    {{-- @php
                                        $grades = \App\Grade::all();
                                    @endphp --}}
                                    <option value="">Select grade</option>
                                    {{-- @foreach($grades as $grade)
                                        <option value="{{$grade->id}}">{{$grade->name}}</option>
                                    @endforeach --}}
                                </select>
                            </div>

                            <div class="col-xs-12">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                <label for="product" class="control-label">Brand:* </label>
                                <select class="form-control select2" required="" id="brand_id" name="brand_id">
                                    {{-- @php
                                        $brands = \App\Brand::all();
                                    @endphp --}}
                                    <option value="">Select brand</option>
                                    {{-- @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->title}}</option>
                                    @endforeach --}}

                                </select>
                            </div>

                            <div class="col-xs-12">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                <label for="product_list " class="control-label">Tiles Name:* </label>
                                <select class="form-control select2" required="" id="product_list" name="product_id">

                                </select>
                            </div>

                            <div class="col-xs-12">
                                <label for="" class="control-label">Price per sqft</label>
                                <input type="number" class="form-control" name="pricePerSqft" id="pricePerSqft">
                            </div>

                            <div class="col-xs-4">
                                <label for="" class="control-label">Sqft</label>
                                <input type="number" class="form-control" name="perProductSft" id="perProductSft">
<!--                                    <input id="product_qty" class="form-control" name="qty" type="number" step="1">-->
                            </div>
                            <div class="col-xs-4">
                                <label for="" class="control-label">Box</label>
                                <input type="number" class="form-control" name="tiles_box" id="tiles_box" readonly>
                            </div>
                            <div class="col-xs-4">
                                <label for="" class="control-label">Pcs</label>
                                <input type="number" class="form-control" name="tiles_pcs" id="tiles_pcs" readonly>
                            </div>
<!--                                <input type="hidden" name="perProductSft" id="perProductSft">-->
<!--                                <input type="number" name="tiles_box" id="tiles_box" readonly>-->
<!--                                <input type="number" name="tiles_pcs" id="tiles_pcs" readonly>-->
                            <input id="price" name="price" type="hidden">
                            <div class="col-xs-12">
                                <span style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                <div class="form-group">
                                    <button class="btn btn-info" type="button" id="add_bucket">
                                        Add To Bucket
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel">
                    <div class="panel-heading panel-title d-flex align-items-center">
                        <h4 class="panel-title">{{trans('file.Add Purchase')}}</h4>
                    </div>
                    <div class="panel-body">
                        <p class="italic">
                            <small>{{trans('file.The field labels marked with * are required input fields')}}
                                .</small></p>
                        {{-- {!! Form::open(['route' => 'purchases.store', 'method' => 'post', 'files' => true, 'id' => 'purchase-form']) !!} --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <input type="hidden" name="warehouse_id" value="">

                                <!--                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{trans('file.Warehouse')}} *</label>
                                            <select required name="warehouse_id" class="selectpicker form-control"
                                                    data-live-search="true" data-live-search-style="begins"
                                                    title="Select warehouse...">
                                                {{-- @foreach($lims_warehouse_list as $warehouse)
                                                    <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>-->
<!--                                        <div class="col-md-6">
                                        <div class="form-group">
                                            {{-- <label>{{trans('file.Supplier')}}</label> --}}
                                            <select name="" class="selectpicker form-control"
                                                    data-live-search="true" data-live-search-style="begins"
                                                    title="Select supplier...">
                                                {{-- @foreach($lims_supplier_list as $supplier)
                                                    <option
                                                        value="{{$supplier->id}}">{{$supplier->name .' ('. $supplier->company_name .')'}}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>
                                    </div>-->
                                </div>
                                <input type="hidden" name="status" value="1">
                                <div class="row">
<!--                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{trans('file.Purchase Status')}}</label>
                                            <select name="status" class="form-control">
                                                <option value="1">{{trans('file.Recieved')}}</option>
                                                <option value="2">{{trans('file.Partial')}}</option>
                                                <option value="3">{{trans('file.Pending')}}</option>
                                                <option value="4">{{trans('file.Ordered')}}</option>
                                            </select>
                                        </div>
                                    </div>-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{trans('file.Attach Document')}}</label> <i
                                                class="dripicons-question" data-toggle="tooltip"
                                                title="Only jpg, jpeg, png, gif, pdf, csv, docx, xlsx and txt file is supported"></i>
                                            <input type="file" name="document" class="form-control">
                                            {{-- @if($errors->has('extension'))
                                                <span>
                                               <strong>{{ $errors->first('extension') }}</strong>
                                            </span>
                                            @endif --}}
                                        </div>
                                    </div>
<!--                                        <div class="col-md-12 mt-3">
                                        <label>{{trans('file.Select Product')}}</label>
                                        <div class="search-box input-group">
                                            <button class="btn btn-secondary"><i class="fa fa-barcode"></i></button>
                                            <input type="text" name="product_code_name" id="lims_productcodeSearch"
                                                   placeholder="Please type product code and select..."
                                                   class="form-control"/>
                                        </div>
                                    </div>-->
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <h5>{{trans('file.Order Table')}} *</h5>
                                        <div class="table-responsive mt-3">
                                            <table id="myTable" class="table table-bordered order-list">
                                                <thead>
                                                <tr>
                                                    <th rowspan="2">Name</th>
                                                    <th rowspan="2">Code</th>
                                                    <th rowspan="2">SQFT</th>
                                                    <th class="text-center" colspan="2" scope="colgroup">Quantity
                                                    </th>
                                                    <th rowspan="2">Cost <br> <span style="font-size: 10px">(per sqft)</span>
                                                    </th>
                                                    <th rowspan="2">Sub Total</th>
                                                    <th rowspan="2"><i class="dripicons-trash"></i></th>
                                                </tr>
                                                <tr>
                                                    <th scope="col">Box</th>
                                                    <th scope="col">Pc(s)</th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                </tbody>
                                                <tfoot class="tfoot active">
                                                <th colspan="2">{{trans('file.Total')}}</th>
                                                <th id="total-qty">0</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th id="total">0.00</th>
                                                <th><i class="dripicons-trash"></i></th>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <input type="hidden" name="warehouse" id="warehouse" value="1">
                                                <h4 class="text-center bg-primary" style="padding: 8px 0">Supplier
                                                    Information : </h4>
                                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                    <label for="searchsupplier" class="label-control">Search
                                                        Supplier</label>
                                                    <select class="form-control" id="supplier_id"
                                                            name="supplier_id">
                                                        <option selected="selected" value="">Select Supplier
                                                        </option>
                                                        {{-- @foreach($lims_supplier_list as $supplier)
                                                            <option
                                                                value="{{$supplier->id}}">{{$supplier->name .' ('. $supplier->company_name .')'}}</option>
                                                        @endforeach --}}
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 col-sm-6 col-xs-12 ">
                                                    <span
                                                        style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                    <label for="customername" class="label-control">Supplier Name
                                                        : </label>
                                                    <input class="form-control" id="name" placeholder="Ex. Mr.xyz"
                                                           name="name" type="text">

                                                </div>
                                                <div class="col-lg-6 col-sm-6 col-xs-12 ">
                                                    <span
                                                        style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                    <label for="customerphone" class="label-control">Supplier Phone
                                                        : </label>
                                                    <input class="form-control" placeholder="Ex : 923584596"
                                                           id="phone" name="phone"
                                                           type="number">
                                                    <input name="product_type" type="hidden" value="standard">
                                                </div>

                                                <div class="col-lg-12 col-sm-12 col-xs-12">
                                                    <span
                                                        style="display: block;height: 10px;width: 100%;background: #fff;"></span>
                                                    <label for="customeraddress" class="label-control">Supplier
                                                        Address : </label>
                                                    <textarea id="address" class="form-control"
                                                              placeholder="New York City" rows="5"
                                                              cols="10" name="address"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-responsive table-borderless">
                                                <tbody>
                                                <tr>
                                                    <td>Carrying & Loading Charge</td>
                                                    <td>
                                                        <input type="number" id="carrying_charge" name="carrying_charge" class="form-control" placeholder="0.00">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Vat</td>
                                                    <td>
                                                        <input type="number" name="vat_charge" id="vat_charge" class="form-control" placeholder="0.00">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span>Total Amount : </span></td>
                                                    <td>
                                                        <input class="form-control" id="paying_amount" readonly=""
                                                               name="paying_amount" type="number">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <span> Total Discount : </span>
                                                    </td>
                                                    <td>
                                                        <input class="form-control" id="order_discount"
                                                               name="order_discount" type="number" step="any">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span> Total Due : </span></td>
                                                    <td>
                                                        <p class="change ml-2">0.00</p>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td><span> Total Paid : </span></td>
                                                    <td>
                                                        <input class="form-control" id="amount" name="amount"
                                                               type="number" step="any" required>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><span> Payment Type : </span></td>
                                                    <td>
                                                        <select name="paid_by_id" class="form-control">
                                                            <option value="1">Cash</option>
                                                            <option value="2">Bank Cheque</option>
                                                            <option value="6">Cash & Bank Cheque</option>
                                                            <option value="3">bKash</option>
                                                            <option value="4">Rocket</option>
                                                            <option value="5">Nagad</option>
                                                        </select>
                                                        <div id="cheque">
                                                            <div class="form-group">
                                                                <label>Bank Name*</label>
                                                                <input type="text" name="bank_name"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Branch Name</label>
                                                                <input type="text" name="branch_name"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>{{trans('file.Cheque Number')}} *</label>
                                                                <input type="text" name="cheque_no"
                                                                       class="form-control">
                                                            </div>
                                                        </div>
                                                        <div id="phone_number">
                                                            <label>Pay From *</label>
                                                            <input type="text" name="pay_from" class="form-control">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr id="cash_cheque">
                                                    <td colspan="2">
                                                            <div class="cash_cheque">
                                                                <label class="control-label">Cash Amount:</label>
                                                                <input class="form-control" name="cash_amount" type="number">
                                                                <label class="control-label">Cheque Amount:</label>
                                                                <input class="form-control" name="cheque_amount" type="number">
                                                                <div class="form-group">
                                                                    <label>Bank Name*</label>
                                                                    <input type="text" name="bank_name"
                                                                           class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Branch Name</label>
                                                                    <input type="text" name="branch_name"
                                                                           class="form-control">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>{{trans('file.Cheque Number')}} *</label>
                                                                    <input type="text" name="cheque_no"
                                                                           class="form-control">
                                                                </div>
                                                            </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span> Purchase Date : </span></td>
                                                    <td>
                                                        <input class="form-control datepicker" name="custom_date"
                                                               type="date">
                                                    </td>
                                                </tr>
                                                </tbody>
                                                <input type="hidden" name="balance">
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{trans('file.Note')}}</label>
                                        <textarea rows="5" class="form-control" name="note"></textarea>
                                    </div>
                                </div>
                            </div>
                                <div class="row">

                                    <button type="submit" class="btn btn-info" id="submit-btn">PRODUCT PURCHASE
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="total_qty"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="total_discount"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="total_cost"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="item"/>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="hidden" name="grand_total"/>
                                            <input type="hidden" name="paid_amount" value="0.00"/>
                                            <input type="hidden" name="payment_status" value="1"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        {{-- {!! Form::close() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <table class="table table-bordered table-condensed totals">
            <td><strong>{{trans('file.Items')}}</strong>
                <span class="pull-right" id="item">0.00</span>
            </td>
            <td><strong>{{trans('file.Total')}}</strong>
                <span class="pull-right" id="subtotal">0.00</span>
            </td>

            <td><strong>{{trans('file.Order Discount')}}</strong>
                <span class="pull-right" id="order_discount">0.00</span>
            </td>

            <td><strong>{{trans('file.grand total')}}</strong>
                <span class="pull-right" id="grand_total">0.00</span>
            </td>
        </table>
    </div>
    <div id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
         class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="modal-header" class="modal-title"></h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span
                            aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>{{trans('file.Quantity')}}</label>
                            <input type="number" name="edit_qty" class="form-control" step="any">
                        </div>
<!--                           <div class="form-group">
                            <label>{{trans('file.Unit Discount')}}</label>
                            <input type="number" name="edit_discount" class="form-control" step="any">
                        </div>-->
                        <div class="form-group">
                            <label>{{trans('file.Unit Cost')}}</label>
                            <input type="number" name="edit_unit_cost" class="form-control" step="any">
                        </div>
                        //<?php
                        // $tax_name_all[] = 'No Tax';
                        // $tax_rate_all[] = 0;
                        // foreach ($lims_tax_list as $tax) {
                        //     $tax_name_all[] = $tax->name;
                        //     $tax_rate_all[] = $tax->rate;
                        // }
                        ?> 
<!--                            <div class="form-group">
                            <label>{{trans('file.Tax Rate')}}</label>
                            <select name="edit_tax_rate" class="form-control selectpicker">
                                {{-- @foreach($tax_name_all as $key => $name)
                                    <option value="{{$key}}">{{$name}}</option>
                                @endforeach --}}
                            </select>
                        </div>-->
                        <div class="form-group">
                            <label>{{trans('file.Product Unit')}}</label>
                            <select name="edit_unit" class="form-control selectpicker">
                            </select>
                        </div>
                        <button type="button" name="update_btn"
                                class="btn btn-primary">{{trans('file.update')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>