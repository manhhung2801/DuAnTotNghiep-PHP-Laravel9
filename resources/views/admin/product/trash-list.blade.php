@extends('admin.layouts.master')

@section('title', 'Trashed Product')

@section('content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Trashed product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Trashed product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <div class="action_start float-start d-flex">
                <h6 class="mt-2 mb-0 text-uppercase">Trashed product</h6>
                <div class="form-search ms-2">
                    <div class="input-group">
                        <input type="text" class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                        <button class="btn btn-outline-primary rounded-end-5" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </div>
            <a href="{{ route('admin.product.index') }}" class="btn btn-warning float-end">Back</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>SKU</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Offer Price</th>
                            <th>Product Type</th>
                            <th>Category</th>
                            <th>Sub Category</th>
                            <th>Child Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getProduct as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->sku }}</td>
                            <td class="text-center">
                                <img src="{{ asset('uploads/products/' . $product->image) }}" width="50px" alt="{{ $product->image }}">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ number_format($product->price) }} VNĐ</td>
                            <td>{{ number_format($product->offer_price) }} VNĐ</td>
                            <td>{{ $product->product_type }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->subCategory->name }}</td>
                            <td>{{ $product->childCategory->name }}</td>
                            <td>
                                <a class="btn btn-primary restoreTrash-item" href="{{ route('admin.product.restore-trash', $product->id) }}">Restore</a>
                                <a class="btn btn-danger delete-item" href="{{ route('admin.product.destroy-trash', $product->id) }}">Delete Forever</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$sliders->links()}}
            </div>
        </div>
    </div>
</div>
@endsection