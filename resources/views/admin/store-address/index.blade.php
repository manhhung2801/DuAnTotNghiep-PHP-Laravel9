@extends('admin.layouts.master')

@section('title', 'Danh sách địa chỉ cửa hàng')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Địa chỉ cửa hàng</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách địa chỉ cửa hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Danh sách địa chỉ cửa hàng</h6>
                    <form action="" method="get">
                        {{-- @csrf --}}
                        <div class="form-search ms-2 ">
                            <div class="input-group">
                                <input value="{{ Request::get('keyword') }}" type="text"
                                    class=" form-control rounded-start-5 focus-ring focus-ring-light querySearch"
                                    placeholder="Tìm kiếm" name="keyword">
                                <button class="btn btn-outline-primary rounded-end-5 buttonSearch " type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('admin.storeAddress.index') }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
                </div>
                <a href="{{ route('admin.storeAddress.trash-list') }}" class="btn btn-danger float-end"><i
                        class="fa-solid fa-trash-can fs-6"></i>Thùng rác</a>
                <a href="{{ route('admin.storeAddress.create') }}" class="btn btn-primary float-end me-2"><i
                        class="fa-solid fa-plus text-light fs-6"></i>Thêm mới</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr class="text-center">
                                <th>Stt</th>
                                <th>Tên cửa hàng</th>
                                <th>Địa chỉ</th>
                                <th>Phường, Xã</th>
                                <th>Quận, Huyện</th>
                                <th>Tỉnh, Thành phố</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Trạng thái</th>
                                <th>Chọn cửa hàng</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($storeAddress as $storeAddress)
                                <tr>
                                    <td>{{ $storeAddress->id }}</td>
                                    <td>{{ $storeAddress->store_name }}</td>
                                    <td>{{ $storeAddress->address }}</td>
                                    <td>{{ $storeAddress->ward }}</td>
                                    <td>{{ $storeAddress->district }}</td>
                                    <td>{{ $storeAddress->province }}</td>
                                    <td>{{ $storeAddress->email }}</td>
                                    <td>{{ $storeAddress->phone }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($storeAddress->status == 1)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $storeAddress->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($storeAddress->status == 0)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $storeAddress->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        {{ $storeAddress->pick_store == 1 ? 'Mặc định' : 'Khác' }}
                                    </td>
                                    <td class="text-end">
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.storeAddress.edit', $storeAddress->id) }}"><i
                                                class="fa-solid fa-pen fs-6 text-light"></i>Sửa</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.storeAddress.destroy', $storeAddress->id) }}"><i
                                                class="fa-solid fa-trash fs-6"></i>Xoá</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12">Địa chỉ cửa hàng không có dữ liệu</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    {{-- {{ $storeAddress->links() }} --}}
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
                    url: "{{ route('admin.storeAddress.change-status') }}",
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
