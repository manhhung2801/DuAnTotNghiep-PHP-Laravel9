@extends('admin.layouts.master')

@section('title', 'List Contact')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">liên hệ </div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách liên hệ</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <h6 class="mt-2 mb-0 text-uppercase float-start mx-2">Danh sách liên hệ</h6>
            <div class="action_start float-start d-flex">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="text" value="{{ Request::get('keyword') }}" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                        <button class="btn btn-outline-primary rounded-end-5" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <a href="{{ route('admin.AdminContact') }}" class="me-2 btn btn-success float-end ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
            </div>
            <a href="{{ route('admin.coupons.trash-list') }}" class="btn btn-danger float-end mx-2"><i class="fa-solid fa-trash-can fs-6"></i>Thùng rác</a>
            <!-- <a href="{{ route('admin.coupons.create') }}" class="btn btn-primary float-end"><i
                        class="fa-solid fa-plus text-light fs-6"></i>Thêm mới giảm giá</a> -->

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User_id</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>điện thoại</th>
                            <th>Nội dung</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $stt = 1; @endphp
                        @forelse ($contact as $item)
                        <tr>
                            <td> @php echo $stt++; @endphp</td>
                            <td>{{ $item->users->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->content }}</td>
                            <td class="feedbackss">@if($item->feedback == 'unread')
                                <span style="color: green;"> Chưa đọc</span>
                                @elseif($item->feedback == 'read')
                                Đã đọc
                                @else
                                Đã phản hồi
                                @endif
                            </td>




                            <td class="text-end d-flex" style="justify-content:flex-end">
                                <!-- <a class="btn btn-primary" href="{{ route('admin.coupons.show', $item->id) }}"><i
                                                class="fa-solid fa-pen fs-6 text-light"></i>Chỉnh sửa</a> -->
                                <button class="btn btn-danger delete-item btn-sm" href="{{ route('admin.contact.destroy', $item->id) }}"><i class="fa-solid fa-trash fs-6"></i>Xóa bỏ</button>
                                <button type="submit" id="modal_contact_show" data-url="{{ route('admin.contact.show', $item->id) }}" type="button" class="btn btn-info btn-sm mx-2" data-bs-toggle="modal" data-bs-target="#contactDetails">
                                    Đọc bài viết
                                </button>
                                @include('admin.contact.partials.modal')
                                <form action="{{ route('admin.contact.answered', ['id'=>$item->id]) }}" method="post">
                                    @csrf
                                    @method("PUT")
                                    <button type="submit" class="btn btn-sm btn-success">
                                        Đã phản hồi
                                    </button>
                                </form>
                            </td>



                        </tr>
                        @empty
                        <tr>
                            <td colspan="12">Trống</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $contact->links() }}
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        $('body').off('click', '#modal_contact_show').on('click', '#modal_contact_show', function() {
            var feedbackss = document.querySelector('.feedbackss').textContent

            var url = $(this).attr('data-url'); +
            setTimeout(() => {
                $.ajax({
                    url: url,
                    method: 'GET',
                    success: function(data) {

                        $('#id-user').text(data[0].id)
                        $('#modal_name').text(data[0].name)
                        $('#user_id').text(data[0].user_id)
                        $('#email').text(data[0].email)
                        $('#phone').text(data[0].phone)
                        $('#content').text(data[0].content)
                        //img gallery

                        $('.capnhat-lienhen').click(function(e) {
                            console.log(feedbackss);
                            e.preventDefault();
                            var feedback = 'read'
                            var user_id = $(this).closest('.contact').find('#id-user').text();

                            var csrfToken = $('meta[name="csrf-token"]').attr('content');
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                }
                            });

                            $.ajax({
                                method: 'POST',
                                url: "{{ route('admin.contact.feedback') }} ",
                                data: {
                                    'feedback': feedback,
                                    'user_id': user_id,
                                },
                                success: function(data) {
                                    window.location.reload();
                                },
                                error: function(response) {
                                    alert(response.status)
                                }
                            })
                        })


                    }
                })
            }, 500)
        })
    });
</script>


@endsection