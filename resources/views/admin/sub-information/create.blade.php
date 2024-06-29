@extends('admin.layouts.master')

@section('title', 'Danh Mục Trang Phụ')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">@yield('title')</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        <li class="breadcrumb-item active" aria-current="page">Tạo Mới</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Tạo Mới</h6>
                <a href="{{ route("admin.sub-information.index") }}" class="btn btn-primary float-end">Quay Lại</a>
            </div>
            <div class="card-body">
                <form class="g-3" action="{{ route("admin.sub-information.store") }}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="input1" class="form-label">Tên</label>
                            <input type="text" class="form-control" id="input1" name="name" placeholder="Nhập tên">
                        </div>
                        <div class="col-md-4">
                            <label for="input7" class="form-label">Danh mục</label>
                            <select id="input9" class="form-select" name="information">
                                @foreach ($information as $information)
                                    <option value="{{ $information->id }}">{{ $information->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="input9" class="form-label">Trạng thái</label>
                            <select id="input9" class="form-select" name="status">
                                <option value="1">Hoạt động</option>
                                <option value="0">Không hoạt động</option>
                            </select>
                        </div>
                        <div class="col-md-2 mt-3">
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


