@extends('admin.layouts.master')

@section('title', 'List Sliders')

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
                        <li class="breadcrumb-item active" aria-current="page">List Sliders</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">List Sliders</h6>
                    <form action="" method="get">
                        {{-- @csrf --}}
                        <div class="form-search ms-2 ">
                            <div class="input-group">
                                <input value="{{ Request::get('keyword') }}" type="text"
                                    class=" form-control rounded-start-5 focus-ring focus-ring-light querySearch"
                                    placeholder="Tìm kiếm" name="keyword">
                                <button class="btn btn-outline-primary rounded-end-5 buttonSearch " type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('admin.slider.index') }}" class="me-2 btn btn-success float-end ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>Reset</a>
                </div>
                <a href="{{ route('admin.slider.trash-list') }}" class="btn btn-danger float-end"><i class="fa-solid fa-trash-can fs-6"></i></i>Trashed Slider</a>
                <a href="{{ route('admin.slider.create') }}" class="btn btn-primary float-end me-2"><i class="fa-solid fa-plus text-light fs-6"></i>Add Slider</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Banner</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Url</th>
                                <th>Serial</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/slider') }}/{{ $slider->banner }}" alt=""
                                            width="50px">
                                    </td>
                                    <td>{{ $slider->type }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ number_format($slider->starting_price) }} VNĐ</td>
                                    <td>{{ $slider->btn_url }}</td>
                                    <td>{{ $slider->serial }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($slider->status == 1)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $slider->id }}" id="flexSwitchCheckSuccess" checked >
                                            @elseif($slider->status == 0)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $slider->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary text-light"
                                            href="{{ route('admin.slider.edit', $slider->id) }}"><i class="fa-solid fa-pen fs-6 text-light"></i>Edit</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.slider.destroy', $slider->id) }}"><i class="fa-solid fa-trash fs-6"></i>Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (session('message'))
                        <div class="text-gray">
                            {{ session('message') }}
                        </div>
                    @endif
                    {{ $sliders->links() }}
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
                    url: "{{ route('admin.slider.change-status') }}",
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
