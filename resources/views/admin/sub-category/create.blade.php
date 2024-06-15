@extends('admin.layouts.master')

@section('title', 'Create Sub Category')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Categories</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Sub Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Create Sub Category</h6>
                <a href="{{ route("admin.sub-category.index") }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form class="g-3" action="{{ route("admin.sub-category.store") }}" method="POST" enctype="multipart/form-data">>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input7" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                        </div>
                        <div class="col-md-6">
                            <label for="input1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="input1" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <label for="input7" class="form-label">Categories</label>
                            <select id="input9" class="form-select" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="input9" class="form-label">Status</label>
                            <select id="input9" class="form-select" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="col-md-2 mt-4">
                            <div class="d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


