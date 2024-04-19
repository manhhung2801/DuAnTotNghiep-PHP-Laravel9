@extends('admin.layouts.master')

@section('title', 'Create a product')

@section('content')


<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Products</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Create a product</li>
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
            <form class="row g-3" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="sku" class="form-label">SKU</label>
                    <input type="text" class="form-control" id="sku" name="sku" placeholder="sku">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity">
                </div>
                <div class="row mt-3">
                    <h5>Image:</h5>
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="thumb_image" class="form-label">Thumbnail Image</label>
                        <input type="file" class="form-control" id="thumb_image" name="thumb_image[]" multiple accept="image/*">
                    </div>
                </div>
                <div class="row mt-3">
                    <h5>Price:</h5>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="Price...">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="offer_price" class="form-label">Offer Price</label>
                        <input type="text" class="form-control" id="offer_price" name="offer_price" placeholder="Offer Price...">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="offer_start_date" class="form-label">Offer Start Date</label>
                        <input type="date" class="form-control" id="offer_start_date" name="offer_start_date">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="offer_end_date" class="form-label">Offer End Date</label>
                        <input type="date" class="form-control" id="offer_end_date" name="offer_end_date">
                    </div>
                </div>
                <div class="row mt-3">
                    <h5>Categories:</h5>
                    <div class="col-md-4">
                        <label for="category" class="form-label">Categories</label>
                        <select id="category" class="form-select main-category" name="category_id">
                            <option>Select</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="sub_category" class="form-label">Sub Categories</label>
                        <select id="sub_category" class="form-select sub-category" name="sub_category_id">
                            <option>Select</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="child_category" class="form-label">Child Categories</label>
                        <select id="child_category" class="form-select child-category" name="child_category_id">
                            <option>Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="video_link" class="form-label">Video Upload</label>
                    <input type="url" class="form-control" id="video_link" name="video_link" placeholder="https://example.com" pattern="https://.*">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="product_type" class="form-label">Product Type</label>
                    <input type="text" class="form-control" id="product_type" name="product_type">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="is_approved" class="form-label">Is Approved</label>
                    <input type="text" class="form-control" id="is_approved" name="is_approved">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status: </label>
                    <div class="radio-select">
                        <input class="form-check-input" id="active" type="radio" value="1" name="status" checked>
                        <label class="form-check-label me-4" for="active">Active</label>
                        <input class="form-check-input" id="inactive" type="radio" value="0" name="status">
                        <label class="form-check-label" for="inactive">Inactive</label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="seotitle" class="form-label">SEO Title</label>
                    <input type="text" class="form-control" id="seotitle" name="seo_title">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="seodesc" class="form-label">SEO Description</label>
                    <input type="text" class="form-control" id="seodesc" name="seo_desction">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="editor" class="form-label">Long Description</label>
                    <textarea class="form-control editor1" name="long_description" id="editor"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="editor2" class="form-label">Short Description</label>
                    <textarea class="form-control editor2" name="short_description" id="short_description"></textarea>
                </div>
                <div class="col-md-2">
                    <div class="d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endpush

