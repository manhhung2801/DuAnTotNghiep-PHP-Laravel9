@extends('admin.layouts.master')

@section('title', 'Create Child Category')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Categories</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Child Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Create Child Category</h6>
                <a href="{{ route("admin.child-category.index") }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route("admin.child-category.update", $childCategory->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="input1" value="{{ $childCategory->name }}" name="name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="input7" class="form-label">Categories</label>
                        <select id="input9" class="form-select main-category" name="category">
                            <option>Select</option>
                            @foreach ($categories as $category)
                                <option {{ $childCategory->category_id == $category->id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="input7" class="form-label">Sub Categories</label>
                        <select id="input9" class="form-select sub-category" name="sub_category">
                            @foreach ($subCategories as $subCategory)
                                <option {{$subCategory->id == $childCategory->sub_category_id ? 'selected' : '' }} value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Status</label>
                        <select id="input9" class="form-select" name="status">
                            <option {{ $childCategory->status == 1 ? "selected" : "" }} value="1">Active</option>
                            <option {{ $childCategory->status == 0 ? "selected" : "" }} value="0">Inactive</option>
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



@push('scripts')
    <script>
        $(document).ready(function() {
            $('body').on('change', ".main-category", function(e) {
                let id = $(this).val();

                $.ajax({
                    method: "GET",
                    url: "{{route('admin.get-subcategories')}}",
                    data: {
                        id: id
                    },
                    success: function (data) {
                        // Clear existing options
                        $('.sub-category').html('<option value="">Select</option>');
                        $.each(data, function(i, item){
                                $('.sub-category').append(`<option value="${item.id}">${item.name}</option>`);
                        })
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            })
        })
    </script>
@endpush
