@extends('admin.layouts.master')

@section('title', 'Thùng rác')

@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Thùng rác</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh mục trang</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase">Danh mục trang</h6>
                    <form action="" method="get">
                        {{-- @csrf --}}
                        <div class="form-search ms-2">
                            <div class="input-group">
                                <input value="{{ Request::get('keyword') }}" type="text"
                                    class="form-control buttonSearch rounded-start-5 focus-ring focus-ring-light"
                                    placeholder="Tìm kiếm" name="keyword">
                                <button class="btn btn-outline-primary rounded-end-5" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('admin.pageCategories.trash-list') }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
                </div>
                <a href="{{ route('admin.page-category.index') }}" class="btn btn-primary float-end">Quay lại</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Đường dẫn</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getPageCategorys as $PageCategory)
                                <tr>
                                    <td>{{ $PageCategory->id }}</td>
                                    <td>{{ $PageCategory->name }}</td>
                                    <td>{{ $PageCategory->slug }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($PageCategory->status == 1)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $PageCategory->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($PageCategory->status == 0)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $PageCategory->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a class="btn btn-primary restoreTrash-item"
                                            href="{{ route('admin.pageCategories.restore-trash', $PageCategory->id) }}"><i
                                                class="fa-solid fa-trash-can-arrow-up fs-6"></i>Khôi phục</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.pageCategories.destroy-trash', $PageCategory->id) }}"><i
                                                class="fa-solid fa-trash fs-6"></i>Xoá vĩnh viễn</a>
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
