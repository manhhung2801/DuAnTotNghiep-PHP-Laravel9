@extends('admin.layouts.master')

@section('title', 'Mục biến thể')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">Mục biến thể</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Danh sách mục biến thể</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">

            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Mục biến thể</h6>
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
                    <a href="{{ route('admin.variantItem.index') }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Reset</a>
                </div>
                <a href="{{ route('admin.variantItem.onlyTrashed') }}" class="mx-1 btn btn-danger float-end"><i
                        class="fa-solid fa-trash-can fs-6"></i>Mục biến thể xóa tạm</a>
                <a href="{{ route('admin.variantItem.create') }}" class="mx-1 btn btn-primary float-end"><i
                        class="fa-solid fa-plus text-light fs-6"></i>Thêm mới mục biến thể</a>
            </div>



            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Mã biến thể sản phẩm</th>
                                <th>Tên</th>
                                <th>Giá</th>
                                <th>Is Default</th>
                                <th>Trạng thái</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($variantItem as $variantItem)
                                <tr>
                                    <td>{{ $variantItem->id }}</td>
                                    <td>{{ $variantItem->product_variant_id }}</td>
                                    <td>{{ $variantItem->name }}</td>
                                    <td>{{ $variantItem->price }}</td>
                                    <td>{{ $variantItem->is_default }}</td>
                                    <td>
                                        <div class="form-check form-switch form-check-success">
                                            @if ($variantItem->status == 1)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $variantItem->id }}" id="flexSwitchCheckSuccess" checked>
                                            @elseif($variantItem->status == 0)
                                                <input class="form-check-input change-status" type="checkbox" role="switch"
                                                    data-id="{{ $variantItem->id }}" id="flexSwitchCheckSuccess">
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        @if ($variantItem->deleted_at == null)
                                            <a class="btn btn-primary"
                                                href="{{ route('admin.variantItem.edit', $variantItem->id) }}"><i
                                                    class="fa-solid fa-pen fs-6 text-light"></i>Edit</a>
                                            <a class="btn btn-danger delete-item"
                                                href="{{ route('admin.variantItem.destroy', $variantItem->id) }}"><i
                                                    class="fa-solid fa-trash fs-6"></i>Delete</a>
                                        @else
                                            <a class="btn btn-info restoreTrash-item"
                                                href="{{ route('admin.variantItem.restore', $variantItem->id) }}"><i
                                                    class="fa-solid fa-trash-can-arrow-up fs-6"></i>Restore</a>
                                            <a class="btn btn-danger delete-item"
                                                href="{{ route('admin.variantItem.destroyTrashed', $variantItem->id) }}"><i
                                                    class="fa-solid fa-trash fs-6"></i>Delete</a>
                                        @endif
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
            $('body').on('change', '.change-status', function() {
                let isChecked = $(this).is(':checked');
                let id = $(this).data('id');
                $.ajax({
                    method: "POST",
                    url: "{{ route('admin.variantItem.change-status') }}/" + id,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        _method: 'PUT',
                        status: isChecked
                    },
                    success: function(data) {
                        toastr.success(data.message);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endpush
