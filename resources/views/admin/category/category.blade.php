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
                <form method="post" id="sample_form" action="{{url('/category-store')}}"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="categoryname">Category Name</label>
                        <input type="text"  name="category_name" class="form-control @error('category_name') is-invalid @enderror " id="category_name" aria-describedby="cathelp" placeholder="Category Name">
                        
                        @error('category_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
                    </div> 
                    <div class="form-group">
                        <label for="category_slug">Category Slug</label>
                        <input type="text" name="category_slug" class="form-control @error('category_slug') is-invalid @enderror  " id="category_slug" placeholder="category_slug">
                        @error('category_slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_description">Description</label>
                        
                        <textarea name="category_description" class="form-control @error('category_description') is-invalid @enderror " id="category_description" placeholder="Description" cols="30" rows="3"></textarea>
                        @error('category_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="category_image">Category Image</label>
                        <input type="file" name="category_image" class="form-control @error('category_image') is-invalid @enderror  " id="category_image" placeholder="category_image">
                        @error('category_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-info btn-sm">Add New Category</button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-8">
        <div class="card mr-3 ">
            <div class="card-header">
                Category List
            </div>
            <div class="card-body">
                <table id="dtable2" class="table table-bordered  able-sm table-striped">
                    <thead>
                        <tr>
                            <th  width="10%">ID</th>
                            <th  width="20%">Category Name</th>
                            <th  width="30%" >Description</th>
                            <th  width="20%">Status</th>
                            <th  width="20">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <th >{{$category->id}}</th>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_description}}</td>
                            <td>
                                @if($category->status==1)
                                <span class="label label-primary">Active</span>
                                @else
                                <span class="label label-danger">Deactive</span>
                                
                            @endif</td>
                            <td >
                                @if($category->status==1)
                                <a href="{{ url('/cat-status-active'.$category->id) }}" class="btn btn-outline-warning btn-sm  " >
                                    <i class="icon ion-arrow-down-a"></i>
                                </a>
                                @else
                                <a href="{{ url('/cat-status-inactive'.$category->id) }}" class="btn btn-outline-danger" >
                                    <i class="icon ion-arrow-up-a"></i>
                                </a>
                                @endif
                                
                                <a href="{{url('edit/categories'.$category->id)}}" class="btn btn-info btn-sm " ><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{url('delete-category/'.$category->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                    
                                    
                                </form>
                            </td>
                            
                        </tr>
                        @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection