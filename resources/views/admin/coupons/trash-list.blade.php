@extends('admin.layouts.master')

@section('title', 'Trashed Product')

@section('content')

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Trashed Coupons</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Trashed Coupons</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-header">
            <div class="action_start float-start d-flex">
                <h6 class="mt-2 mb-0 text-uppercase">Trashed Soupons</h6>
                <div class="form-search ms-2">
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" value="{{ Request::get('keyword') }}" name="keyword" class="form-control rounded-start-5 focus-ring focus-ring-light" placeholder="Tìm kiếm">
                            <button class="btn btn-outline-primary rounded-end-5" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <a href="{{ route('admin.coupons.index') }}" class="btn btn-primary float-end">Back</a>
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
                            <th>discount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $stt = 1; @endphp
                        @foreach ($getCoupons as $item)
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
                                <a class="btn btn-primary restoreTrash-item" href="{{ route('admin.coupons.restore-trash', $item->id) }}">Restore</a>
                                <a class="btn btn-danger delete-item" href="{{ route('admin.coupons.destroy-trash', $item->id) }}">Delete Forever</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection