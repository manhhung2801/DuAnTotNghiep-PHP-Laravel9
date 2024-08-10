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
                        <li class="breadcrumb-item active" aria-current="page">Thanh trượt</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase">Thanh trượt</h6>
                    <form action="" method="get">
                        {{-- @csrf --}}
                        <div class="form-search ms-2">
                            <div class="input-group">
                                <input value="{{ Request::get('keyword') }}" type="text"
                                    class="form-control buttonSearch rounded-start-5 focus-ring focus-ring-light"
                                    placeholder="Tìm kiếm" name="keyword">
                                <button class="btn btn-outline-primary rounded-end-5" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('admin.slider.trash-list') }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
                </div>
                <a href="{{ route('admin.slider.index') }}" class="btn btn-primary float-end">Quay lại</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Hình ảnh</th>
                                <th>Kiểu</th>
                                <th>Tiêu đề</th>
                                <th>Giá</th>
                                <th>Đường dẫn</th>
                                <th>Số Seri</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($getSliders as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/slider') }}/{{ $slider->banner }}" alt="{{ $slider->title }}"
                                            width="50px">
                                    </td>
                                    <td>{{ $slider->type }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ number_format($slider->starting_price) }} VNĐ</td>
                                    <td>{{ $slider->btn_url }}</td>
                                    <td>{{ $slider->serial }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($slider->status == 1)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $slider->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($slider->status == 0)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $slider->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <a class="btn btn-primary restoreTrash-item"
                                            href="{{ route('admin.slider.restore-trash', $slider->id) }}"><i
                                                class="fa-solid fa-trash-can-arrow-up fs-6"></i>Khôi phục</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.slider.destroy-trash', $slider->id) }}"><i
                                                class="fa-solid fa-trash fs-6"></i>Xoá vĩnh viễn</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12">Thùng rác đang rỗng</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
