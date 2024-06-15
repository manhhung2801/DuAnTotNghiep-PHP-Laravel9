@extends('admin.layouts.master')

@section('title', 'Create Sub Category')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Post</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Post</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Create Post_Cate</h6>
                <a href="{{ route("admin.post.index") }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route("admin.post.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="category" class="form-label">Post Categories</label>
                        <select id="category" class="form-select main-category" name="category_id">
                            <option>Select</option>
                            @foreach ($post_categories as $post_categories )
                            <option value="{{$post_categories->id}}">{{$post_categories->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="user" class="form-label">User Id</label>
                        <select id="user" class="form-select" name="user_id">
                            <option>Select</option>
                            @foreach ($user as $user )
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                    <div class="col-md-12">
                        <label for="input7" class="form-label">Title</label>
                        <input type="text" class="form-control" id="input1" name="title" placeholder="title">
                    </div>
                     <div class="col-md-6">
                        <label for="input7" class="form-label">Content</label>
                        <input type="text" class="form-control" id="input1" name="content" placeholder="title">
                    </div>

                    <div class="col-md-6">
                        <label for="input9" class="form-label">Hot</label>
                        <select id="input9" class="form-select" name="type">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Status</label>
                        <select id="input9" class="form-select" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                     <div class="row mt-3">
                        <div class="col-md-6 mb-3">
                            <label for="seotitle" class="form-label">SEO Title</label>
                            <input type="text" class="form-control" id="seotitle" name="seo_title" value="{{ old('seo_title') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="seodesc" class="form-label">SEO Description</label>
                            <input type="text" class="form-control" id="seodesc" name="seo_description" value="{{ old('seo_description') }}">
                        </div>
                    </div>
                    
                      <div class="col-md-12 mb-3">
                        <label for="editor" class="form-label">Description</label>
                        <textarea class="form-control description" name="description" id="editor" value="{{ old('description') }}"></textarea>
                    </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),
        {  
          
            image: {
            toolbar: [ 'toggleImageCaption', 'imageTextAlternative', 'ckboxImageEdit' ]
        }
        } )
            .catch( error => {
                console.error( error );
            } );
</script>

@endsection



