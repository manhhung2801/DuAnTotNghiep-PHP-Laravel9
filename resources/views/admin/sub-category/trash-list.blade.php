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
                    <li class="breadcrumb-item active" aria-current="page">Danh Sách Danh Mục Phụ</li>
                    <li class="breadcrumb-item active" aria-current="page">Thùng Rác</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <div class="action_start float-start d-flex">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Thùng Rác</h6>
                <div class="form-search ms-2">
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" value="{{ Request::get('keyword') }}" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                            <button class="btn btn-outline-primary rounded-end-5" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <a href="{{ route("admin.sub-category.trash-list") }}" class="me-2 btn btn-success float-end ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>Làm Mới</a>
            </div>
            <a href="{{ route('admin.sub-category.index') }}" class="btn btn-primary float-end">Quay Lại</a>

        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>i
                            <th>Tên</th>
                            <th>Hình ảnh</th>
                            <th>Danh mục</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $getSubCategories as $subCategory )
                        <tr>
                            <td>{{ $subCategory->id }}</td>
                            <td>{{ $subCategory->name }}</td>
                            <td>
                                @if ($subCategory->image)
                                    <img src="{{ asset('uploads/subcategory/' . $subCategory->image) }}" alt="{{ $subCategory->name }}" style="width: 50px; height: 50px; object-fit: cover;">
                                @else
                                     <span>empty</span>
                                @endif
                             </td>
                            <td>{{ $subCategory->category->name }}</td>
                            <td>
                                <a class="btn btn-primary restoreTrash-item" href="{{ route('admin.sub-category.restore-trash', $subCategory->id) }}"><i class="fa-solid fa-trash-can-arrow-up fs-6"></i>
                                    Khôi phục</a>
                                <a class="btn btn-danger delete-item" href="{{ route('admin.sub-category.destroy-trash', $subCategory->id) }}"><i class="fa-solid fa-trash fs-6"></i>Xóa vĩnh viễn</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">Thùng rác đang rỗng</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
