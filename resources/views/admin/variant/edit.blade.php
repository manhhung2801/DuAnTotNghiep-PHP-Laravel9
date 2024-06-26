@extends('admin.layouts.master')

@section('title', 'Chỉnh sửa biến thể')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Biến thể</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">{{ $product->name }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $variant->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Chỉnh sửa biến thể</h6>
                <a href="{{ route('admin.product.variant', $variant->product_id) }}" class="btn btn-primary float-end">Trở về</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route("admin.variant.update", $variant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Tên</label>
                        <input type="text" class="form-control" value="{{ $variant->name }}" id="input1" name="name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Trạng thái</label>
                        <select id="input9" class="form-select" name="status">
                            <option {{ $variant->status == 1 ? "selected" : ""  }}  value="1">Active</option>
                            <option {{ $variant->status == 0 ? "selected" : ""  }}  value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Chỉnh sửa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


