@extends('admin.layouts.master')

@section('title', 'List Coupons')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Coupons</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">List Coupons</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <h6 class="mt-2 mb-0 text-uppercase float-start">List Coupons</h6>
            <div class="action_start float-start d-flex">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="text" value="{{ Request::get('keyword') }}" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                        <button class="btn btn-outline-primary rounded-end-5" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <a href="{{ route("admin.coupons.index") }}" class="me-2 btn btn-success float-end ms-2">Reset</a>
            </div>
            <a href="{{route('admin.coupons.trash-list')}}" class="btn btn-danger float-end mx-2">Trashed Coupons</a>
            <a href="{{route('admin.coupons.create') }}" class="btn btn-warning float-end">Add Coupons</a>
          
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered " style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>name</th>
                            <th>Code</th>
                            <th>quantity</th>
                            {{-- <th>start_date</th>
                                <th>end_date</th> 
                                <th>discount_type</th>--}}
                            <th>discount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $stt = 1; @endphp
                        @foreach ($coupons as $item)
                        <tr>
                            <td> @php echo $stt++; @endphp</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->quantity}}</td>
                            <td>{{ $item->discount}}</td>

                            <td>
                                <div class="form-check form-switch form-check-success">
                                    @if ($item->status == 1)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $item->id }}" id="flexSwitchCheckSuccess" checked>
                                    @elseif($item->status == 0)
                                    <input class="form-check-input change-status" type="checkbox" role="switch" data-id="{{ $item->id }}" id="flexSwitchCheckSuccess">
                                    @endif
                                </div>

                            <td>
                                <a class="btn btn-warning" href="{{ route('admin.coupons.show', $item->id) }}">Edit</a>
                                <a class="btn btn-danger delete-item" href="{{ route('admin.coupons.destroy', $item->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $coupons->links() }}
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
                url: "{{ route('admin.coupons.change-status') }}",
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