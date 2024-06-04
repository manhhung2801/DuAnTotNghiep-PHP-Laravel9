@extends('admin.layouts.master')

@section('title', 'Edit a product')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update Product</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <h6 class="mt-2 mb-0 text-uppercase float-start">Create a product</h6>
            <a href="{{ route('admin.product.index') }}" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <div class="col-lg-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $product->name }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" placeholder="Sku" value="{{ $product->sku }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ $product->slug }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity" value="{{ $product->qty }}">
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        <img src="{{ asset('uploads/products/'.$product->image) }}" alt="{{$product->image}}" width="50px">
                        <input type="hidden" value="{{$product->image}}" name="image_old">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="image_gallery" class="form-label">Image Gallery</label>
                        <input type="file" class="form-control" id="image_gallery" name="image_gallery[]" multiple accept="image/*">
                        <input type="hidden" value="{{$gallery}}" name="image_gallery_old">
                        @foreach ($gallery as $gall)
                        <img src="{{ asset('uploads/gallery/'.$gall->image) }}" alt="{{$gall->image}}" width="50px">
                        @endforeach
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price..." value="{{ $product->price }}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="offer_price" class="form-label">Offer Price</label>
                        <input type="text" class="form-control" id="offer_price" name="offer_price" placeholder="Offer Price..." value="{{ $product->offer_price }}">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="weight" class="form-label">Weight (KG)</label>
                        <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight..." value="{{ $product->weight }}">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="offer_start_date" class="form-label">Offer Start Date</label>
                        <input type="date" class="form-control" id="offer_start_date" name="offer_start_date" value="{{ $product->offer_start_date }}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="offer_end_date" class="form-label">Offer End Date</label>
                        <input type="date" class="form-control" id="offer_end_date" name="offer_end_date" value="{{ $product->offer_end_date }}">
                    </div>

                    <div class="col-lg-4 mb-3">
                        <label for="view" class="form-label">Views</label>
                        <input type="number" class="form-control" id="view" name="views" value="{{ $product->views }}">
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 mb-3">
                        <label for="category" class="form-label">Categories</label>
                        <select id="category" class="form-select main-category" name="category_id">
                            <option value="">Select</option>
                            @foreach ($category as $cate )
                            <option value="{{$cate->id}}" {{$cate->id==$product->category_id ? 'selected' : '' }}>{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="sub_category" class="form-label">Sub Categories</label>
                        <select id="sub_category" class="form-select sub-category" name="sub_category_id">
                            <option value="{{ $product->sub_category_id }}">{{ $product->subCategory->name }}</option>
                        </select>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="child_category" class="form-label">Child Categories</label>
                        <select id="child_category" class="form-select child-category" name="child_category_id">
                            <option value="{{ $product->child_category_id }}">{{ $product->childCategory->name }}</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 mb-3">
                        <label for="video_link" class="form-label">Video Upload</label>
                        <input type="url" class="form-control" id="video_link" name="video_link" placeholder="https://example.com" pattern="https://.*" value="{{ $product->video_link }}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="product_type" class="form-label">Product Type</label>
                        <input type="text" class="form-control" id="product_type" name="product_type" placeholder="New or Sale..." value="{{ $product->product_type }}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label class="form-label">Status: </label>
                        <div class="radio-select">
                            <input class="form-check-input" id="active" type="radio" value="1" name="status" {{ $product->status==1?'checked':''}}>
                            <label class="form-check-label me-4" for="active">Active</label>
                            <input class="form-check-input" id="inactive" type="radio" value="0" name="status" {{$product->status==0?'checked':''}}>
                            <label class="form-check-label" for="inactive">Inactive</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-6 mb-3">
                        <label for="seotitle" class="form-label">SEO Title</label>
                        <input type="text" class="form-control" id="seotitle" name="seo_title" value="{{ $product->seo_title }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="seodesc" class="form-label">SEO Description</label>
                        <input type="text" class="form-control" id="seodesc" name="seo_description" value="{{ $product->seo_description }}">
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="editor" class="form-label">Long Description</label>
                    <textarea class="form-control description" name="long_description" id="editor">{!! $product->long_description !!}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea class="form-control description" name="short_description" id="short_description">{!! $product->short_description !!}</textarea>
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
@push('scripts')

<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('change', ".main-category, .sub-category", function(e) {
            let id = $(this).val();
            let url = "";
            if ($(this).hasClass('main-category')) {
                url = "{{ route('admin.get-subcategories') }}"
            } else {
                url = "{{ route('admin.get-childcategories') }}"
            }
            let targetSelect = $(this).hasClass('main-category') ? $('.sub-category') : $('.child-category')
            $.ajax({
                method: "GET",
                url: url,
                data: {
                    id: id
                },
                success: function(data) {
                    targetSelect.html('<option value="">Select</option>')
                    $.each(data, function(i, item) {
                        targetSelect.append(`<option value="${item.id}">${item.name}</option>`);
                    })
                },
                error: function(xhr, status, error) {
                    console.log(error);
                }
            })
        })
    });
</script>
@endpush