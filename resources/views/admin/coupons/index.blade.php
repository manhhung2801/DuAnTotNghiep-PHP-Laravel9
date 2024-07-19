@extends('admin.layouts.master')

@section('title', 'List Coupons')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Phiếu giảm giá </div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách phiếu giảm giá</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start mx-2">Danh sách phiếu giảm giá</h6>
                <div class="action_start float-start d-flex">
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                            <button class="btn btn-outline-primary rounded-end-5" type="submit"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <a href="{{ route('admin.coupons.index') }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
                </div>
                <a href="{{ route('admin.coupons.trash-list') }}" class="btn btn-danger float-end mx-2"><i
                        class="fa-solid fa-trash-can fs-6"></i>Thùng rác</a>
                <a href="{{ route('admin.coupons.create') }}" class="btn btn-primary float-end"><i
                        class="fa-solid fa-plus text-light fs-6"></i>Thêm mới giảm giá</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên giảm giá</th>
                                <th>Mã giảm giá</th>
                                <th>Số lượng</th>
                                <th>Giảm giá</th>
                                <th>Trạng thái</th>
                                <th>Hoạt động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $stt = 1; @endphp
                            @forelse ($coupons as $item)
                                <tr>
                                    <td> @php echo $stt++; @endphp</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>{{ $item->prencent_amount }}</td>

                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($item->status == 1)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $item->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($item->status == 0)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $item->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>

                                    <td class="text-end">
                                        <a class="btn btn-primary" href="{{ route('admin.coupons.show', $item->id) }}"><i
                                                class="fa-solid fa-pen fs-6 text-light"></i>Chỉnh sửa</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.coupons.destroy', $item->id) }}"><i
                                                class="fa-solid fa-trash fs-6"></i>Xóa bỏ</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12">Phiếu giảm giá không có dữ liệu</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $coupons->links() }}
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
                    url: "{{ route('admin.coupons.change-status') }}",
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
