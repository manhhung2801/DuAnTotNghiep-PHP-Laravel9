@extends('admin.layouts.master')

@section('title', 'Variant')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Variant</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Variant</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Variant</h6>
                    <div class="form-search ms-2">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" value="{{ Request::get('keyword') }}" name="keyword"
                                    class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                                <button class="btn btn-outline-primary rounded-end-5" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                    <a href="{{ route('admin.variant.index') }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Reset</a>
                </div>
                <a href="{{ route('admin.variant.trashed-variant') }}" class="btn btn-danger float-end "><i
                        class="fa-solid fa-trash-can fs-6"></i>Trashed variant</a>
                <a href="{{ route('admin.variant.create') }}" class="btn btn-primary float-end me-2"><i
                        class="fa-solid fa-plus text-light fs-6"></i>Add variant</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product_id</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($variant as $variant)
                                <tr>
                                    <td>{{ $variant->id }}</td>
                                    <td>{{ $variant->product_id }}</td>
                                    <td>{{ $variant->name }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($variant->status == 1)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $variant->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($variant->status == 0)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $variant->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('admin.variant.edit', $variant->id) }}"><i
                                                class="fa-solid fa-pen fs-6 text-light"></i>Edit</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.variant.destroy', $variant->id) }}"><i
                                                class="fa-solid fa-trash fs-6"></i>Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
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
                    url: "{{ route('admin.variant.change-status') }}",
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
