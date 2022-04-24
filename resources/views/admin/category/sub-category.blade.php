
@extends('layout.header-footer')
@section('content')

 <div class="br-pagetitle">
          <h4>Sub Categories</h4>
      </div>

<div class="row">
 <div class="col-md-4">
     <div class="card ml-3">
         <div class="card-header">
             Add New Sub Category
         </div>
         <div class="card-body">
            <form>
                <div class="form-group">
                  <label for="categoryname">Sub Category Name</label>
                  <input type="text" name="category_name" class="form-control" id="categoryname" aria-describedby="cathelp" placeholder="Category Name">
                  
                 
                </div>
                <div class="form-group">
                  <label for="category_slug">Sub Category Slug</label>
                  <input type="text" name="category_slug" class="form-control" id="category_slug" placeholder="category_slug">
                  
                </div>
                <div class="form-group">
                  <label for="subcategory_inage">Sub Category Image</label>
                  <input type="file" name="subcategory_inage" class="form-control" id="subcategory_inage" placeholder="category_slug">
                  
                </div>
                 <div class="form-group">
                   <div class="form-group mg-md-l--1 bd-t-0-force">
                                <label class="form-control-label ">Category: <span class="tx-danger">*</span></label>
                                <select id="select2-a" class="form-control" data-placeholder="Choose country">
                                  <option label="Choose District"></option>
                                  <option value="USA" selected>Category 1</option>
                                  <option value="UK">Category 2</option>
                                  <option value="China">Category 3</option>
                                 
                                </select>
                              </div>
                </div>
         
                <button type="submit" class="btn btn-info btn-sm">Add New Sub Category</button>
              </form>
         </div>
     </div>
 </div>
 
 <div class="col-md-8">
    <div class="card mr-3 ">
        <div class="card-header">
           SubCategory List
        </div>
        <div class="card-body">
            <table class="table table-bordered  able-sm table-striped">
                <thead>
                  <tr>
                    <th  width="7%" >ID</th>
                    <th width="20%" >Sub Category Name</th>
                    <th   width="20%" >Category Name</th>
                    <th width="15%" >Slug</th>
                    <th width="18%" >Image</th>
                    <th  width="20" >Action</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <th ></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td >
                      <a href="#" class="btn btn-info btn-sm  "><i class="fa-solid fa-pen-to-square"></i></a>
                      <a href="#" class="btn btn-danger btn-sm "><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                   
                  </tr>  
                
                 
              
                </tbody>
              </table>
        </div>
    </div>
</div>
</div>


      @endsection

