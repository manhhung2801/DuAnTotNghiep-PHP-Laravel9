@extends('admin.layouts.master')

@section('title', 'Trang')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">@yield('title')</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách trang</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Danh sách trang</h6>
                    <form action="" method="get">
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
                    <a href="{{ route('admin.pages.index') }}" class="me-2 btn btn-success float-end ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
                </div>
                <a href="{{ route('admin.pages.create') }}" class="btn btn-primary float-end me-2"><i class="fa-solid fa-plus text-light fs-6"></i>Thêm mới</a>
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="row mb-3">
                        <div class="col-1 mt-1 ">
                            <label for="" class="bg-primary p-1 border rounded-1"><span class="text-white">Bộ
                                    lọc</span> </label>
                        </div>
                        <div class="col">
                            <select class="form-select" name="sort_name">
                                <option value>Tên</option>
                                <option {{ Request::get('sort_name') == 'asc' ? 'selected' : '' }} value="asc">Tên A-Z
                                </option>
                                <option {{ Request::get('sort_name') == 'desc' ? 'selected' : '' }} value="desc">Tên Z-A
                                </option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" name="check_status">
                                <option value>Trạng thái</option>
                                <option {{ Request::get('check_status') == '1' ? 'selected' : '' }} value="1" >Đang hoạt
                                    động
                                </option>
                                <option {{ Request::get('check_status') == '0' ? 'selected' : '' }} value="0">Không hoạt
                                    động
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
                </form>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Stt</th>
                                <th>Tên</th>
                                <th>Slug</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody class=" justify-content-center">
                            @forelse ( $pages as $page )
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->name }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>
                                    <div class="form-check form-switch form-check-success">
                                        @if ($page->status == 1)
                                            <input class="form-check-input change-status" type="checkbox" role="switch"
                                                data-id="{{ $page->id }}" id="flexSwitchCheckSuccess" checked >
                                        @elseif($page->status == 0)
                                            <input class="form-check-input change-status" type="checkbox" role="switch"
                                                data-id="{{ $page->id }}" id="flexSwitchCheckSuccess">
                                        @endif
                                    </div>
                                </td>
                                <td class="text-end">
                                    <a class="btn btn-primary text-light"
                                        href="{{ route('admin.pages.edit', $page->id) }}"><i class="fa-solid fa-pen fs-6 text-light"></i>Sửa</a>
                                    <a class="btn btn-danger delete-item"
                                        href="{{ route('admin.pages.destroy', $page->id) }}"><i class="fa-solid fa-trash fs-6"></i>Xoá</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="12">Không có dữ liệu trang</td>
                            </tr>
                            @endforelse     
                        </tbody>
                    </table>
                    {{ $pages->links() }}
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
                    url: "{{ route('admin.pages.change-status') }}",
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
