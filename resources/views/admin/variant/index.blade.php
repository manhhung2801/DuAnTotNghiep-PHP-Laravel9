@extends('admin.layouts.master')

@section('title', 'Biến thể')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Biến thể</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Thêm mới biến thể</h6>
                <a href="{{ route("admin.product.index") }}" class="btn btn-primary float-end">Quay lại</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route("admin.variant.store") }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Tên</label>
                        <input type="text" class="form-control" id="input1" name="name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Trạng thái</label>
                        <select id="input9" class="form-select" name="status">
                            <option value="1">Hoạt động</option>
                            <option value="0">Không hoạt động</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Thêm mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="page-content">
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase float-start">Danh sách biến thể</h6>
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
                    <a href="{{ route("admin.product.variant", $product->id) }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Làm mới</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th width="100">Id</th>
                                <th width="200">Tên</th>
                                <th width="150">Trạng thái</th>
                                <th width="150">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($variant as $variant)
                                <tr>
                                    <td>{{ $variant->id }}</td>
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
                                    <td class="text-center">
                                        <a class="btn btn-warning btn-sm" href="{{ route("admin.product.variant.variant-item", $variant->id) }}"><i class="fa-solid fa-wand-magic-sparkles fs-6"></i>Biến Thể Con</a>
                                        <a class="btn btn-primary" href="{{ route('admin.variant.edit', $variant->id) }}"><i
                                                class="fa-solid fa-pen fs-6 text-light"></i>Chỉnh sửa</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.variant.destroy', $variant->id) }}"><i
                                                class="fa-solid fa-trash fs-6"></i>Xóa</a>
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
