@extends('admin.layouts.master')

@section('title', 'Trashed StoreAddress')

@section('content')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Trashed StoreAddress</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Trashed Store-Address</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-header">
                <div class="action_start float-start d-flex">
                    <h6 class="mt-2 mb-0 text-uppercase">Trashed Store-Address</h6>
                    <form action="" method="get">
                        {{-- @csrf --}}
                        <div class="form-search ms-2">
                            <div class="input-group">
                                <input value="{{ Request::get('keyword') }}" type="text"
                                    class="form-control buttonSearch rounded-start-5 focus-ring focus-ring-light"
                                    placeholder="Tìm kiếm" name="keyword">
                                <button class="btn btn-outline-primary rounded-end-5" type="submit"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('admin.storeAddress.trash-list') }}" class="me-2 btn btn-success float-end ms-2">Reset</a>
                </div>
                <a href="{{ route('admin.storeAddress.index') }}" class="btn btn-warning float-end">Back</a>
                
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Store_Name</th>
                                <th>Address</th>
                                <th>Ward</th>
                                <th>District</th>
                                <th>Province</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($getStoreAddress as $storeAddress)
                                <tr>
                                    <td>{{ $storeAddress->id }}</td>
                                    <td>{{ $storeAddress->store_name }}</td>
                                    <td>{{ $storeAddress->address }}</td>
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
                                        <a class="btn btn-primary restoreTrash-item"
                                            href="{{ route('admin.storeAddress.restore-trash', $storeAddress->id) }}">Restore</a>
                                        <a class="btn btn-danger delete-item"
                                            href="{{ route('admin.storeAddress.destroy-trash', $storeAddress->id) }}">Delete
                                            Forever</a>
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
                </div>
            </div>
        </div>
    </div>
@endsection
