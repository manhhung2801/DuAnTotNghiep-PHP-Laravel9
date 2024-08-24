@extends('admin.layouts.master')

@section('title', 'Cập nhật thanh trượt')

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
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật thanh trượt</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Cập nhật thanh trượt</h6>
                <a href="{{ route('admin.slider.index') }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.slider.update', $slider->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3">
                                @if ($slider->banner)
                                    <img src="{{ asset('uploads/slider/' . $slider->banner) }}" alt="{{ $slider->type }}"
                                        class="ms-1" style="width: 70px; height: 70px;object-fit: cover;">
                                @else
                                @endif
                            </div>
                            <div class="col-md-9">
                                <label for="input3" class="form-label">Hình ảnh</label>
                                <input id="input3" type="file"
                                    class="form-control @error('banner') is-invalid @enderror" name="banner" />
                                @error('banner')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Kiểu</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="input1"
                            name="type" value="{{ old('type', $slider->type) }}">
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="input2" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="input2"
                            name='title' value="{{ old('title', $slider->title) }}">
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="input6" class="form-label">Đường dẫn</label>
                        <input type="text" class="form-control @error('btn_url') is-invalid @enderror" id="input6"
                            name="btn_url" value="{{ old('btn_url', $slider->btn_url) }}">
                        @error('btn_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="input7" class="form-label">Trạng thái</label>
                        <select id="input7" class="form-select @error('status') is-invalid @enderror" name="status">
                            <option {{ old('status', $slider->status) == 1 ? 'selected' : '' }} value="1">Đang hoạt
                                động</option>
                            <option {{ old('status', $slider->status) == 0 ? 'selected' : '' }} value="0">Ngừng hoạt
                                động</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Cập nhật</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
