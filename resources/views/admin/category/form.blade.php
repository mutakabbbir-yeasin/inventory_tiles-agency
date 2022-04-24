@extends('layout.header-footer')
@section('content')
<div class="br-pagetitle">
    <h4>Categories</h4>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card ml-3">
            @if(Session('status'))
            <div class="alert alert-success">
                {{ Session('status') }}
            </div> 
            @endif
            <div class="card-header">
                Add New Category
            </div>
            <div class="card-body">
                <form  action="{{url('update/categories/'.$category->id)}}" method="post" enctype="multipart/form-data">
                    
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="categoryname">Category Name</label>
                        <input type="text"  name="category_name" class="form-control @error('category_name') is-invalid @enderror " id="category_name" aria-describedby="cathelp" value="{{$category->category_name}}">
                        
                        @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="category_slug">Category Slug</label>
                        <input type="text" name="category_slug" class="form-control @error('category_slug') is-invalid @enderror  " id="category_slug" value="{{$category->category_slug}}">
                        @error('category_slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_description">Description</label>
                        
                        <textarea name="category_description" class="form-control @error('category_description') is-invalid @enderror " id="category_description"  cols="30" rows="3">{{$category->category_description}}</textarea>
                        @error('category_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_image">Category Image</label>
                        <input type="file" name="category_image" class="form-control @error('category_image') is-invalid @enderror  " id="category_image" placeholder="category_image">
                        <img src="{{ asset('uploads/ProductImg/'.$category->category_image) }}" width="70px" height="70px" alt="Image">
                        
                        @error('category_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-actions">
                            <button type="submit" class="btn btn-info btn-sm">Update Category</button>
                        </div>
                    
                </form>
            </div>
        </div>
    </div>
    
    
</div>
@endsection