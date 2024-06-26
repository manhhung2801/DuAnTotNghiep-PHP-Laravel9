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
                    <li class="breadcrumb-item active" aria-current="page">Danh sách bài viết</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <div class="action_start float-start d-flex">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Danh sách bài viết</h6>
                <div class="form-search ms-2">
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" value="{{ Request::get('keyword') }}" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                            <button class="btn btn-outline-primary rounded-end-5" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <a href="{{ route('admin.post.index') }}" class="me-2 btn btn-success ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
            </div>
            <a href="{{ route('admin.post.index') }}" class="btn btn-primary float-end">Quay lại</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <th>ID</th>
                        <th>Tên loại</th>
                        <th>Người đăng </th>
                        <th>Hình ảnh </th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                        <th>Đường dẫn</th>
                        <th>Mô tả</th>
                        <th>Tiêu đề SEO</th>
                        <th>Mô tả SEO</th>
                        <th>Kiểu</th>
                        <th>Trạng thái</th>
                        <th>Hoạt động</th>
                    </thead>
                    <tbody>
                        @foreach ($post as $post)
                        <tr>
                            <td>{{$post->id }}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{$post->user_id}}</td>
                            <td><img src="{{ asset('uploads/post/' . $post->image) }}" width="50px" alt="{{ $post->image }}"></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->slug}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->seo_title}}</td>
                            <td>{{$post->seo_description}}</td>
                            <td>
                                {{($post->type==1)?"Bài Viết":"Banner"}}
                            </td>
                            <td>
                                <div class="form-check form-switch form-check-success">
                                    @if($post->status == 1)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $post->id }}" id="flexSwitchCheckSuccess" checked>
                                    @elseif($post->status == 0)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $post->id }}" id="flexSwitchCheckSuccess">
                                    @endif
                                </div>

                            <td class="text-end">
                                <a class="btn btn-primary " href="{{ route('admin.post.restore-post', $post->id) }}"><i class="fa-solid fa-trash-can-arrow-up fs-6"></i>Khôi phục</a>
                                <a class="btn btn-danger" href="{{ route('admin.post.deleted-post', $post->id) }}"><i class="fa-solid fa-trash fs-6"></i>Xóa vĩnh viễn</a>
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


