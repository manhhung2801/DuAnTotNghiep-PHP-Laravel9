@extends('admin.layouts.master')

@section('title', 'Create Slider')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Sliders</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Create Slider</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Create Slider</h6>
                <a href="{{ route('admin.slider.index') }}" class="btn btn-primary float-end">Back</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('admin.slider.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Type</label>
                        <input type="text" class="form-control" id="input1" name="type"
                            value="{{ old('type') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input2" class="form-label">Title</label>
                        <input type="text" class="form-control" id="input2" name='title'
                            value="{{ old('title') }}">
                    </div>
                    <div class="col-md-12">
                        <label for="input3" class="form-label">Banner</label>
                        <div class="col-sm-9 text-secondary">
                            <input id="input3" type="file" class="form-control" name="banner" />
                            {{ old('banner') }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="input4" class="form-label">Starting_price</label>
                        <input type="text" class="form-control" id="input4" name="starting_price"
                            value="{{ old('starting_price') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input5" class="form-label">Serial</label>
                        <input type="number" class="form-control" id="input5" name='serial'
                            value="{{ old('serial') }}">
                    </div>
                    <div class="col-md-6">
                        <label for="input6" class="form-label">Url</label>
                        <input type="text" class="form-control" id="input6" name="btn_url"
                            value="{{ old('btn_url') }}">
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
                            <button type="submit" class="btn btn-primary px-4">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@endsection
