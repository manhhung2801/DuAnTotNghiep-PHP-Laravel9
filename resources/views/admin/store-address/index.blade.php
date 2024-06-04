@extends('admin.layouts.master')

@section('title', 'List StoreAddress')

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
                        <li class="breadcrumb-item active" aria-current="page">List StoreAddress</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">List Store-Address</h6>
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
                    <a href="{{ route('admin.storeAddress.index') }}" class="me-2 btn btn-success float-end ms-2"><i class="fa-solid fa-rotate-left fs-6"></i>Reset</a>
                </div>
                <a href="{{ route('admin.storeAddress.trash-list') }}" class="btn btn-danger float-end"><i class="fa-solid fa-trash-can fs-6"></i>Trashed
                    Store-Address</a>
                <a href="{{ route('admin.storeAddress.create') }}" class="btn btn-primary float-end me-2"><i class="fa-solid fa-plus text-light fs-6"></i>Add
                    Store-Address</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Store_Name</th>
                                {{-- <th>Address</th> --}}
                                <th>Ward</th>
                                <th>District</th>
                                <th>Province</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($storeAddress as $storeAddress)
                                <tr>
                                    <td>{{ $storeAddress->id }}</td>
                                    <td>{{ $storeAddress->store_name }}</td>
                                    {{-- <td>{{ $storeAddress->address }}</td> --}}
                                    <td>{{ $storeAddress->ward }}</td>
                                    <td>{{ $storeAddress->district }}</td>
                                    <td>{{ $storeAddress->province }}</td>
                                    <td>{{ $storeAddress->phone }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($storeAddress->status == 'active')
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $storeAddress->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($storeAddress->status == 'inactive')
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $storeAddress->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.storeAddress.edit', $storeAddress->id) }}"><i class="fa-solid fa-pen fs-6 text-light"></i>Edit</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.storeAddress.destroy', $storeAddress->id) }}"><i class="fa-solid fa-trash fs-6"></i>Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (session('message'))
                        <div class="text-gray">{{ session('message') }}</div>
                    @endif
                    {{-- {{ $storeAddress->links() }} --}}
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
                    url: "{{ route('admin.storeAddress.change-status') }}",
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
