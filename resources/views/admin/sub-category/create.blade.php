@extends('admin.layouts.master')

@section('title', 'Danh Mục Phụ')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Danh Mục</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh Mục Phụ</li>
                        <li class="breadcrumb-item active" aria-current="page">Tạo Mới</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Tạo Mới</h6>
                <a href="{{ route("admin.sub-category.index") }}" class="btn btn-primary float-end">Quay Lại</a>
            </div>
            <div class="card-body">
                <form class="g-3" action="{{ route("admin.sub-category.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input7" class="form-label">Hình Ảnh</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="col-md-6">
                            <label for="input1" class="form-label">Tên</label>
                            <input type="text" class="form-control" id="input1" name="name" placeholder="Nhập Tên">
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="input7" class="form-label">Danh Mục</label>
                            <select id="input9" class="form-select" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mt-3">
                            <label for="input9" class="form-label">Trạng Thái</label>
                            <select id="input9" class="form-select" name="status">
                                <option value="1">Hoạt Động</option>
                                <option value="0">Không Hoạt Động</option>
                            </select>
                        </div>
                        <div class="col-md-2 mt-4">
                            <div class="d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Tạo Mới</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


