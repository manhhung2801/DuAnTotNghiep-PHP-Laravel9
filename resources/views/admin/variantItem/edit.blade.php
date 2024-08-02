@extends('admin.layouts.master')

@section('title', 'Cập nhật biến thể nhỏ')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">Biến thể nhỏ</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">{{ $product->name }}</li>
                        <li class="breadcrumb-item" aria-current="page">{{ $variant->name }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $variantItem->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Cập nhật biến thể nhỏ</h6>
                <a href="{{ route('admin.product.variant.variant-item', $variant->id) }}"
                    class="btn btn-primary float-end">Trở về</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.variantItem.update', $variantItem->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Tên</label>
                        <input type="text" class="form-control" value="{{ $variantItem->name }}" id="input1"
                            name="name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Trạng thái</label>
                        <select id="input9" class="form-select text-center" name="status">
                            <option {{ $variantItem->status == 1 ? 'selected' : '' }} value="1">Đang hoạt động</option>
                            <option {{ $variantItem->status == 0 ? 'selected' : '' }} value="0">Không hoạt động
                            </option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="gap-3 d-grid align-items-center">
                            <button type="submit" class="px-4 btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
