@extends('admin.layouts.master')

@section('title', 'Thêm mới danh mục trang')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Danh mục trang</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Tạo Mới</h6>
                <a href="{{ route('admin.page-category.index') }}" class="btn btn-primary float-end">Quay Lại</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.page-category.store') }}" method="POST">
                    @csrf
                    <div class="col-md-4">
                        <label for="input1" class="form-label">Tên trang</label>
                        <input type="text" class="form-control @error('name') is-invalid  @enderror" id="input1"
                            name="name" placeholder="Nhập tên trang" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="input1" class="form-label">Thứ hạng</label>
                        <input type="number" class="form-control @error('rank') is-invalid  @enderror " name="rank"
                            placeholder="Nhập thứ hạng" min="0" value="{{ old('rank') }}">
                        @error('rank')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label for="input9" class="form-label">Trạng thái</label>
                        <select id="input9" class="form-select @error('status') is-invalid  @enderror" name="status">
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Đang hoạt động</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Ngừng hoạt động</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Thêm mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
