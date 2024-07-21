@extends('admin.layouts.master')

@section('title', 'Người Dùng')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Người Dùng</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh Sách Người Dùng</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Danh Sách Người Dùng</h6>
                    <div class="form-search ms-2">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                    class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                                <button class="btn btn-outline-primary rounded-end-5" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('admin.user-management.index') }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Làm Mới</a>
                </div>
            </div>

            <div class="card-body">
                <form action="" method="get">
                    <div class="row mb-3">
                        <div class="col-1 mt-1 ">
                            <label for="" class="bg-primary p-1 border rounded-1"><span class="text-white">Bộ lọc</span> </label>
                        </div>
                        <div class="col">
                            <select class="form-select" name="sort_role">
                                <option {{ Request::get('sort_role') == 'user' ? 'selected' : '' }} value="user">User
                                </option>
                                <option {{ Request::get('sort_role') == 'admin' ? 'selected' : '' }} value="admin">Admin
                                </option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" name="sort_date">
                                <option value>Ngày tạo</option>
                                <option {{ Request::get('sort_date') == 'desc' ? 'selected' : '' }} value="desc">Mới nhất
                                </option>
                                <option {{ Request::get('sort_date') == 'asc' ? 'selected' : '' }} value="asc">Cũ nhất
                                </option>
                            </select>
                        </div>
                        <div class="col-1">
                            <button class="btn btn-primary">Lọc</button>
                        </div>
                    </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Hình Ảnh</th>
                                <th>Vai Trò Quản Trị Viên</th>
                                <th>Email</th>
                                <th>Trạng Thái</th>
                                <th>Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>
                                        @if ($user->image)
                                            <img src="{{ asset('uploads/' . $user->image) }}" alt="{{ $user->name }}"
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                        @else
                                            <img src="{{ asset('uploads/avatar-user.jpeg') }}" alt="" width="50px"
                                                height="50px">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($user->role == 'admin')
                                                <input class="form-check-input change-role" type="checkbox" role="switch"
                                                    data-idrole="{{ $user->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($user->role == 'user')
                                                <input class="form-check-input change-role" type="checkbox" role="switch"
                                                    data-idrole="{{ $user->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($user->status == 'active')
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $user->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($user->status == 'inactive')
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $user->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary" href=""><i
                                                class="fa-solid fa-pen fs-6 text-light"></i>Chi Tiết</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.user-management.destroy', $user->id) }}"><i
                                                class="fa-solid fa-trash fs-6"></i>Xoá Bỏ</a>
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="12">Không có dữ liệu người dùng</td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // change role account user
            $('body').off('click', '.change-role').on('click', '.change-role', function() {
                let isChecked = $(this).is(':checked');
                let id = $(this).data('idrole');

                $.ajax({
                    method: "PUT",
                    url: "{{ route('admin.user-management.change-role') }}",
                    data: {
                        role: isChecked,
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
            // change status account user
            $('body').off('click', '.change-status').on('click', '.change-status', function() {
                let isChecked = $(this).is(':checked');
                let id = $(this).data('id');

                $.ajax({
                    method: "PUT",
                    url: "{{ route('admin.user-management.change-status') }}",
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
