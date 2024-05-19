@extends('admin.layouts.master')

@section('title', 'VariantItem')

@section('content')
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">VariantItem</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">VariantItem</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <h6 class="mt-2 mb-0 text-uppercase float-start">VariantItem</h6>
                <a href="{{ route('admin.variantItem.onlyTrashed') }}" class="mx-1 btn btn-danger float-end">Recycle Bin</a>
                <a href="{{ route('admin.variantItem.index') }}" class="mx-1 btn btn-info float-end">VariantItem List</a>
                <a href="{{ route('admin.variantItem.create') }}" class="mx-1 btn btn-warning float-end">Add variantItem</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Variant Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Is Default</th>
                                <th>Status</th>
                                <th>Action</th>
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
                                            <a class="btn btn-warning"
                                                href="{{ route('admin.variantItem.edit', $variantItem->id) }}">Edit</a>
                                            <a class="btn btn-danger delete-item"
                                                href="{{ route('admin.variantItem.destroy', $variantItem->id) }}">Delete</a>
                                        @else
                                            <a class="btn btn-secondary"
                                                href="{{ route('admin.variantItem.restore', $variantItem->id) }}">Restore</a>
                                            <a class="btn btn-danger delete-item"
                                                href="{{ route('admin.variantItem.delete', $variantItem->id) }}">Delete</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Product Variant Id</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Is Default</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
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
