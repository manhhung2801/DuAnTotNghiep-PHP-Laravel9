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
                        <li class="breadcrumb-item active" aria-current="page">Danh Mục Trang Phụ</li>
                        <li class="breadcrumb-item active" aria-current="page">Cập Nhật</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Cập Nhật</h6>
                <a href="{{ route("admin.sub-information.index") }}" class="btn btn-primary float-end">Quay Lại</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route("admin.sub-information.update", $subInformation->id) }}" method="POST" >
                    @csrf
                    @method('PUT')
                    <div class="col-md-4">
                        <label for="input1" class="form-label">Tên trang phụ</label>
                        <input type="text" class="form-control" value="{{ $subInformation->name }}" id="input1" name="name" placeholder="Nhập tên trang phụ">
                    </div>
                    <div class="col-md-4">
                        <label for="input7" class="form-label">Danh mục</label>
                        <select id="input9" class="form-select" name="information">
                            @foreach ($information as $information)
                                <option {{ $subInformation->information_id == $information->id ? "selected" : "" }} value="{{ $information->id }}">{{ $information->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="input9" class="form-label">Trạng thái</label>
                        <select id="input9" class="form-select" name="status">
                            <option {{ $subInformation->status == 1 ? "selected" : ""  }}  value="1">Hoạt động</option>
                            <option {{ $subInformation->status == 0 ? "selected" : ""  }}  value="0">Không hoạt động</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Cập Nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


