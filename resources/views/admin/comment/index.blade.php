@extends('admin.layouts.master')

@section('title', 'Danh sách bình luận')

@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Danh sách bình luận</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách bình luận sản phẩm</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Danh sách bình luận sản phẩm</h6>
                    <div class="form-search ms-2">
                        <form action="" method="get">
                            <div class="input-group">
                                <input value="{{ Request::get('keyword') }}" type="text" name="keyword"
                                    class="form-control rounded-start-5 focus-ring focus-ring-light querySearch"
                                    placeholder="Tìm kiếm">
                                <button class="btn btn-outline-primary rounded-end-5 buttonSearch" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('admin.comment.index') }}" class="me-2 btn btn-success ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i> Làm mới</a>
                </div>

                {{-- <a href="{{route('admin.product.trash-list')}}" class="btn btn-danger float-end"><i class="fa-solid fa-trash-can fs-6"></i>Thùng rác</a>
            <a href="{{ route('admin.product.create') }}" class="btn btn-primary float-end me-2"><i class="fa-solid fa-plus text-light fs-6"></i>Thêm sản phẩm</a> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="col-1">ID</th>
                                <th class="col-4">Tên sản phẩm</th>
                                <th class="col-2">Tên người dùng</th>
                                <th class="col-3">Email</th>
                                <th class="col-1">Vai trò</th>
                                <th class="col-1" class="text-end">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getComment as $comment)
                                <tr>
                                    <td>{{ $comment->id }}</td>
                                    <td>{{ $comment->product->name }}</td>
                                    <td>{{ $comment->user->name }}</td>
                                    <td>{{ $comment->user->email }}</td>
                                    <td>{{ $comment->user->role }}</td>
                                    <td class="text-end">
                                        <a class="btn btn-danger btn-sm delete-item"
                                            href="{{ route('admin.comment.destroy', $comment->id) }}"><i
                                                class="fa-solid fa-trash fs-6"></i>Xóa</a>
                                        <button id="modal_comment_show"
                                            data-url="{{ route('commentProductId', $comment->product->id) }}" type="button"
                                            class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#commentDetails">
                                            Chi tiết
                                        </button>
                                        @include('admin.comment.partials.modal')
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12">Không có dữ liệu sản phẩm</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    {{ $getComment->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').off('click', '#modal_comment_show').on('click', '#modal_comment_show', function() {
                var url = $(this).attr('data-url');
                setTimeout(() => {
                    $.ajax({
                        url: url,
                        method: 'GET',
                        success: function(response) {
                        console.log("🚀 ~ setTimeout ~ response:", response)

                            let commentsHtml = '';

                            if (response.data && response.data.length > 0) {
                                $('#comments-container').empty();

                                response.data.forEach(function(comment) {
                                    commentsHtml += `
                                <div class="bg-white p-2">
                                    <div class="d-flex flex-row justify-content-end user-info">
                                        <img class="rounded-circle" src="{{ asset('images/default-avatar.png') }}" width="40">
                                        <div class="d-flex flex-column justify-content-start ml-2">
                                            <span class="d-block font-weight-bold name">${comment.user.id === {{auth()->id()}} ? `Bạn` : comment.user.name}</span>
                                            <span class="date text-black-50">${comment.created_at}</span>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="comment-text">${comment.message}</p>
                                    </div>
                                </div>
                            `;
                                });
                            } else {
                                commentsHtml = `
                            <div class="alert alert-info text-center">
                                This product doesn't have any comments yet.
                            </div>
                        `;
                            }
                            $('#comments-container').html(commentsHtml);



                        }
                    })
                }, 500)
            });
        })
    </script>
@endpush


{{--

function renderComments(productId) {
        $(document).ready(function() {

            $.ajax({
                url: `/comments/${productId}`,
                type: 'GET',
                success: function(response) {
                    let commentsHtml = '';

                    if (response.data && response.data.length > 0) {
                        $('#comments-container').empty();

                        response.data.forEach(function(comment) {
                            commentsHtml += `
                                <div class="bg-white p-2">
                                    <div class="d-flex flex-row user-info">
                                        <img class="rounded-circle" src="{{ asset('images/default-avatar.png') }}" width="40">
                                        <div class="d-flex flex-column justify-content-start ml-2">
                                            <span class="d-block font-weight-bold name">${comment.user.name}</span>
                                            <span class="date text-black-50">${comment.created_at}</span>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <p class="comment-text">${comment.message}</p>
                                    </div>
                                </div>
                            `;
                        });
                    } else {
                        commentsHtml = `
                <div class="alert alert-info text-center">
                    This product doesn't have any comments yet.
                </div>
            `;
                    }
                    $('#comments-container').html(commentsHtml);
                }
            });
        })
    } --}}
