@extends('admin.layouts.master')

@section('title', 'Cập nhật địa chỉ cửa hàng')

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
                        <li class="breadcrumb-item active" aria-current="page">Cập nhật địa chỉ cửa hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Cập nhật địa chỉ cửa hàng</h6>
                <a href="{{ route('admin.storeAddress.index') }}" class="btn btn-primary float-end">Quay lại</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.storeAddress.update', $storeAddress->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Tên cửa hàng</label>
                        <input type="text" class="form-control" id="input1" name="store_name"
                            value="{{ $storeAddress->store_name }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input8" class="form-label">Email</label>
                        <input type="email" class="form-control" id="input8" name="email"
                            value="{{ $storeAddress->email }}">
                    </div>
                    <div class="col-md-4">
                        <label for="input2" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="input2" name='address'
                            value="{{ $storeAddress->address }}">
                    </div>
                    <div class="col-md-4">
                        <label for="input1" class="form-label">Phường, Xã</label>
                        <input type="text" class="form-control" id="input1" name="ward"
                            value="{{ $storeAddress->ward }}">
                    </div>
                    <div class="col-md-4">
                        <label for="input2" class="form-label">Quận, Huyện</label>
                        <input type="text" class="form-control" id="input2" name='district'
                            value="{{ $storeAddress->district }}">
                    </div>
                    <div class="col-md-4">
                        <label for="input4" class="form-label">Tỉnh, Thành phố</label>
                        <input type="text" class="form-control" id="input4" name="province"
                            value="{{ $storeAddress->province }}">
                    </div>
                    <div class="col-md-4">
                        <label for="input5" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="input5" name='phone'
                            value="{{ $storeAddress->phone }}">
                    </div>
                    <div class="col-md-4">
                        <label for="input7" class="form-label">Trạng thái</label>
                        <select id="input7" class="form-select" name="status">
                            <option {{ $storeAddress->status == 1 ? 'selected' : '' }} value="1">Đang hoạt động</option>
                            <option {{ $storeAddress->status == 0 ? 'selected' : '' }} value="0">Ngừng hoạt động</option>
                        </select>
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
