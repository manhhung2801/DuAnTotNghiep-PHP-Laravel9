@extends('admin.layouts.master')

@section('title', 'Update Coupons')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Couponss</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Update Coupons</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <h6 class="mt-2 mb-0 text-uppercase float-start">Update Category</h6>
            <a href="{{ route('admin.coupons.index') }}" class="btn btn-primary float-end">Back</a>
        </div>
        <div class="card-body">
            <form class="row g-3" action="{{ route('admin.coupons.update', $Coupons->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                    <label for="input1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="input1" name="name" value="{{ $Coupons->name }}">
                </div>
                <div class="col-md-6">
                    <label for="input2" class="form-label">Code</label>
                    <input type="text" class="form-control" id="input2" name='code' value="{{ $Coupons->code }}">
                </div>
                <div class="col-md-6">
                    <label for="input3" class="form-label">Quantity</label>
                    <input id="input3" type="number" class="form-control" name="quantity" value="{{ $Coupons->quantity }}" />
                </div>
                <div class="col-md-6">
                    <label for="input4" class="form-label">Max use</label>
                    <input type="text" class="form-control" id="input4" name="max_use" value="{{ $Coupons->max_use }}">
                </div>
                <div class="col-md-6">
                    <label for="input5" class="form-label">Start date</label>
                    <input type="date" class="form-control" id="input5" name='start_date' value="{{ $Coupons->start_date }}">
                </div>
                <div class="col-md-6">
                    <label for="input6" class="form-label">End date</label>
                    <input type="date" class="form-control" id="input6" name="end_date" value="{{ $Coupons->end_date }}">
                </div>

                <div class="col-md-6">
                    <label for="input8" class="form-label">Discount type</label>
                    <input type="text" class="form-control" id="input8" name="discount_type" value="{{ $Coupons->discount_type }}">
                </div>

                <div class="col-md-6">
                    <label for="input9" class="form-label">Discount</label>
                    <input type="number" class="form-control" id="input9" name="discount" value="{{ $Coupons->discount }}">
                </div>

                <div class="col-md-6">
                    <label for="input9" class="form-label">Total used</label>
                    <input type="number" class="form-control" id="input9" name="total_used" value="{{ $Coupons->total_used }}">
                </div>
                <div class="col-md-6">
                    <label for="input7" class="form-label">Status</label>
                    <select id="input7" class="form-select" name="status">
                        <option selected="" value="1">Active</option>
                        <option value="0">Inactive</option>
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
</div>
</div>
@endsection