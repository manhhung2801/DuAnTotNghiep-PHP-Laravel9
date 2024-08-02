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
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th class="col-4">Tên sản phẩm</th>
                                <th class="col-3">Số lượng bình luận</th>
                                <th class="col-3">Số người bình luận</th>
                                <th class="col-2 text-center">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getComment as $index => $comment)
                                <tr>
                                    <td>{{ $comment[0]->product->name }}</td>
                                    <td>{{ $comment->count() }}</td>
                                    <td>{{ $comment->pluck('user_id')->unique()->count() }}</td>
                                    <td class="text-center">
                                        <button id="modal_comment_show"
                                            data-url="{{ route('commentProductId', $comment[0]->product->id) }}"
                                            type="button" class="btn btn-info btn-sm" data-bs-toggle="modal"
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
                    {{-- {{ $getComment->links() }} --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function showComments(url) {
                console.log("🚀 ~ showComments ~ url:", url)
                // var url = $(this).attr('data-url');
                let productId = url.substring(url.lastIndexOf("/") + 1);
                console.log("🚀 ~ showComments ~ productId:", productId)

                function formatTimeAgo(dateString) {
                    // Chuyển đổi chuỗi thời gian thành đối tượng Date
                    const dateObj = new Date(dateString);

                    // Tính toán khoảng thời gian từ thời điểm hiện tại đến thời điểm được truyền vào
                    const currentTime = new Date().getTime();
                    const timeAgo = currentTime - dateObj.getTime();

                    // Tính toán số giây/phút/giờ/ngày/tháng/năm
                    const seconds = Math.floor(timeAgo / 1000);
                    const minutes = Math.floor(seconds / 60);
                    const hours = Math.floor(minutes / 60);
                    const days = Math.floor(hours / 24);
                    const months = Math.floor(days / 30);
                    const years = Math.floor(months / 12);

                    // Trả về chuỗi thời gian theo định dạng mong muốn
                    if (years > 0) {
                        return `${years} năm trước`;
                    } else if (months > 0) {
                        return `${months} tháng trước`;
                    } else if (days > 0) {
                        return `${days} ngày trước`;
                    } else if (hours > 0) {
                        return `${hours} giờ trước`;
                    } else if (minutes > 0) {
                        return `${minutes} phút trước`;
                    } else {
                        return `${seconds} giây trước`;
                    }
                }

                setTimeout(() => {
                    $.ajax({
                        url: url,
                        method: 'GET',
                        success: function(response) {
                            console.log("🚀 ~ setTimeout ~ response:", response)

                            let commentsHtml = '';

                            if (response.data && response.data.length > 0) {
                                response.data.sort((a, b) => {
                                    // Chuyển đổi chuỗi thời gian thành giá trị số để so sánh
                                    const aTimestamp = new Date(a.created_at).getTime();
                                    const bTimestamp = new Date(b.created_at).getTime();

                                    // So sánh và trả về kết quả
                                    if (aTimestamp < bTimestamp) return -1;
                                    if (aTimestamp > bTimestamp) return 1;
                                    return 0;
                                });
                                console.log("🚀 ~ setTimeout ~ response.data:", response.data)
                                $('#comments-container').empty();

                                response.data.forEach(function(comment) {
                                    console.log("🚀 ~ response.data.forEach ~ comment:",
                                        comment)

                                    let deleteUrl =
                                        "{{ route('admin.comment.destroy', ':id') }}";
                                    deleteUrl = deleteUrl.replace(':id',
                                        comment.id);


                                    commentsHtml += `
                                    <a  class="bg-white p-2 delete_comment" href="${deleteUrl}" data-url-id="${url}">
                                    <div class="d-flex flex-row justify-content-end gap-2 user-info ">
                                        <div class="d-flex flex-column justify-content-end ml-2">
                                        <span class="d-block font-weight-bold name text-end">${comment.user.id === {{ auth()->id() }} ? `Bạn` : comment.user.name + ' - ' + comment.user.email}</span>
                                        <span class="date text-black-50 text-end">${formatTimeAgo(comment.created_at)}</span>
                                        <div class="mt-2 ">
                                            <p class="comment-text text-end ">${comment.message}</p>
                                        </div>
                                        </div>
                                        <img class="rounded-circle" src="{{ asset('images/default-avatar.png') }}" width="40">
                                    </div>
                                    </a>
                                `;
                                });
                            } else {
                                commentsHtml = `
                                <div class="alert alert-info text-center">
                                    This product doesn't have any comments yet.
                                </div>
                                `;
                            }

                            commentsHtml += `
                                    <form class="comment_form" method="POST" class="bg-light p-2">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ auth()->id() }}"
                                            class="user_id">
                                        <input type="hidden" name="product_id" value="${productId}"
                                            class="product_id">
                                        <div class="d-flex flex-row align-items-start"><img class="rounded-circle" src="{{ asset('images/default-avatar.png') }}" width="40">
                                            <textarea id="comment_input" class="form-control ml-1 shadow-none textarea" name="message"
                                                placeholder="Bình luận của bạn về sản phẩm"></textarea>
                                        </div>
                                        <div class="mt-2 text-end">
                                            <button class="btn btn-primary btn-sm shadow-none comment_submit_btn">Bình
                                                luận</button>
                                        </div>
                                    </form>
                                `;

                            $('#comments-container').html(commentsHtml);
                        }
                    })
                }, 1000)
            }

            $(document).on('click', '.delete_comment', function(e) {
                event.preventDefault();
                console.log("🚀 ~ $ ~ this:", this)
                console.log("🚀 ~ $ ~ $(this).attr('data-url-id'):", $(this).attr('data-url-id'))

                let deleteUrl = $(this).attr('href');
                let parentID = $(this).attr('data-url-id');
                let row = $(this).closest('tr');
                console.log(deleteUrl);
                Swal.fire({
                    title: "Bạn có chắc không?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Có, xóa nó đi!"
                }).then((result) => {
                    if (result.isConfirmed) {

                        $.ajax({
                            type: "DELETE",
                            url: deleteUrl,
                            success: function(data) {
                                if (data.status == 'success') {
                                    showComments(parentID);
                                    Swal.fire(
                                        "Deleted!",
                                        data.message,
                                        'success'
                                    );

                                } else if (data.status == 'error') {
                                    Swal.fire(
                                        "Không thể xóa",
                                        data.message,
                                        'error'
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log(error);
                            }
                        });



                    }
                });
            });

            $('body').off('click', '#modal_comment_show').on('click', '#modal_comment_show', function() {
                showComments($(this).attr('data-url'));
            });

            $('body').off('click', '.comment_submit_btn').on('click', '.comment_submit_btn', function(e) {
                e.preventDefault();

                // Closest form to the comment submit button
                let form = $(this).closest('.comment_form');

                let productId = form.find('.product_id').val();

                let userId = form.find('.user_id').val();
                let message = form.find('#comment_input').val();

                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                });

                if (!userId) {
                    Toast.fire({
                        icon: "error",
                        title: "Vui lòng đăng nhập để thực hiện chức năng bình luận"
                    });

                    return;
                }
                try {
                    if (!message) {
                        Toast.fire({
                            icon: "error",
                            title: "Vui lòng nhập bình luận trước khi submit"
                        });

                        return;
                    }

                } catch (error) {
                    console.error("Error in commentPost function:", error);
                    Toast.fire({
                        icon: "error",
                        title: error.response.data.errors.message[0]
                    });

                    return;
                }

                $.ajax({
                    url: "{{ route('commentPost') }}",
                    type: 'POST',
                    data: {
                        message: message,
                        user_id: userId,
                        product_id: productId,
                    },
                    success: function(data) {
                        console.log("🚀 ~ $ ~ data:", data)

                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        });

                        if (data.status == true) {
                            Toast.fire({
                                icon: "success",
                                title: data.message
                            });

                            form.find('#comment_input').val('');
                            showComments('/comments/' + productId);

                            return;
                        }

                        if (data.status == false) {
                            Toast.fire({
                                icon: "error",
                                title: data.message
                            });

                            return;
                        }

                        return;
                    },
                    error: function(error) {

                        const Toast = Swal.mixin({
                            toast: true,
                            position: "top-end",
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                        });
                        Toast.fire({
                            icon: "error",
                            title: error.responseJSON.message
                        });

                        console.log("🚀 ~ $ ~ error:", error)
                        return;
                    }
                });
            });
        })
    </script>
@endpush
