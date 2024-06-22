@extends('admin.layouts.master')

@section('title', 'Thùng rác loại bài viết')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Thùng rác loại bài viết</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Thùng rác loại bài viết</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <div class="action_start float-start d-flex">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Thùng rác loại bài viết</h6>
                <div class="form-search ms-2">
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" value="{{ Request::get('keyword') }}" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                            <button class="btn btn-outline-primary rounded-end-5" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <a href="{{ route('admin.post-category.trashed-postCate') }}" class="me-2 btn btn-success ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>
                    Làm mới</a>
            </div>
            <a href="{{ route('admin.post-category.index') }}" class="btn btn-primary float-end">Quay lại</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Tên</th>
                            <th>Đường dẫn</th>
                            <th>Trạng thái</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post_categories as $post_categories)
                        <tr>
                            <td>{{ $post_categories->id }}</td>
                            <td>{{ $post_categories->name }}</td>
                            <td>{{$post_categories->slug}}</td>
                            <td>
                                <div class="form-check form-switch form-check-success">
                                    @if($post_categories->status == 1)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $post_categories->id }}" id="flexSwitchCheckSuccess" checked>
                                    @elseif($post_categories->status == 0)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $post_categories->id }}" id="flexSwitchCheckSuccess">
                                    @endif
                                </div>

                            <td class="text-end">
                                <a class="btn btn-primary " href="{{ route('admin.post-category.restore-post_categories', $post_categories->id) }}"><i class="fa-solid fa-trash-can-arrow-up fs-6"></i>
                                    Khôi phục</a>
                                <a class="btn btn-danger" href="{{ route('admin.post-category.deleted-post_categories', $post_categories->id) }}"><i class="fa-solid fa-trash fs-6"></i>Xóa vĩnh viễn</a>
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

@push('scripts')

@endpush