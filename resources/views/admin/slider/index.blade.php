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
                <h6 class="mt-2 mb-0 text-uppercase float-start">List Sliders</h6>
                <a href="{{ route('admin.slider.create') }}" class="btn btn-warning float-end">Add Slider</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Banner</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Starting_price</th>
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
                                        <img src="/{{ $slider->banner }}" alt="" width="50px">
                                    </td>
                                    <td>{{ $slider->type }}</td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->starting_price }}</td>
                                    <td>{{ $slider->btn_url }}</td>
                                    <th>{{ $slider->serial }}</th>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($slider->status == 1)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $slider->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($slider->status == 0)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $slider->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>

                                    <td>
                                        <a class="btn btn-warning"
                                            href="{{ route('admin.slider.edit', $slider->id) }}">Edit</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.slider.destroy', $slider->id) }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
