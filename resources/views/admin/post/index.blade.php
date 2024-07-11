@extends('admin.layouts.master')

@section('title', 'Danh sách bài viết')
@section('content')
<style>
     .tr-table{
        width: 100%;
     }
    .tr-table>td>.p {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 200px;
        display: block;
        /* line-height: ; */
    }
</style>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Bài viết</div>
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
                <a href="{{ route('admin.post.index') }}" class="me-2 btn btn-success float-end ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
            </div>
            <a href="{{ route('admin.post.trashed-post') }}" class="btn btn-danger float-end "><i class="fa-solid fa-trash-can fs-6"></i>Thùng rác</a>
            <a href="{{ route('admin.post.create')}}" class="btn btn-primary float-end me-2"><i class="fa-solid fa-plus text-light fs-6"></i>
                Thêm mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Tên loại</th>
                            <th>Người đăng </th>
                            <th>Hình ảnh </th>
                            <th>Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Slug</th>
                            <th>Mô tả</th>
                            <th>Tiêu đề SEO</th>
                            <th>Mô tả SEO</th>
                            <th>Kiểu</th>
                            <th>Trạng thái</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $post as $post )
                        <tr class="tr-table">
                            <td>{{$post->id }}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{$post->User->name}}</td>
                            <td><img src="{{ asset('uploads/post/' . $post->image) }}" width="50px" alt="{{ $post->image }}"></td>
                            <td><p class="p">{{$post->title}}</p></td>
                            <td><p class="p">{{$post->content}}</p></td>
                            <td><p class="p">{{$post->slug}}</p></td>
                            <td><p class="p">{{$post->description}}</p></td>
                            <td><p class="p">{{$post->seo_title}}</p></td>
                            <td><p class="p">{{$post->seo_description}}</p></td>
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
                            </td>
                            <td class="text-end">
                                <a class="btn btn-primary" href="{{ route('admin.post.edit',$post->id) }}"><i class="fa-solid fa-pen fs-6 text-light"></i>Chỉnh sửa</a>
                                <a class="btn btn-danger delete-item" href="{{ route("admin.post.destroy", $post->id) }}"><i class="fa-solid fa-trash fs-6"></i>Xóa bỏ</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">Bài viết không có dữ liệu</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('body').off('click', '.change-status').on('click', '.change-status', function() {
            let isChecked = $(this).is(':checked');
            let id = $(this).data('id');

            $.ajax({
                method: "PUT",
                url: "{{route('admin.post.change-status')}}",
                data: {
                    status: isChecked,
                    id: id
                },
                success: function(data) {
                    toastr.success(data.message);
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            });
        })
    });
    
</script>
@endpush
