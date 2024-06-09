@extends('admin.layouts.master')

@section('title', 'Update Variant')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Post Category</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Post Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Update Post Category</h6>
                <a href="{{ route("admin.post.index") }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                     <div class="col-md-6">
                        <label for="category" class="form-label">Post Categories</label>
                        <select id="category" class="form-select main-category" name="category_id">
                            <option>Select</option>
                            @foreach ($post_categories as $post_categories )
                             <option {{ $post->category_id == $post_categories->id ? "selected" : "" }} value="{{ $post_categories->id }}">{{ $post_categories->name }}</option>
                            @endforeach
                        </select>
                    </div>
                       <div class="col-md-6">
                        <label for="user" class="form-label">User Id</label>
                        <select id="user" class="form-select" name="user_id">
                            <option>Select</option>
                            @foreach ($user as $user )
                             <option {{ $post->user_id == $user->id ? "selected" : "" }} value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        <img src="{{ asset('uploads/post/'.$post->image) }}" alt="{{$post->image}}" width="50px">
                        <input type="hidden" value="{{$post->image}}" name="image_old">
                    </div>
                     <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Title</label>
                    <input type="text" class="form-control" id="name" name="title" placeholder="title" value="{{ $post->title }}">
                     </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Status</label>
                        <select id="input9" class="form-select" name="status">
                            <option {{ $post_categories->status == 1 ? "selected" : ""  }}  value="1">Active</option>
                            <option {{ $post_categories->status == 0 ? "selected" : ""  }}  value="0">Inactive</option>
                        </select>
                    </div>

                       <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <label for="seotitle" class="form-label">SEO Title</label>
                                <input type="text" class="form-control" id="seotitle" name="seo_title" value="{{ $post->seo_title }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="seodesc" class="form-label">SEO Description</label>
                                <input type="text" class="form-control" id="seodesc" name="seo_description" value="{{ $post->seo_description }}">
                            </div>
                       </div>
                       <div class="col-md-12 mb-3">
                            <label for="editor" class="form-label">Description</label>
                            <textarea class="form-control description" name="description" id="editor">{!! $post->description !!}</textarea>
                      </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


