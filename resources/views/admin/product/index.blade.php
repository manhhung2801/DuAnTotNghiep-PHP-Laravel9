@extends('admin.layouts.master')

@section('title', 'Danh sách sản phẩm')

@section('content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Sản phẩm</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <div class="action_start float-start d-flex">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Danh sách sản phẩm</h6>
                <div class="form-search ms-2">
                    <form action="" method="get">
                        <div class="input-group">
                            <input value="{{ Request::get('keyword') }}" type="text" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light querySearch" placeholder="Tìm kiếm">
                            <button class="btn btn-outline-primary rounded-end-5 buttonSearch" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
                <a href="{{ route('admin.product.index') }}" class="me-2 btn btn-success ms-2"><i class="fa-solid fa-rotate-left fs-6"></i> Làm mới</a>
            </div>

            <a href="{{route('admin.product.trash-list')}}" class="btn btn-danger float-end"><i class="fa-solid fa-trash-can fs-6"></i>Thùng rác</a>
            <a href="{{ route('admin.product.create') }}" class="btn btn-primary float-end me-2"><i class="fa-solid fa-plus text-light fs-6"></i>Thêm sản phẩm</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Giảm giá</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getProduct as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td class="text-center">
                                <img src="{{ asset('uploads/products/' . $product->image) }}" width="50px" alt="{{ $product->image }}">
                            </td>
                            <td>{{ $product->name }}</td>
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
                                <a class="btn btn-primary btn-sm" href="{{ route('admin.product.edit', $product->id) }}"><i class="fa-solid fa-pen fs-6 text-light"></i>Sửa</a>
                                <a class="btn btn-danger btn-sm delete-item" href="{{ route('admin.product.destroy', $product->id) }}"><i class="fa-solid fa-trash fs-6"></i>Xóa</a>
                                <a class="btn btn-warning btn-sm" href="{{ route('admin.product.variant', $product->id) }}"><i class="fa-solid fa-wand-magic-sparkles fs-6"></i>Biến Thể</a>
                                <!-- Button trigger modal -->
                                <button id="modal_product_show" data-url="{{ route('admin.product.show', $product->id) }}" type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#productDetails">
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
            var baseGallery = "{{ asset('uploads/gallery/') }}";
            var url = $(this).attr('data-url');
            setTimeout(() => {
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

                        //img gallery
                        $('#modal_gallery').html(``);
                        data[0].product_image_galleries.forEach(img => {
                            var imgURL = baseGallery + '/' + img.image;
                            $('#modal_gallery').append(`<img class="modal_image_gallery" src="${imgURL}">`);
                        });

                        // variant Item
                        var variant_item = $('#variant_item').html(``)
                        if (data[0].variant.length !== null) {
                            data[0].variant.forEach(vari => {
                                var col = $('<td></td>')
                                variant_item.append(`<th scope="row">${vari.name}</th>`)
                                vari.variant_item.forEach(item => {
                                    var colspan = col.append(`<span class="me-2">${item.name}</span>`)
                                    variant_item.append(colspan)
                                })
                            });
                        }
                    }
                })
            }, 500)
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
