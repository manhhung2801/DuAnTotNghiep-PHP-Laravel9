@extends('admin.layouts.master')

@section('title', 'Biến thể nhỏ')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">Biến thể nhỏ</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">{{ $product->name }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $variant->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">Tạo mới biến thể nhỏ</h6>
                <a href="{{ route("admin.product.variant", $product->id) }}" class="btn btn-primary float-end">Trở về</a>
            </div>
            <div class="card-body">
                <form class="row g-3" action="{{ route("admin.variantItem.store") }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_variant_id" value="{{ $variant->id }}">
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Tên</label>
                        <input type="text" class="form-control" id="input1" name="name" placeholder="Name">
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">Giá</label>
                        <input type="number" class="form-control" id="input1" name="price" placeholder="Price">
                    </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Is Default</label>
                        <select id="input9" class="form-select" name="is_default">
                            <option value="1">True</option>
                            <option value="0">False</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="input9" class="form-label">Trạng thái</label>
                        <select id="input9" class="form-select" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <div class="gap-3 d-grid align-items-center">
                            <button type="submit" class="px-4 btn btn-primary">Tạo mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="page-content">
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
                    <a href="{{ route("admin.product.variant.variant-item", $variant->id) }}" class="me-2 btn btn-success float-end ms-2"><i
                            class="fa-solid fa-rotate-left fs-6"></i>Reset</a>
                </div>
            </div>



            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
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

                                            <a class="btn btn-primary" href="{{ route('admin.variantItem.edit', $variantItem->id) }}">
                                                <i class="fa-solid fa-pen fs-6 text-light"></i>
                                                Edit
                                            </a>
                                            <a class="btn btn-danger delete-item" href="{{ route('admin.variantItem.destroy', $variantItem->id) }}">
                                                <i class="fa-solid fa-trash fs-6"></i>
                                                Delete
                                            </a>
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
