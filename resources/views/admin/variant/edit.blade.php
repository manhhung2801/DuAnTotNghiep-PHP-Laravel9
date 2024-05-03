@extends('admin.layouts.master')

@section('title', 'Update Variant')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Variant</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update Variant</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Update Sub Category</h6>
                <a href="{{ route("admin.variant.index") }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route("admin.variant.update", $variant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="input1" class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{ $variant->name }}" id="input1" name="name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="input7" class="form-label">Product_id</label>
                        <select id="input9" class="form-select" name="product_id">
                            <option>Select</option>
                            @foreach ($product as $product)
                                <option {{ $variant->product_id == $product->id ? "selected" : "" }} value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Status</label>
                        <select id="input9" class="form-select" name="status">
                            <option {{ $variant->status == 1 ? "selected" : ""  }}  value="1">Active</option>
                            <option {{ $variant->status == 0 ? "selected" : ""  }}  value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


