@extends('admin.layouts.master')

@section('title', 'Thêm thanh trượt')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Thanh trượt</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Thêm thanh trượt</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Thêm thanh trượt</h6>
                <a href="{{ route('admin.slider.index') }}" class="btn btn-primary float-end">Quay lại</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.slider.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="input3" class="form-label">Hình ảnh</label>
                        <div class=" text-secondary">
                            <input id="input3" type="file" class="form-control" name="banner" />
                            {{ old('banner') }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Kiểu</label>
                        <input type="text" class="form-control" id="input1" name="type"
                            value="{{ old('type') }}" placeholder="Slider_">
                    </div>
                    <div class="col-md-4">
                        <label for="input2" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" id="input2" name='title' value="{{ old('title') }}"
                            placeholder="Nội dung thanh trượt">
                    </div>
                    <div class="col-md-4">
                        <label for="input7" class="form-label">Trạng thái</label>
                        <select id="input7" class="form-select" name="status">
                            <option selected="" value="1">Đang hoạt động</option>
                            <option value="0">Ngừng hoạt động</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="input6" class="form-label">Đường dẫn</label>
                        <input type="text" class="form-control" id="input6" name="btn_url"
                            value="{{ old('btn_url') }}" placeholder="http://localhost:8000/san-pham/">
                    </div>

                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
