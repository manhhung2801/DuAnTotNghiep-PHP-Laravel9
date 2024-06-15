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
                <a href="{{ route('admin.product.index') }}" class="me-2 btn btn-success ms-2"><i class="fa-solid fa-rotate-left fs-6"></i> Reset</a>
            </div>

            <a href="{{route('admin.product.trash-list')}}" class="btn btn-danger float-end"><i class="fa-solid fa-trash-can fs-6"></i>Trashed Product</a>
            <a href="{{ route('admin.product.create') }}" class="btn btn-primary float-end me-2"><i class="fa-solid fa-plus text-light fs-6"></i>Add Product</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Offer Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getProduct as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td class="text-center">
                                <img src="{{ asset('uploads/products/' . $product->image) }}" width="50px" alt="{{ $product->image }}">
                            </td>
                            <td >{{ $product->name }}</td>
                            <td>{{ $product->qty }}</td>
                            <td>{{ number_format($product->price) }} VNĐ</td>
                            <td>{{ number_format($product->offer_price) }} VNĐ</td>
                            <td>
                                <div class="form-check form-switch form-check-success">
                                    @if($product->status == 1)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $product->id }}" id="flexSwitchCheckSuccess" checked>
                                    @elseif($product->status == 0)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $product->id }}" id="flexSwitchCheckSuccess">
                                    @endif
                                </div>
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.product.edit', $product->id) }}"><i class="fa-solid fa-pen fs-6 text-light"></i>Edit</a>
                                <a class="btn btn-danger delete-item" href="{{ route('admin.product.destroy', $product->id) }}"><i class="fa-solid fa-trash fs-6"></i>Delete</a>
                                <!-- Button trigger modal -->
                                <button id="modal_product_show" data-url="{{ route('admin.product.show', $product->id) }}" type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#productDetails">
                                    Chi tiết
                                </button>
                                @include('admin.product.partials.modal')
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
        $('body').off('click', '#modal_product_show').on('click', '#modal_product_show', function() {
            var baseURL = "{{ asset('uploads/gallery/') }}";
            var url = $(this).attr('data-url');
            $.ajax({
                url: url,
                method: 'GET',
                success: function(data) {
                    $('#modal_img').attr('src', `{{ asset('uploads/products') }}` + '/' + data[0].image)
                    $('#modal_name').text(data[0].name)
                    $('#modal_id').text(data[0].id)
                    $('#modal_sku').text(data[0].sku)
                    $('#modal_slug').text(data[0].slug)
                    $('#modal_quantity').text(data[0].qty)
                    $('#modal_weight').text(data[0].weight)
                    $('#modal_price').text(data[0].price)
                    $('#modal_offer_price').text(data[0].offer_price)
                    $('#modal_offer_start_date').text(data[0].offer_start_date)
                    $('#modal_product_type').text(data[0].product_type)
                    $('#modal_views').text(data[0].views)
                    $('#modal_category').text(data[0].category_id)
                    $('#modal_sub_category').text(data[0].sub_category_id)
                    $('#modal_child_category').text(data[0].child_category_id)
                    $('#modal_status').text(data[0].status)
                    $('#modal_video_link').text(data[0].video_link)
                    $('#modal_seo_title').text(data[0].seo_title)
                    $('#modal_seo_description').text(data[0].seo_description)
                    $('#modal_short_description').html(data[0].short_description)
                    $('#modal_long_description').html(data[0].long_description)
                    $('#modal_created_date').text(data[0].created_at)

                    $('#modal_gallery').html(``);
                    data[1].forEach(img => {
                        var imgURL = baseURL + '/' + img.image;
                        $('#modal_gallery').append(`<img class="modal_image_gallery" src="${imgURL}">`);
                    });
                }
            })
        })
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