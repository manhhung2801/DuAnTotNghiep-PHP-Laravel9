@extends('admin.layouts.master')

@section('title', 'Product Listing')

@section('content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Product Listing</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Product Listing</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <div class="action_start float-start d-flex">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Product Listing</h6>
                <div class="form-search ms-2">
                    <form action="" method="get">
                        <div class="input-group">
                            <input value="{{ Request::get('keyword') }}" type="text" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light querySearch" placeholder="Search">
                            <button class="btn btn-outline-primary rounded-end-5 buttonSearch" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <a href="{{ route('admin.product.index') }}" class="me-2 btn btn-info ms-2">Reset</a>
            </div>
            
            <a href="{{route('admin.product.trash-list')}}" class="btn btn-danger float-end">Trashed Product</a>
            <a href="{{ route('admin.product.create') }}" class="btn btn-warning float-end me-2">Add Product</a>
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
                            <th>Status</th>
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
                            <td>
                                <div class="form-check form-switch form-check-success">
                                    @if($product->status == 1)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $product->id }}" id="flexSwitchCheckSuccess" checked>
                                    @elseif($product->status == 0)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $product->id }}" id="flexSwitchCheckSuccess">
                                    @endif
                                </div>
                            </td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->subCategory->name }}</td>
                            <td>{{ $product->childCategory->name }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('admin.product.edit', $product->id) }}">Edit</a>
                                <a class="btn btn-danger delete-item" href="{{ route('admin.product.destroy', $product->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $getProduct->links() }}
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
                url: "{{route('admin.product.change-status')}}",
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